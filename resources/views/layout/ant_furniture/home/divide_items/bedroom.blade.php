<section class="awe-section-6">


    <div class="section_product container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-head">
                    <span class="group-icon"><i class="fa fa-dashcube" aria-hidden="true"></i></span>
                    <h2>Phòng ngủ</h2>
                </div>
            </div>
            <div class="col-md-12 e-tabs not-dqtab ajax-tab-3" data-section="ajax-tab-3" data-view="grid_4">
                <div class="content">

                    <div class="tab-1 tab-content">

                        <div class="section-tour-owl3 products products-view-grid owl-carousel" data-lg-items='5'
                            data-md-items='5' data-sm-items='3' data-xs-items="2" data-xss-items="2" data-margin='10'
                            data-nav="true" data-dot="false">

                            @foreach($items as $item)
                            @if($item->category_id == $item->category->id || $item > 5)
                            <div class="item">
                                <div class="ant-product-item">
                                    <div class="image-container">


                                        <a href="{{$item -> link}}" class="product-item-photo">
                                            <img class="product-image-photo img-responsive center-block"
                                                src="{{$item->full_image_url}}" alt="{{$item->title}}" />
                                        </a>
                                    </div>
                                    <div class="box-info">
                                        <h2 class="product-item-name">
                                            <a title="{{$item->title}}" href="{{$item->link}}"
                                                class="product-item-link">
                                                {{$item->title}}
                                            </a>
                                        </h2>
                                        <div class="product-reviews-summary">
                                            <div class="rating-summary">
                                                <div class="bizweb-product-reviews-badge" data-id="12668688"></div>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            @if($item->price_promotion == 0)
                                            <div class="item-price">
                                                <div class="price-box price-final_price">
                                                    <span class="special-price" style="font-size: 14px;color: #ed1b24;font-weight: bold;">
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
                                        <div class="box-hover hidden-sm hidden-xs hidden-md">
                                            <div class="add-to-links">
                                                <div class="actions-primary">
                                                    <form action="{{ base_url('cart/add') }}" method="post"
                                                        class="variants form-nut-grid"
                                                        data-id="product-actions-12668688"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="variantId" value="20611717" />
                                                        <button class="tt-btn-addtocart btn-cart btn btn-gray left-to"
                                                            title="Chọn sản phẩm" type="button"
                                                            onclick="window.location.href='{{ $item->link }}'">
                                                            <i class="fa fa-link"></i>
                                                        </button>

                                                    </form>
                                                </div>

                                                <a href="{{$item -> link}}" class="quick-view" title="Xem nhanh">
                                                    <i class="fa fa-search"></i>
                                                </a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach

                        </div>


                    </div>

                    <div class="tab-2 tab-content">

                    </div>

                    <div class="tab-3 tab-content">

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>