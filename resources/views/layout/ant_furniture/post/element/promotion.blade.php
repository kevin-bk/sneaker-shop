@if(!empty($itemPromotion))
    <div class="aside-item aside-blog-promotion">
        <div class="heading">
            <h2 class="title-head"><span><a>Khuyến mãi</a></span></h2>
        </div>
        <div class="list-blogs-promotion">
            <div class="blogs-promotion-small">
                @foreach($itemPromotion as $item)
                    <article class="blog-item blog-item-list clearfix">
                        <a href="{{ $item->link }}" class="panel-box-media">
                            <img src="{{ $item->full_image_url }}"
                                 width="70" height="70" alt="{{ $item->title }}">
                        </a>
                        <div class="blogs-rights">
                            <h3 class="blog-item-name">
                                <a href="{{ $item->link }}" title="{{ $item->title }}">
                                    {{ $item->title }}
                                </a>
                            </h3>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endif
