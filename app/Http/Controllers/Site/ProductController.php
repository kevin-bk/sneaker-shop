<?php

namespace App\Http\Controllers\Site;

use App\Models\Nav;
use App\Models\Member;
use App\Models\Product;
use App\Models\RolePermission;
use App\Models\ProductCategory;
use App\Services\ProductService;
use Illuminate\Http\Request;



/**
 * Class ProductController.
 *
 * @property ProductService $productService
 */
final class ProductController extends SiteController
{
    public $qty;

    public function __construct(ProductService $productService)
    {
        parent::__construct();
        $this->productService = $productService;
    }

    public function index(Request $request, $slugCategory = '')
    {
        $sortBy = $request->get('sort_by', 'id');
        $sortType = $request->get('sort_type', 'DESC');

        // lay danh muc
        $productCategory = ProductCategory::query()->where('slug', $slugCategory)->first();

        $model = Product::query()->where('status', Product::STATUS_ACTIVE);

        $member = Member::query()->where('id', auth(RolePermission::GUARD_NAME_WEB)->id())->first();


        if (!empty($productCategory->id)) {
            // lay danh sach category con của danh mục đang chọn ở trên $productCategory
            $productCategoryIds = ProductCategory::query()
                ->where('parent_id', $productCategory->id)
                ->pluck('id')
                ->all();

            // merge thêm category hiện tại
            if (!empty($productCategoryIds)) {
                // hàm này merge 2 mảng lại với nhau
                $categoryIds = array_merge($productCategoryIds, [$productCategory->id]);
            } else {
                $categoryIds = [
                    $productCategory->id
                ];
            }

            $model->whereIn('category_id', $categoryIds);
        }

        $items = Product::query()->where('category_id', $productCategory->id)->orderBy($sortBy, $sortType)->paginate(8);

        $data = [
            'productCategory' => $productCategory,
            'items' => $items,
            'title' => $productCategory->title ?? 'Danh mục sản phẩm',
            'member' => $member,
        ];

        return view($this->layout.'product.index', $this->render($data));
    }

    public function view(Request $request, $slugCategory, $slugProduct)
    {
        $product = Product::query()->where('slug', $slugProduct)->first();

        $member = Member::query()->where('id', auth(RolePermission::GUARD_NAME_WEB)->id())->first();

        $this->qty = 1;


        if (empty($product)) {
            return redirect(base_url('404.html'));
        }

        Product::query()->increment('views');

        $items = Product::query()->where(['category_id' => $product->category_id])->orderByDesc('id')->paginate($this->page_number);
        $productCategory = ProductCategory::query()->where('slug', $slugCategory)->first();

        $data = [
            'title' => $product->title,
            'product' => $product,
            'productCategory' => $productCategory,
            'items' => $items,
            'quantity' => $product->quantity,
            'member' => $member,
        ];

        return view($this->layout.'product.view', $this->render($data));
    }
    public function increseQty()
    {
        $this->qty++;
    }
    public function decreseQty()
    {
        if($this->qty > 1){
            $this->qty--;
        }
    }

    
}
