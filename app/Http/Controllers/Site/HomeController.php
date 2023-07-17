<?php

namespace App\Http\Controllers\Site;

use App\Models\Post;
use App\Models\Ads;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\Member;
use App\Models\RolePermission;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;

final class HomeController extends SiteController
{
    public function index()
    {
        $items = Product::all();
        $member = Member::query()->where('id', auth(RolePermission::GUARD_NAME_WEB)->id())->first();
        $banner = Ads::query()->where('position', 'banner')->where('status', 1)->get();
        $banner_home_1 = Ads::query()->where('position', 'banner_home_1')->where('status', 1)->get()->first();
        $banner_home_2 = Ads::query()->where('position', 'banner_home_2')->where('status', 1)->get()->first();
        $banner_home_3 = Ads::query()->where('position', 'banner_home_3')->where('status', 1)->get()->first();
        $productCategories = ProductCategory::query()->where('level', 0)
            ->where('show_in_front', 1)->orderBy('sort_order')->get();

        // ý kiến khách hàng
        $itemYKienKhachHang = Post::query()
            ->where('category_id', PostCategory::CATEGORY_Y_KIEN_KHACH_HANG)
            ->where('status', Post::STATUS_ACTIVE)
            ->orderByDesc('id')
            ->limit(1)
            ->first();
        $categoryYKienKhachHang = PostCategory::query()->find(PostCategory::CATEGORY_Y_KIEN_KHACH_HANG);

        // nhà đẹp
        $itemNhaDep = Post::query()
            ->where('category_id', PostCategory::CATEGORY_NHA_DEP)
            ->where('status', Post::STATUS_ACTIVE)
            ->orderByDesc('id')
            ->limit(3)
            ->get();
        $categoryNhaDep = PostCategory::query()->find(PostCategory::CATEGORY_NHA_DEP);

        // ảnh bàn giao
        $itemAnhBanGiao = Post::query()
            ->where('category_id', PostCategory::CATEGORY_ANH_BAN_GIAO)
            ->where('status', Post::STATUS_ACTIVE)
            ->orderByDesc('id')
            ->first();
        $categoryAnhBanGiao = PostCategory::query()->find(PostCategory::CATEGORY_ANH_BAN_GIAO);

        $data = [
            'items' => $items,
            'itemNhaDep' => $itemNhaDep,
            'categoryNhaDep' => $categoryNhaDep,
            'itemYKienKhachHang' => $itemYKienKhachHang,
            'categoryYKienKhachHang' => $categoryYKienKhachHang,
            'itemAnhBanGiao' => $itemAnhBanGiao,
            'categoryAnhBanGiao' => $categoryAnhBanGiao,
            'member' => $member,
            'banner' => $banner,
            'banner_home_1' => $banner_home_1,
            'banner_home_2' => $banner_home_2,
            'banner_home_3' => $banner_home_3,
            'productCategories' => $productCategories,
            'title' => 'MSneaker | Shop bán giày'
        ];

        return view($this->layout.'home.index', $this->render($data));
    }
}