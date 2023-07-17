@extends('layout.ant_furniture.layouts.app')
@section('content')
    <section class="bread-crumb margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a itemprop="item" href="./index" title="Trang chủ">
                                <span itemprop="name">Trang chủ</span>
                                <meta itemprop="position" content="1">
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li itemprop="itemListElement">
                            <strong itemprop="name">Tất cả sản phẩm</strong>
                            <meta itemprop="position" content="2">
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>



    <div class="container">
        <div class="row">
            <section class="main_container collection col-md-9 col-md-push-3">
                <h1 class="title-head margin-top-0">Danh mục: {{$productCategory->title}}</h1>

{{--                <div class="category-gallery margin-bottom-15">--}}
{{--                    <div class="image pd-bt30">--}}
{{--                        <img src="{{asset('layout/ant_furniture/img/cat-banner-1.jpg')}}" alt="Tất cả sản phẩm"--}}
{{--                             class="img-responsive center-block">--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="category-products products category-products-grids">

                    <div class="sort-cate clearfix margin-top-10 margin-bottom-10">
                        <div class="sort-cate-left hidden-xs">
                            <h3>Ưu tiên theo:</h3>
                            <ul>
                                <li class="btn-quick-sort alpha-asc">
                                    <a href="javascript:;" onclick="sortby('alpha-asc')"><i></i>Tên A-Z</a>
                                </li>
                                <li class="btn-quick-sort alpha-desc">
                                    <a href="javascript:;" onclick="sortby('alpha-desc')"><i></i>Tên Z-A</a>
                                </li>
                                <li class="btn-quick-sort position-desc">
                                    <a href="javascript:;" onclick="sortby('created-desc')"><i></i>Hàng mới</a>
                                </li>
                                <li class="btn-quick-sort price-asc">
                                    <a href="javascript:;" onclick="sortby('price-asc')"><i></i>Giá thấp đến cao</a>
                                </li>
                                <li class="btn-quick-sort price-desc">
                                    <a href="javascript:;" onclick="sortby('price-desc')"><i></i>Giá cao xuống thấp</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sort-cate-right-mobile hidden-lg hidden-md hidden-sm">
                            <div id="sort-by">
                                <label class="left">Ưu tiên theo: </label>
                                <ul>
                                    <li><span>Thứ tự</span>
                                        <ul>
                                            <li>
                                                <a href="javascript:;" onclick="sortby('alpha-asc')"><i></i>Tên A-Z</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" onclick="sortby('alpha-desc')"><i></i>Tên Z-A</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" onclick="sortby('created-desc')">Hàng mới</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <section class="products-view products-view-grid">
                        <div class="row">
                            @include('layout.ant_furniture.product.item')
                        </div>
                        <div class="text-xs-right">
                            <nav class="text-center">
                                {{--phân trang--}}
                                {{ !empty($items) ? $items->links() : '' }}
                            </nav>
                        </div>
                    </section>
                </div>
            </section>
            @include('layout.ant_furniture.product.sidebar_left')
        </div>
    </div>
@endsection