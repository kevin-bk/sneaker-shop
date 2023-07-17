@foreach($items as $item)
<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
    <div class="ant-product-item">
        <div class="image-container">


            <a href="{{ $item->link }}" class="product-item-photo">
                <img class="product-image-photo img-responsive center-block" src="{{$item -> full_image_url}}"
                    alt="{{ $item->title }}">
            </a>
        </div>
        <div class="box-info">
            <h2 class="product-item-name">
                <a title="{{ $item->title }}" href="#" class="product-item-link">
                    {{$item -> title}}
                </a>
            </h2>
            @if($item->price_promotion == 0)
            <div class="item-price">
                <div class="price-box price-final_price">
                    <span class="special-pric" style="font-size: 14px;color: #ed1b24;font-weight: bold;">
                        <span class="price-container">
                            <span class="price-wrapper">
                                <span class="price">{{number_format($item->price)}}</span>
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
                                <span class="price">{{number_format($item->price_promotion)}}</span>
                            </span>
                        </span>
                    </span>
                    <span class="old-price">
                        <span class="price-container">
                            <span class="price-wrapper">
                                <span class="price">{{number_format($item->price)}}</span>
                            </span>
                        </span>
                    </span>
                </div>
            </div>
            @endif
            <div class="box-hover hidden-sm hidden-xs hidden-md">
                <div class="add-to-links">
                    <div class="actions-primary">
                        <form action="{{ base_url('cart/add') }}" method="post"
                            class="variants form-nut-grid has-validation-callback" data-id="product-actions-12681121"
                            enctype="multipart/form-data">
                            @csrf
                            <input class="hidden" type="hidden" name="variantId" value="20633434">
                            <button class="tt-btn-addtocart btn-cart btn btn-gray left-to" title="Chọn sản phẩm"
                                type="button" onclick="window.location.href='{{ $item->link }}'">
                                <i class="fa fa-link"></i>
                            </button>


                        </form>
                    </div>

                    <a href="{{ $item->link }}" data-handle="ke-trang-tri-modulo-home" class="quick-view"
                        title="Xem nhanh">
                        <i class="fa fa-search"></i>
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endforeach