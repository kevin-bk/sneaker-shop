@extends('layout.ant_furniture.layouts.app')
@section('content')
<section class="bread-crumb margin-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <li class="home" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="./index" title="Trang chủ">
                            <span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1">
                        </a>
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
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
            <h1 class="title-head margin-top-0">Tất cả sản phẩm</h1>

            <div class="category-gallery margin-bottom-15">
                <div class="image pd-bt30">
                <div class="home-slider owl-carousel not-dqowl owl-loaded owl-drag">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($banner as $key => $item)
                <li data-target="#carousel-id" data-slide-to="{{ $key }}" class=" @if($key == 0) active @endif"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach($banner as $key => $item)
                <div class="item @if($key == 0) active @endif">
                    <img src="{{$item->full_image_url}}" alt="{{$item->title}}">
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
                </div>
            </div>


            <div class="category-products products category-products-grids">

                <div class="sort-cate clearfix margin-top-10 margin-bottom-10">
                    <div class="product_list">
                        <h3>Tìm Kiếm</h3>
                        <p>Tìm thấy <span style="color:red;">{{count($itemProducts)}}</span> sản phẩm</p>
                    </div>
                </div>

                <section class="products-view products-view-grid">
                    <div class="row">

                        @foreach($itemProducts as $itempd)
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                            <div class="ant-product-item">
                                <div class="image-container">


                                    <a href="{{ $itempd->link }}" class="product-item-photo">
                                        <img class="product-image-photo img-responsive center-block"
                                            src="{{$itempd -> full_image_url}}" alt="Kệ trang trí Modulo home">
                                    </a>
                                </div>
                                <div class="box-info">
                                    <h2 class="product-item-name">
                                        <a title="{{$itempd->title}}" href="{{$itempd->link}}" class="product-item-link">
                                            {{$itempd->title}}
                                        </a>
                                    </h2>
                                    <div class="item-price">
                                        <div class="price-box price-final_price">


                                            <span class="special-price">
                                                <span class="price-container">
                                                    <span class="price-wrapper">
                                                        <span class="price">{{number_format($itempd->price)}}</span>
                                                    </span>
                                                </span>
                                            </span>


                                        </div>
                                    </div>
                                    <div class="box-hover hidden-sm hidden-xs hidden-md">
                                        <div class="add-to-links">
                                            <div class="actions-primary">
                                                <form action="/cart/add" method="post"
                                                    class="variants form-nut-grid has-validation-callback"
                                                    data-id="product-actions-12681121" enctype="multipart/form-data">


                                                    <input class="hidden" type="hidden" name="variantId"
                                                        value="20633434">
                                                    <button class="tt-btn-addtocart btn-cart btn btn-gray left-to"
                                                        title="Chọn sản phẩm" type="button"
                                                        onclick="window.location.href='#'">
                                                        <i class="fa fa-link"></i>
                                                    </button>


                                                </form>
                                            </div>

                                            <a href="{{ $itempd->link }}"
                                                class="quick-view" title="Xem nhanh">
                                                <i class="fa fa-search"></i>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </section>


            </div>
        </section>

        @include('layout.ant_furniture.product.sidebar_left')


    </div>
</div>
@endsection