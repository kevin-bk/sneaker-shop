@extends('layout.ant_furniture.layouts.app')
@section('content')
<section class="bread-crumb margin-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope="">
                    <li class="home" itemprop="itemListElement" itemscope="">
                        <a itemprop="item" href="./index.html" title="Trang chủ">
                            <span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1">
                        </a>
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>

                    <li itemprop="itemListElement" itemscope="">
                        <strong itemprop=" name">Giỏ hàng</strong>
                        <meta itemprop="position" content="2">
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>


<div class="container white collections-container margin-bottom-20">
    <div class="white-background">
        <div class="row">
            <div class="col-md-12">
                <div class="shopping-cart">
                    <div class="visible-md visible-lg">
                        <div class="shopping-cart-table">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="lbl-shopping-cart lbl-shopping-cart-gio-hang">Giỏ hàng <span>(<span
                                                class="count_item_pr">{{$items->count()}}</span> sản phẩm)</span></h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-main cart_desktop_page cart-page">
                                    <form id="shopping-cart" action="{{ base_url('cart/checkout/'.$token_checkout) }}"
                                        method="get" class="has-validation-callback">
                                        <div class="cart page_cart cart_des_page hidden-xs-down">
                                            <div class="col-xs-9 cart-col-1">
                                                <div class="cart-tbody">
                                                    @if($items->count() > 0)
                                                    @foreach($items as $item)
                                                    <div class="row shopping-cart-item productid-20633434">
                                                        <div class="col-xs-3 img-thumnail-custom">
                                                            <p class="image">
                                                                <img class="img-responsive"
                                                                    src="{{$item->associatedModel->full_image_url}}"
                                                                    alt="{{$item->associatedModel->title}}"
                                                                    style="width:100px">
                                                            </p>
                                                        </div>
                                                        <div class="col-right col-xs-9">
                                                            <div class="box-info-product">
                                                                <p class="name">
                                                                    <a href="#" title="{{ $item->name }}"
                                                                        target="_blank">{{ $item->name }}</a>
                                                                </p>

                                                                <p class="name">
                                                                    Size: {{$item->attributes->size}}
                                                                </p>

                                                                <p class="action"><a
                                                                        href="{{ base_url('cart/delete/'.$item->id) }}"
                                                                        class="btn btn-link btn-item-delete remove-item-cart">Xóa</a>
                                                                </p>
                                                            </div>
                                                            <div class="box-price">
                                                                <p class="price">{{ number_format($item->price) }}</p>
                                                            </div>

                                                            <div class="box-info-x">
                                                                <p>X</p>
                                                            </div>
                                                            <div class="quantity-block">
                                                                <div class="input-group bootstrap-touchspin">
                                                                    <div class="input-group-btn">
                                                                        <p class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem20633434"
                                                                            id="qtyItem20633434">{{ $item->quantity }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <td colspan="3">Chưa có sản phẩm</td>
                                                    </tr>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-xs-3 cart-col-2 cart-collaterals cart_submit">
                                                <div id="right-affix">
                                                    <div class="each-row">
                                                        <div class="box-style fee">
                                                            <p class="list-info-price"><span>Tạm tính: </span><strong
                                                                    class="totals_price price _text-right text_color_right1">{{ number_format(\Cart::getTotal()) }}</strong>
                                                            </p>
                                                        </div>
                                                        <div class="box-style fee">
                                                            <div class="total2 clearfix"><span class="text-label">Thành
                                                                    tiền: </span>
                                                                <div class="amount">
                                                                    <p><strong
                                                                            class="totals_price">{{ number_format(\Cart::getTotal()) }}</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if($items->count() > 0)

                                                        <button type="submit"
                                                            class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout">
                                                            Thanh toán ngay
                                                        </button>

                                                        @else
                                                        <button
                                                            class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout"
                                                            disabled="disabled">
                                                            Không thể thanh toán
                                                        </button>
                                                        @endif
                                                        <button
                                                            class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkouts"
                                                            title="Tiếp tục mua hàng" type="button"
                                                            onclick="window.location.href='{{ base_url('product') }}'">Tiếp
                                                            tục
                                                            mua hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="visible-sm visible-xs">
                        <div class="cart-mobile">
                            <form id="shopping-cart" action="{{ base_url('cart/checkout/'.$token_checkout) }}"
                                method="get" class="has-validation-callback">
                                <div class="header-cart">
                                    <div class="title-cart">
                                        <h3>Giỏ hàng của bạn</h3>
                                    </div>
                                </div>
                                <div class="header-cart-content">
                                    @if($items->count() > 0)
                                    @foreach($items as $item)
                                    <div class="cart_page_mobile content-product-list">
                                        <div class="item-product item productid-20611714 ">
                                            <div class="item-product-cart-mobile">
                                                <p class="image">
                                                    <img class="img-responsive"
                                                        src="{{$item->associatedModel->full_image_url}}"
                                                        alt="{{$item->associatedModel->title}}" style="width:100px">
                                                </p>
                                            </div>
                                            <div class="title-product-cart-mobile">
                                                <div class="box-info-product">
                                                    <p class="name">
                                                        <a href="#" title="{{ $item->name }}"
                                                            target="_blank">{{ $item->name }}</a>
                                                    </p>

                                                    <p class="action"><a href="{{ base_url('cart/delete/'.$item->id) }}"
                                                            class="btn btn-link btn-item-delete remove-item-cart">Xóa</a>
                                                    </p>
                                                </div>
                                               
                                            </div>

                                            <div class="quantity-block">
                                                <div class="input-group bootstrap-touchspin">
                                                    <div class="input-group-btn">
                                                        <p class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem20633434"
                                                            id="qtyItem20633434">x {{ $item->quantity }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-price">
                                                <p class="price text-danger">{{ number_format($item->price) }}</p>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3">Chưa có sản phẩm</td>
                                    </tr>
                                    @endif
                                    <div class="header-cart-price">
                                        <div class="title-cart" style="margin-bottom:20px;">
                                            <h3 class="text-xs-left">Tổng tiền</h3><a
                                                class="text-xs-right totals_price_mobile">{{ number_format(\Cart::getTotal()) }}</a>
                                        </div>
                                        <div class="checkout">
                                            @if($items->count() > 0)

                                            <button type="submit"
                                                class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout"
                                                title="Thanh toán ngay">
                                                Thanh toán ngay
                                            </button>

                                            @else
                                            <button
                                                class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout"
                                                disabled="disabled" title="Thanh toán ngay">
                                                Không thể thanh toán
                                            </button>
                                            @endif
                                            <button
                                                class="button btn-proceed-checkout btn btn-large btn-block btn-checkouts"
                                                title="Tiếp tục mua hàng" type="button"
                                                onclick="window.location.href='{{ base_url('product') }}'">Tiếp tục mua
                                                hàng</button>
                                        </div>
                                    </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection