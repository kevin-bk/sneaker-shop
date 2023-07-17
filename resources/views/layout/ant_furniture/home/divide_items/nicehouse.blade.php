<section class="awe-section-10">
    <section class="container section-news">
        <div class="heading">
            <span class="group-icon">
                <i class="fa fa-dashcube" aria-hidden="true"></i>
            </span>
            <h2 class="title-head">
                {{ $categoryNhaDep->title }}
            </h2>
            <a href="{{ $categoryNhaDep->link }}" class="news-more" title="Xem thêm">Xem thêm</a>
        </div>

        <div class="section-news-owl row">
            @if(!empty($itemNhaDep))
                @foreach($itemNhaDep as $item)
                    <div class="col-md-4 col-sm-4 col-xs-12 margin-bottom-10 clearfix item-blogs-evo">
                        <a href="{{ $item->link }}" class="blog-image"
                           title="{{ $item->title }}">
                            <img src="{{ $item->full_image_url }}" alt="{{ $item->title }}"
                                 class="img-responsive center-block"/>
                        </a>
                        <div class="blog-content">
                            <h3 class="blog-title">
                                <a href="{{ $item->link }}" title="{{ $item->title }}">{{ $item->title }}</a>
                            </h3>
                            <div class="time-comment">
                                <span class="date-time">
                                    <i class="fa fa-calendar"></i> {{ $item->created_at->format('d/m/Y') }}
                                </span>
                                <span class="comment">
                                    <i class="fa fa-comments"></i> {{ $item->comment->count() }} Bình luận
                                </span>
                            </div>
                            <p class="short-des">{{ $item->summary }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>
</section>
