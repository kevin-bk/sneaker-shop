<?php

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * php artisan db:seed
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class, RoleTableSeeder::class, ConfigTableSeeder::class]);

        Post::query()->truncate();
        PostCategory::query()->truncate();
        ProductCategory::query()->truncate();
        Product::query()->truncate();

        $user = User::query()->first();

        // create category
        PostCategory::query()->updateOrCreate(
            ['id' => PostCategory::CATEGORY_NHA_DEP],
            [
                'title' => 'Nhà đẹp',
                'slug' => 'nha-dep'
            ]
        );

        PostCategory::query()->updateOrCreate(
            ['id' => PostCategory::CATEGORY_ANH_BAN_GIAO],
            [
                'title' => 'Ảnh bàn giao',
                'slug' => 'anh-ban-giao'
            ]
        );

        PostCategory::query()->updateOrCreate(
            ['id' => PostCategory::CATEGORY_Y_KIEN_KHACH_HANG],
            [
                'title' => 'Ý kiến khách hàng',
                'slug' => 'y-kien-khach-hang'
            ]
        );

        PostCategory::query()->updateOrCreate(
            ['id' => PostCategory::CATEGORY_KHUYEN_MAI],
            [
                'title' => 'Khuyến mãi',
                'slug' => 'khuyen-mai'
            ]
        );

        // create post category
        $postCategory = factory(PostCategory::class)->create(
            [
                'image_url' => '/layout/ant_furniture/img/2002441-l.jpg',
                'creator_id' => $user->id,
            ]
        );

        // create post
        factory(Post::class, 5)->create(
            [
                'category_id' => $postCategory->id,
                'creator_id' => $user->id,
                'image_url' => '/layout/ant_furniture/img/nha-vuon-mexico-1.jpg'
            ]
        );

        // create post category
        $postCategory1 = factory(PostCategory::class)->create(
            [
                'image_url' => '/layout/ant_furniture/img/2002441-l.jpg',
                'creator_id' => $user->id,
            ]
        );

        // create post
        factory(Post::class, 5)->create(
            [
                'category_id' => $postCategory1->id,
                'creator_id' => $user->id,
                'image_url' => '/layout/ant_furniture/img/nha-vuon-mexico-1.jpg'
            ]
        );

        // create category product
        $productCategory = factory(ProductCategory::class)->create(
            [
                'title' => 'Phòng khách',
                'image_url' => '/layout/ant_furniture/img/2002441-l.jpg',
                'creator_id' => $user->id,
            ]
        );

        // create product
        factory(Product::class, 10)->create(
            [
                'title' => 'Combo phòng khách '.rand(1, 10),
                'category_id' => $productCategory->id,
                'creator_id' => $user->id,
                'image_url' => '/layout/ant_furniture/img/1890255-l.png'
            ]
        );

        // create category product
        $productCategory1 = factory(ProductCategory::class)->create(
            [
                'title' => 'Phòng ngủ',
                'image_url' => '/layout/ant_furniture/img/2002441-l.jpg',
                'creator_id' => $user->id,
            ]
        );

        // create product
        factory(Product::class, 10)->create(
            [
                'title' => 'Combo phòng ngủ '.rand(1, 10),
                'category_id' => $productCategory1->id,
                'creator_id' => $user->id,
                'image_url' => '/layout/ant_furniture/img/1890255-l.png'
            ]
        );

        // create category product
        $productCategory2 = factory(ProductCategory::class)->create(
            [
                'title' => 'Nhà bếp',
                'image_url' => '/layout/ant_furniture/img/2002441-l.jpg',
                'creator_id' => $user->id,
            ]
        );

        // create product
        factory(Product::class, 10)->create(
            [
                'title' => 'Combo nhà bếp '.rand(1, 10),
                'category_id' => $productCategory2->id,
                'creator_id' => $user->id,
                'image_url' => '/layout/ant_furniture/img/1890255-l.png'
            ]
        );
    }
}
