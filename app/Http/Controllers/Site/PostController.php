<?php

namespace App\Http\Controllers\Site;

use App\Models\Post;
use App\Models\PostCategory;
use App\Services\PostService;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Comment;
use App\Models\RolePermission;
use Illuminate\Support\Facades\Auth;



/**
 * Class PostController.
 *
 * @property PostService $postService
 */
final class PostController extends SiteController
{
    public function __construct(PostService $postService)
    {
        parent::__construct();
        $this->postService = $postService;
    }

    public function index(Request $request, $slugCategory = '')
    {
        
        $this->postService->buildCondition($request->all(), $condition, $sortBy, $sortType);

        // lay category
        $postCategory = PostCategory::query()->where('slug', $slugCategory)->first();

        $member = Member::query()->where('id', auth(RolePermission::GUARD_NAME_WEB)->id())->first();


        // load 20 danh sach tin chính
        $mode = Post::query()->where('status', Post::STATUS_ACTIVE);
        if (!empty($postCategory->id)) {
            $mode->where('category_id', $postCategory->id);
        }
        $items = $mode->paginate(3);

        // load 10 tin xem nhieu nhat
        $itemView = Post::query()
            ->where('status', Post::STATUS_ACTIVE)
            ->orderByDesc('views')
            ->limit(10)
            ->get();

        // load 5 tin khuyen mai
        $itemPromotion = Post::query()
            ->where('category_id', PostCategory::CATEGORY_KHUYEN_MAI)
            ->where('status', Post::STATUS_ACTIVE)
            ->orderByDesc('views')
            ->limit(5)
            ->get();

        $data = [
            'postCategory' => $postCategory,
            'items' => $items,
            'itemView' => $itemView,
            'itemPromotion' => $itemPromotion,
            'title' => !empty($postCategory->title) ? $postCategory->title : 'No Category',
            'member' => $member,
        ];

        return view($this->layout.'post.index', $this->render($data));
    }

    public function view(Request $request, $slugCategory, $slugPost)
    {
        $member = Member::query()->where('id', auth(RolePermission::GUARD_NAME_WEB)->id())->first();
        $post = Post::query()->where('slug', $slugPost)->first();
        $type = Post::all();
        $post_id = Post::all();
        $comments = Comment::query()
                ->where(['status' => Comment::STATUS_APPROVED, 'post_id'=> $post->id])
                ->get()
                ->take(100);

        if (empty($post)) {
            return redirect(base_url('404.html'));
        }

        Post::query()->increment('views');

        $items = Post::query()->where(['category_id' => $post->category_id])->orderByDesc('id')->paginate($this->page_number);

        $data = [
            'title' => $post->title,
            'post' => $post,
            'items' => $items,
            'member' => $member,
            'type' => $type,
            'post_id' => $post_id,
            'comments' => $comments,
        ];

        return view($this->layout.'post.post_detail', $this->render($data));
    }


    function postDetail()
    {
        return view($this->layout.'post.post_detail');
    }
}
