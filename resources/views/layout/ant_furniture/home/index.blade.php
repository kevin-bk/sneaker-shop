@extends('layout.ant_furniture.layouts.app')
@section('content')
    @include('layout.ant_furniture.home.element.banner')
    @include('layout.ant_furniture.home.element.banner_bottom')
    <section class="awe-section-3">
        <div class="section_product container">
            <div class="row">
                @include('layout.ant_furniture.home.element.main_menu')
                @include('layout.ant_furniture.home.divide_items.product_hot')
            </div>
        </div>
    </section>

    @foreach($productCategories as $productCategory)
        @include('layout.ant_furniture.home.divide_items.productCategory', ['category' => $productCategory])
    @endforeach

    <section class="awe-section-9">
        <div class="section_customer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="customer_reviews">
                            <div class="heading">
                                <span class="group-icon"><i class="fa fa-dashcube" aria-hidden="true"></i></span>
                                <h2 class="title-head">
                                    <span>{{ $categoryYKienKhachHang->title ?? '' }}</span>
                                </h2>
                            </div>
                            @if($itemYKienKhachHang)
                                <div class="wrap_views">
                                    <div class="content_views owl-carousel not-dqowl">
                                        <div class="item">
                                            <div class="image_reviews">
                                                <img src="{{ $itemYKienKhachHang->full_image_url }} "
                                                     alt="{{ $itemYKienKhachHang->title }}"/>
                                                <p class="description_review">
                                                    {{ $itemYKienKhachHang->summary }}
                                                </p>
                                                <div class="info_reviews">
                                                    {{ $itemYKienKhachHang->title }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>

{{--                    <div class="col-md-6">--}}
{{--                        <div class="project_reviews">--}}
{{--                            <div class="heading">--}}
{{--                                <span class="group-icon"><i class="fa fa-dashcube" aria-hidden="true"></i></span>--}}
{{--                                <h2 class="title-head">--}}
{{--                                    <span>{{ $categoryAnhBanGiao->title ?? '' }}</span>--}}
{{--                                </h2>--}}
{{--                            </div>--}}
{{--                            <div class="ant-image-handover">--}}
{{--                                @if(!empty($itemAnhBanGiao))--}}
{{--                                    <div class="content_views owl-carousel not-dqowl">--}}
{{--                                        <div class="item-inner clearfix">--}}
{{--                                            <div class="blog-image">--}}
{{--                                                <a href="{{ $itemAnhBanGiao->link }}">--}}
{{--                                                    <img src="{{ asset('layout/ant_furniture/img/untitled-2.jpg') }} "--}}
{{--                                                         alt="{{ $itemAnhBanGiao->title }}"--}}
{{--                                                         class="img-responsive center-block"/>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="blog-content">--}}
{{--                                                <div class="blog-content-inner">--}}
{{--                                                    <h3 class="blog-title">--}}
{{--                                                        <a href="{{ $itemAnhBanGiao->link }}"--}}
{{--                                                           title="{{ $itemAnhBanGiao->title }}">{{ $itemAnhBanGiao->title }}</a>--}}
{{--                                                    </h3>--}}
{{--                                                    <p class="short-des">--}}
{{--                                                        {{ $itemAnhBanGiao->summary }}--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="clearfix"></div>--}}
{{--                                    <div class="amorre">--}}
{{--                                        <a href="{{ $itemAnhBanGiao->link }}" title="Xem thêm">Xem thêm</a>--}}
{{--                                    </div>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
{{--    @include('layout.ant_furniture.home.divide_items.nicehouse')--}}
@endsection
