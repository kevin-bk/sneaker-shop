@extends('layout.ant_furniture.layouts.app')
@section('content')

<section class="bread-crumb margin-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope="">
                    <li class="home" itemprop="itemListElement" itemscope="">
                        <a itemprop="item" href="/" title="Trang chủ">
                            <span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1">
                        </a>
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>

                    <li itemprop="itemListElement" itemscope="">
                        <a itemprop="item" href="{{$product->link}}" title="{{$product->title}}">
                            <span itemprop="name">{{$productCategory->title}}</span>
                            <meta itemprop="position" content="2">
                        </a>
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>

                    <li itemprop="itemListElement" itemscope="">
                        <span itemprop="name">{{$product->title}}</span>
                        <meta itemprop="position" content="3">
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<section class="product">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 details-product">
                <div class="row product-bottom">
                    <div class="clearfix padding-bottom-10">

                        <div class="col-xs-12 col-sm-6 col-lg-5 col-md-4">
                            <div class="relative product-image-block ">
                                <div class="large-image">
                                    <a data-rel="prettyPhoto[product-gallery]" class="large_image_url">
                                        <div style="height:468px;width:468px;" class="zoomWrapper">
                                            <p>
                                                <img id="myImg" src="{{$product->full_image_url}}"
                                                    alt="{{$product->title}}" class="img-responsive center-block"
                                                    style="position: absolute;">
                                            <div id="myModal" class="modal">
                                                <img class="modal-content" id="img01">
                                                <div id="caption"></div>
                                            </div>
                                            </p>
                                        </div>
                                    </a>

                                </div>

                                <div id="gallery_01"
                                    class="owl-carousel owl-theme thumbnail-product margin-top-15 owl-loaded owl-drag"
                                    data-md-items="4" data-sm-items="4" data-xs-items="4" data-xss-items="3"
                                    data-margin="10" data-nav="true">



                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 359px;">
                                            <div class="owl-item active" style="width: 109.5px; margin-right: 10px;">
                                                <div class="item">
                                                    <a class="thumb-link" href="javascript:void(0);">
                                                        <img src="{{$product->full_image_url}}"
                                                            alt="{{$product->title}}" data-image="">

                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <script>
                                    // Get the modal
                                    var modal = document.getElementById('myModal');

                                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                                    var img = document.getElementById('myImg');
                                    var modalImg = document.getElementById("img01");
                                    var captionText = document.getElementById("caption");
                                    img.onclick = function() {
                                        modal.style.display = "block";
                                        modalImg.src = this.src;
                                        modalImg.alt = this.alt;
                                        captionText.innerHTML = this.alt;
                                    }


                                    // When the user clicks on <span> (x), close the modal
                                    modal.onclick = function() {
                                        img01.className += " out";
                                        setTimeout(function() {
                                            modal.style.display = "none";
                                            img01.className = "modal-content";
                                        }, 400);

                                    }
                                    </script>
                                    <div class="owl-nav disabled">
                                        <div class="owl-prev disabled"><i class="fa fa-angle-left"
                                                aria-hidden="true"></i></div>
                                        <div class="owl-next disabled"><i class="fa fa-angle-right"
                                                aria-hidden="true"></i></div>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>

                            </div>

{{--                            <div class="social-sharing margin-top-20">--}}
{{--                                <!-- Go to www.addthis.com/dashboard to customize your tools -->--}}
{{--                                <script type="text/javascript"--}}
{{--                                    src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a099baca270babc"></script>--}}
{{--                                <!-- Go to www.addthis.com/dashboard to customize your tools -->--}}
{{--                                <div class="addthis_inline_share_toolbox_jje8" data-url=""--}}
{{--                                    data-title="Thảm trải sàn mùa hè SSJG Angelina"--}}
{{--                                    data-description="Thảm trải sàn mùa hè SSJG Angelina 150x200cm là sản phẩm đến từ thương hiệu SSJG nổi tiếng của Hàn Quốc. Được thiết kế đơn giản in đường may kẻ ô vuông mang phong cách tinh tế, hợp thời trang, phù hợp với nhiều phong cách trang trí phòng khác nhau tạo nên không gian thoải mái dễ chịu. Thảm trải sàn sử dụng ch">--}}
{{--                                    <div id="atstbx2"--}}
{{--                                        class="at-share-tbx-element at-share-tbx-native addthis_default_style addthis_20x20_style addthis-smartlayers addthis-animated at4-show">--}}
{{--                                        <a class="addthis_button_facebook_like at_native_button at300b"--}}
{{--                                            fb:like:layout="button_count">--}}
{{--                                            <div class="fb-like fb_iframe_widget" data-layout="button_count"--}}
{{--                                                data-show_faces="false" data-share="false" data-action="like"--}}
{{--                                                data-width="90" data-height="25" data-font="arial"--}}
{{--                                                data-href="https://ant-furniture.mysapo.net/tha-m-tra-i-sa-n-mu-a-he-ssjg-angelina"--}}
{{--                                                data-send="false" style="height: 25px;" fb-xfbml-state="rendered"--}}
{{--                                                fb-iframe-plugin-query="action=like&amp;app_id=172525162793917&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=https%3A%2F%2Fant-furniture.mysapo.net%2Ftha-m-tra-i-sa-n-mu-a-he-ssjg-angelina&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90">--}}
{{--                                                <span style="vertical-align: bottom; width: 90px; height: 28px;"><iframe--}}
{{--                                                        name="f2f983221bacf84" width="90px" height="25px"--}}
{{--                                                        data-testid="fb:like Facebook Social Plugin"--}}
{{--                                                        title="fb:like Facebook Social Plugin" frameborder="0"--}}
{{--                                                        allowtransparency="true" allowfullscreen="true" scrolling="no"--}}
{{--                                                        allow="encrypted-media"--}}
{{--                                                        src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=172525162793917&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df182a0079507a84%26domain%3Dant-furniture.mysapo.net%26origin%3Dhttps%253A%252F%252Fant-furniture.mysapo.net%252Ff332c554ff4a62c%26relation%3Dparent.parent&amp;container_width=0&amp;font=arial&amp;height=25&amp;href=https%3A%2F%2Fant-furniture.mysapo.net%2Ftha-m-tra-i-sa-n-mu-a-he-ssjg-angelina&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;send=false&amp;share=false&amp;show_faces=false&amp;width=90"--}}
{{--                                                        style="border: none; visibility: visible; width: 90px; height: 28px;"--}}
{{--                                                        class=""></iframe></span>--}}
{{--                                            </div>--}}
{{--                                        </a><a class="addthis_button_facebook_share at_native_button at300b"--}}
{{--                                            fb:share:layout="button_count">--}}
{{--                                            <div class="fb-share-button fb_iframe_widget" data-layout="button_count"--}}
{{--                                                data-href="https://ant-furniture.mysapo.net/tha-m-tra-i-sa-n-mu-a-he-ssjg-angelina"--}}
{{--                                                style="height: 25px;" fb-xfbml-state="rendered"--}}
{{--                                                fb-iframe-plugin-query="app_id=172525162793917&amp;container_width=0&amp;href=https%3A%2F%2Fant-furniture.mysapo.net%2Ftha-m-tra-i-sa-n-mu-a-he-ssjg-angelina&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey">--}}
{{--                                                <span style="vertical-align: bottom; width: 86px; height: 20px;"><iframe--}}
{{--                                                        name="fae2906d9eb72c" width="1000px" height="1000px"--}}
{{--                                                        data-testid="fb:share_button Facebook Social Plugin"--}}
{{--                                                        title="fb:share_button Facebook Social Plugin" frameborder="0"--}}
{{--                                                        allowtransparency="true" allowfullscreen="true" scrolling="no"--}}
{{--                                                        allow="encrypted-media"--}}
{{--                                                        src="https://www.facebook.com/v2.6/plugins/share_button.php?app_id=172525162793917&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df13b5e7c80f9c84%26domain%3Dant-furniture.mysapo.net%26origin%3Dhttps%253A%252F%252Fant-furniture.mysapo.net%252Ff332c554ff4a62c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fant-furniture.mysapo.net%2Ftha-m-tra-i-sa-n-mu-a-he-ssjg-angelina&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey"--}}
{{--                                                        style="border: none; visibility: visible; width: 86px; height: 20px;"--}}
{{--                                                        class=""></iframe></span>--}}
{{--                                            </div>--}}
{{--                                        </a><a class="addthis_counter addthis_pill_style at_native_button" href="#"--}}
{{--                                            style="display: inline-block;"><a class="atc_s addthis_button_compact">Chia--}}
{{--                                                sẻ<span></span></a><a class="addthis_button_expanded" target="_blank"--}}
{{--                                                title="Thêm..." href="#"></a></a>--}}
{{--                                        <div class="atclear"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>

                        <div class="col-xs-12 col-sm-6 col-lg-4 col-md-5 details-pro">
                            <div class="product-top clearfix">
                                <h1 class="title-head">{{$product ->title}}</h1>

                                <div class="panel-product-line panel-product-rating clearfix">
                                    <div class="sapo-product-reviews-badge sapo-product-reviews-badge-detail"
                                        onclick="scrollToxx();" data-id="12681108"></div>
                                </div>

                            </div>
                            <div itemprop="offers">
                                <link itemprop="url" href="#">
                                <meta itemprop="priceValidUntil" content="2030-11-05">
                                <div class="inve_brand">

                                    <span class="stock-brand-title"><strong><i class="fa fa-check-circle"></i> Thương
                                            hiệu:</strong></span>
                                    <span class="a-brand">test</span>

                                </div>

                                <div class="inventory_quantity bizweb deny 0">
                                    <span class="stock-brand-title"><strong><i class="fa fa-check-circle"></i> Tình
                                            trạng:</strong></span>

                                    @if($product->quantity > 0)
                                    <span class="a-stock a2">
                                        <link itemprop="availability" href="#">Còn hàng
                                    </span>
                                    @else
                                    <span class="a-stock a2">
                                        <link itemprop="availability" href="#">Hết hàng
                                    </span>
                                    @endif

                                </div>
                                @if($product->price_promotion == 0)
                                <div class="price-box clearfix">

                                    <div class="special-price">
                                        <span class="price product-price">
                                            {{number_format($product->price)}}
                                        </span>

                                    </div>

                                </div>
                                @else
                                <div class="price-box clearfix">
                                    <div class="special-price">
                                        <span
                                            class="price product-price">{{number_format($product->price_promotion)}}</span>

                                    </div>

                                    <div class="special-price">
                                        <span class="price product-price"
                                            style="color:gray; text-decoration: line-through;">
                                            {{number_format($product->price)}}
                                        </span>

                                    </div>

                                </div>
                                @endif
                            </div>


                            <div class="product-summary product_description margin-bottom-15 margin-top-15">
                                <div class="rte description">
                                    <p>{{$product->summary}}</p>
                                </div>
                            </div>

                            <div class="choosesize">
                                <p>Chọn size:</p>
                                <ul class="ulsize">
                                    <li class="size-btn" onclick="changeSize(this, 36)">36</li>
                                    <li class="size-btn" onclick="changeSize(this, 37)">37</li>
                                    <li class="size-btn" onclick="changeSize(this, 38)">38</li>
                                    <li class="size-btn" onclick="changeSize(this, 39)">39</li>
                                    <li class="size-btn" onclick="changeSize(this, 40)">40</li>
                                    <li class="size-btn" onclick="changeSize(this, 41)">41</li>
                                    <li class="size-btn" onclick="changeSize(this, 42)">42</li>
                                    <li class="size-btn" onclick="changeSize(this, 43)">43</li>
                                    <li class="size-btn" onclick="changeSize(this, 44)">44</li>
                                    <li class="size-btn" onclick="changeSize(this, 45)">45</li>
                                    <li class="size-btn" onclick="changeSize(this, 46)">46</li>
                                </ul>
                            </div>

                            <script>
                                function changeSize(element, size) {
                                    sizes = document.querySelectorAll('.size-btn')
                                    for (var i = 0; i < sizes.length; i++) {
                                        sizes[i].classList.remove('tick');
                                    }
                                    element.classList.add('tick');

                                    document.getElementById('product_size').value = size;
                                    document.getElementById('btn-buy').disabled = false;
                                }
                            </script>

                            <style>
                                .choosesize {
                                    background: #f4f4f4;
                                    padding: 10px;
                                    overflow: hidden;
                                    margin-bottom: 10px;
                                }

                                .choosesize, ul.ulsize li {
                                    border: 1px solid #dadada;
                                    margin-bottom: 10px;
                                }

                                .choosesize p {
                                    font-weight: 400;
                                    text-transform: uppercase;
                                    margin: 0;
                                    margin-bottom: 10px;
                                }

                                ul.ulsize li.tick {
                                    background: url({{asset('layout/ant_furniture/img/sticked.png')}}) right bottom no-repeat #fff;
                                    border-color: red;
                                }

                                ul.ulsize li {
                                    float: left;
                                    margin-right: 5px;
                                    text-align: center;
                                    width: 40px;
                                    height: 40px;
                                    cursor: pointer;
                                    background: #fff;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                }

                            </style>

                            <div class="form-product">
                                <form id="add-to-cart-form" action="{{ base_url('cart/add') }}" method="POST"
                                    class="form-inline has-validation-callback">
                                    @csrf

                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" id="product_size" name="size">

                                    <div class="form-group ">
                                        <div class="clearfix">
                                            <div class="custom custom-btn-number form-control">
                                                <div class="group-label">
                                                    Số lượng
                                                </div>

                                                <button
                                                    onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value--;return false;"
                                                    class="btn-minus btn-cts" type="button"
                                                    wire:click.prevent="decreseQty">–</button>
                                                <input type="text" class="qty input-text" id="qty" name="quantity"
                                                    size="4" value="1" wire:model="qty">
                                                <button
                                                    onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;"
                                                    class="btn-plus btn-cts" type="button"
                                                    wire:click.prevent="increseQty">+</button>

                                            </div>
                                        </div>
                                        <div class="btn-mua">

                                            @if($product->quantity > 0)

                                            <button class="btn btn-lg btn-style btn-style-active btn-cart btn-soldout" id="btn-buy" disabled>
                                                <span class="txt-main">Mua hàng</span>
                                            </button>

                                            @else
                                            <button class="btn btn-lg btn-style btn-style-active btn-cart btn-soldout"
                                                disabled="disabled">
                                                <span class="txt-main">Hết hàng</span>
                                            </button>
                                            @endif
                                        </div>
                                    </div>
                                    <button class="btn-callmeback" type="button" data-toggle="modal"
                                        data-target="#myModalCall">
                                        <i class="fa fa-calendar-check-o"></i> Hẹn lịch
                                    </button>

                                    <button class="btn-callmeback">
                                        <a href="tel:{{ $config["company_phone"] ?? '' }}" style="color:#fff;">
                                            <i class="fa fa-phone"></i>{{ $config["company_phone"] ?? '' }}
                                        </a>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-lg-3 col-md-3 hidden-sm hidden-xs">
                            <div class="sidebar-block service-block">
                                <div class="sidebar-content">




                                    <div class="service-item service-item-two">
                                        <div class="item-top">
                                            <span class="img">
                                                <img src="{{asset('layout/ant_furniture/img/policy_image_1.png')}}"
                                                    alt="Giao hàng trong 24h">
                                            </span>
                                            <span class="title">
                                                Giao hàng trong 24h
                                            </span>
                                        </div>
                                        <p class="caption">
                                            Áp dụng với đơn hàng trên 500.000 đ ở Hà Nội.
                                        </p>
                                    </div>




                                    <div class="service-item service-item-two">
                                        <div class="item-top">
                                            <span class="img">
                                                <img src="{{asset('layout/ant_furniture/img/policy_image_2.png')}}"
                                                    alt="Giao hàng trong 24h">
                                            </span>
                                            <span class="title">
                                                Bảo đảm chất lượng
                                            </span>
                                        </div>
                                        <p class="caption">
                                            Tất cả các sản phẩm đều đảm bảo chất lượng.
                                        </p>
                                    </div>




                                    <div class="service-item service-item-two">
                                        <div class="item-top">
                                            <span class="img">
                                                <img src="{{asset('layout/ant_furniture/img/policy_image_3.png')}}"
                                                    alt="Giao hàng trong 24h">
                                            </span>
                                            <span class="title">
                                                Sản phẩm chính hãng
                                            </span>
                                        </div>
                                        <p class="caption">
                                            Chúng tôi cung cấp các sản phẩm nhập khẩu chính hãng.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row margin-top-10">
                    <div class="col-md-9">
                        <div class="product-tab e-tabs padding-bottom-10">
                            <div class="border-ghghg margin-bottom-20">
                                <ul class="tabs tabs-title clearfix">

                                    <li class="tab-link current" data-tab="tab-1">
                                        <h3><span>Mô tả</span></h3>
                                    </li>


{{--                                    <li class="tab-link" data-tab="tab-2">--}}
{{--                                        <h3><span>Tại sao chọn Ant Furni?</span></h3>--}}
{{--                                    </li>--}}


                                    <li class="tab-link" data-tab="tab-3">
                                        <h3><span>Đánh giá</span></h3>
                                    </li>

                                </ul>
                            </div>

                            <div id="tab-1" class="tab-content current">
                                <div class="rte">


                                    <p>{!! $product->detail !!}</p>

                                </div>
                            </div>


                            <div id="tab-2" class="tab-content">
                                Nội dung tùy chỉnh viết ở đây
                            </div>


                            <div id="tab-3" class="tab-content">
                                <div id="sapo-product-reviews" class="sapo-product-reviews" data-id="12681108">
                                    <div id="sapo-product-reviews-noitem" style="display: none;">
                                        <div class="content">
                                            <p data-content-text="language.suggest_noitem"></p>
                                            <div class="product-reviews-summary-actions">
                                                <button type="button" class="btn-new-review"
                                                    onclick="BPR.newReview(this); return false;"
                                                    data-content-str="language.newreview"></button>
                                            </div>
                                            <div id="noitem-bpr-form_" data-id="formId" class="noitem-bpr-form"
                                                style="display:none;">
                                                <div class="sapo-product-reviews-form"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="sapo-product-reviews-sub" style="display: none;">
                                        <div class="sapo-product-reviews-summary" style="display: none;">
                                            <div class="sapo-product-reviews-action">
                                                <meta itemprop="name" content="Thảm trải sàn mùa hè SSJG Angelina">
                                                <div itemprop="aggregateRating" itemscope=""
                                                    itemtype="http://schema.org/AggregateRating" class="bpr-summary">
                                                    <meta content="5" itemprop="bestRating">
                                                    <meta content="1" itemprop="worstRating">
                                                    <div class="bpr-summary-average">
                                                        <span itemprop="ratingValue">5</span>
                                                        <span class="max-score">/5</span>
                                                    </div>
                                                    <div data-number="5" class="sapo-product-reviews-star"
                                                        data-score="5"></div>
                                                    <p>(<span itemprop="ratingCount">1</span> <span>đánh giá</span>)</p>
                                                </div>
                                                <button type="button" class="btn-new-review"
                                                    onclick="BPR.newReview(this); return false;"
                                                    data-content-str="language.newreview"></button>
                                            </div>
                                        </div>
                                        <span class="product-reviews-summary-actions">
                                        </span>
                                        <div class="sapo-product-reviews-form" id="bpr-form_12681108"
                                            style="display:none;">
                                        </div>
                                        <div id="bpr-list" class="sapo-product-reviews-list">
                                        </div>
                                        <div id="bpr-more-reviews">
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>


{{--                    <div class="col-md-3">--}}
{{--                        <div class="right_module">--}}
{{--                            <div id="top-tabs-info" class=" hidden-sm hidden-xs">--}}
{{--                                <div class="productAnchor_horizonalNavs">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="productAnchor_horizonalNav">--}}
{{--                                                <div class="product_info_image hidden-xs">--}}
{{--                                                    <img class="pict imagelazyload img-responsive center-block"--}}
{{--                                                        src="{{asset('layout/ant_furniture/img/termitary-house-4-1430479593.jpg')}}"--}}
{{--                                                        alt="Thảm trải sàn mùa hè SSJG Angelina">--}}
{{--                                                </div>--}}
{{--                                                <div class="product_info_content hidden-xs">--}}
{{--                                                    <h2 class="product_info_name"--}}
{{--                                                        title="Thảm trải sàn mùa hè SSJG Angelina">Thảm trải sàn--}}
{{--                                                        mùa hè SSJG Angelina</h2>--}}
{{--                                                    <div class="product_info_price">--}}
{{--                                                        <div class="product_info_price_title">--}}
{{--                                                            Giá bán:--}}
{{--                                                        </div>--}}

{{--                                                        <div class="product_info_price_value">--}}
{{--                                                            <div class="product_info_price_value-final">1.900.000₫</div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="product_info_buttons">--}}

{{--                                                    <button class="btn btn_buyNow btn-buy-now-click s-flag"--}}
{{--                                                        disabled="disabled">--}}
{{--                                                        <span class="txt-main">HẾT HÀNG</span>--}}
{{--                                                    </button>--}}

{{--                                                    <a class="btn btn_traGop btn-tra-gop-click s-flag"--}}
{{--                                                        href="tel:{{ $config["company_phone"] ?? '' }}">--}}

{{--                                                        Liên hệ <span--}}
{{--                                                            class="txt-sub hidden-xs">{{ $config["company_phone"] ?? '' }}</span>--}}

{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <script>--}}
{{--                            $(document).ready(function($) {--}}
{{--                                jQuery(document).ready(function(e) {--}}
{{--                                    var WindowHeight = jQuery(window).height();--}}
{{--                                    var load_element = 0;--}}
{{--                                    //position of element--}}
{{--                                    var scroll_position = jQuery('.product-bottom').offset().top +--}}
{{--                                        jQuery('.product-bottom').outerHeight(true);;--}}
{{--                                    var screen_height = jQuery(window).height();--}}
{{--                                    var activation_offset = 0;--}}
{{--                                    var max_scroll_height = jQuery('body').height() + screen_height;--}}
{{--                                    var scroll_activation_point = scroll_position - (screen_height *--}}
{{--                                        activation_offset);--}}
{{--                                    jQuery(window).on('scroll', function(e) {--}}
{{--                                        var y_scroll_pos = window.pageYOffset;--}}
{{--                                        var element_in_view = y_scroll_pos >--}}
{{--                                            scroll_activation_point;--}}
{{--                                        var has_reached_bottom_of_page = max_scroll_height <=--}}
{{--                                            y_scroll_pos && !element_in_view;--}}
{{--                                        if (element_in_view || has_reached_bottom_of_page) {--}}
{{--                                            jQuery('.productAnchor_horizonalNavs').addClass(--}}
{{--                                                "ins-Drop");--}}
{{--                                        } else {--}}
{{--                                            jQuery('.productAnchor_horizonalNavs').removeClass(--}}
{{--                                                "ins-Drop");--}}
{{--                                        }--}}
{{--                                    });--}}
{{--                                });--}}
{{--                            });--}}
{{--                            </script>--}}





{{--                            <div class="similar-product">--}}
{{--                                <div class="right-bestsell">--}}
{{--                                    <h2><a href="{{route('product')}}" title="Sản phẩm mới ra mắt">Sản phẩm mới ra--}}
{{--                                            mắt</a>--}}
{{--                                    </h2>--}}
{{--                                    <div class="list-bestsell">--}}
{{--                                        @foreach($items as $item)--}}

{{--                                        <div class="list-bestsell-item">--}}
{{--                                            <div class="thumbnail-container clearfix">--}}
{{--                                                <div class="product-image">--}}
{{--                                                    <a href="{{$item -> link}}">--}}
{{--                                                        <img class="img-responsive" src="{{$item -> full_image_url}}"--}}
{{--                                                            alt="{{$item -> title}}">--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                                <div class="product-meta">--}}
{{--                                                    <h3><a href="{{$item -> link}}" title="{{$item -> title}}">--}}
{{--                                                            {{$item -> title}}</a></h3>--}}
{{--                                                    <div class="bizweb-product-reviews-badge" data-id="12681121"></div>--}}
{{--                                                    <div class="product-price-and-shipping">--}}
{{--                                                        @if($item->price_promotion == 0)--}}
{{--                                                        <div class="item-price">--}}
{{--                                                            <div class="price-box price-final_price">--}}
{{--                                                                <span class="special-pric"--}}
{{--                                                                    style="font-size: 14px;color: #ed1b24;font-weight: bold;">--}}
{{--                                                                    <span class="price-container">--}}
{{--                                                                        <span class="price-wrapper">--}}
{{--                                                                            <span--}}
{{--                                                                                class="price">{{number_format($item->price)}}</span>--}}
{{--                                                                        </span>--}}
{{--                                                                    </span>--}}
{{--                                                                </span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        @else--}}
{{--                                                        <div class="item-price">--}}
{{--                                                            <div class="price-box price-final_price">--}}
{{--                                                                <span class="special-price">--}}
{{--                                                                    <span class="price-container">--}}
{{--                                                                        <span class="price-wrapper">--}}
{{--                                                                            <span--}}
{{--                                                                                class="price">{{number_format($item->price_promotion)}}</span>--}}
{{--                                                                        </span>--}}
{{--                                                                    </span>--}}
{{--                                                                </span>--}}
{{--                                                                <span class="old-price">--}}
{{--                                                                    <span class="price-container">--}}
{{--                                                                        <span class="price-wrapper">--}}
{{--                                                                            <span class="price" style="font-size: 0.875em;--}}
{{--                                                                                        color: #a4a4a4;--}}
{{--                                                                                        text-decoration: line-through;--}}
{{--                                                                                        font-weight: bold;">--}}
{{--                                                                                {{number_format($item->price)}}--}}
{{--                                                                            </span>--}}
{{--                                                                        </span>--}}
{{--                                                                    </span>--}}
{{--                                                                </span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        @endif--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        @endforeach--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>

        <div class="row margin-top-20 margin-bottom-10">
            <div class="col-lg-12">
                <div class="related-product">
                    <div class="home-title">
                        <h2><a href="{{route('product')}}">Sản phẩm cùng loại</a></h2>
                    </div>
                    <div class="section-tour-owl owl-carousel not-dqowl products-view-grid margin-top-10 owl-loaded owl-drag"
                        data-md-items="5" data-sm-items="4" data-xs-items="2" data-margin="10">



                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 466px;">
                                <div class="owl-item active" style="width: 218px; margin-right: 15px;">

                                    @foreach($items as $item)
                                    <div class="item">
                                        <div class="ant-product-item">

                                            <div class="image-container">
                                                <a href="{{$item -> link}}" class="product-item-photo">
                                                    <img class="img-responsive" src="{{$item -> full_image_url}}"
                                                        alt="{{$item -> title}}">
                                                </a>
                                            </div>
                                            <div class="box-info">
                                                <h2 class="product-item-name">
                                                    <a title="{{{$item ->title}}}" href="{{$item -> link}}"
                                                        class="product-item-link">
                                                        {{$item -> title}}
                                                    </a>
                                                </h2>
                                                <div class="item-price">
                                                    <div class="price-box price-final_price">


                                                        @if($item->price_promotion == 0)
                                                        <div class="item-price">
                                                            <div class="price-box price-final_price">
                                                                <span class="special-pric"
                                                                    style="font-size: 14px;color: #ed1b24;font-weight: bold;">
                                                                    <span class="price-container">
                                                                        <span class="price-wrapper">
                                                                            <span
                                                                                class="price">{{number_format($item->price)}}</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        @else
                                                        <div class="item-price">
                                                            <div class="price-box price-final_price">
                                                                <span class="special-price">
                                                                    <span class="price-container">
                                                                        <span class="price-wrapper">
                                                                            <span
                                                                                class="price">{{number_format($item->price_promotion)}}</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                                <span class="old-price">
                                                                    <span class="price-container">
                                                                        <span class="price-wrapper">
                                                                            <span
                                                                                class="price">{{number_format($item->price)}}</span>
                                                                        </span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        @endif


                                                    </div>
                                                </div>
                                                <div class="box-hover hidden-sm hidden-xs hidden-md">
                                                    <div class="add-to-links">
                                                        <div class="actions-primary">
                                                            <form action="{{ base_url('cart/add') }}" method="post"
                                                                class="variants form-nut-grid has-validation-callback"
                                                                data-id="product-actions-12681091"
                                                                enctype="multipart/form-data">
                                                                @csrf

                                                                <input type="hidden" name="product_id"
                                                                    value="{{$product->id}}">
                                                                <button
                                                                    class="tt-btn-addtocart btn-buy btn-cart btn btn-gray left-to add_to_cart"
                                                                    title="Cho vào giỏ hàng">
                                                                    <i class="fa fa-shopping-basket"></i>
                                                                </button>


                                                            </form>
                                                        </div>

                                                        <a href="{{route('product')}}"
                                                            data-handle="vo-nem-trai-san-ssjg-yoo-cover-trianglel-125x200cm"
                                                            class="quick-view" title="Xem nhanh">
                                                            <i class="fa fa-search"></i>
                                                        </a>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <div class="owl-prev disabled"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            <div class="owl-next disabled"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                        <div class="owl-dots disabled">
                            <div class="owl-dot active"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

@endsection