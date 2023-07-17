<?php

namespace App\Http\Controllers\Site;

use App\Models\Post;
use App\Models\Ads;
use App\Models\Product;
use App\Services\PostService;
use App\Models\Member;
use App\Models\RolePermission;
use Illuminate\Http\Request;

/**
 * Class SearchController.
 *
 * @property PostService $postService
 */
final class SearchController extends SiteController
{
    public function __construct(PostService $postService)
    {
        parent::__construct();
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $params = $request->only('s');
        $itemProducts = null;
        $member = Member::query()->where('id', auth(RolePermission::GUARD_NAME_WEB)->id())->first();
        $banner = Ads::query()->where('position', 'banner')->where('status', 1)->get();


        // $itemPosts = $itemProducts = null;

        if (!empty($params['s'])) {
            $keyword = $params['s'];
            // $itemPosts = Post::query()->where('status', '=', Post::STATUS_ACTIVE)->where('title', 'like', $keyword . '%')->orderByDesc('id')->get()->take(10);
            $itemProducts = Product::query()->where('status', '=', Product::STATUS_ACTIVE)->where('title', 'like','%'. $keyword . '%')->orderByDesc('id')->get()->take(10);

        }

        $data = [
            // 'itemPosts' => $itemPosts,
            'itemProducts' => $itemProducts,
            'title' => trans('common.search'),
            'member' => $member,
            'banner' => $banner,
        ];

        return view($this->layout . 'search.view', $this->render($data));
    }
}
