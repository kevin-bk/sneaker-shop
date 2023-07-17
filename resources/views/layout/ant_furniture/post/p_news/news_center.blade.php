@foreach ($items as $key => $item)
    @if($key < 4)
        <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
            <article class="blog-item">
                <div class="blog-item-thumbnail">
                    <a href="{{ $item->link }}">
                        <img src="{{$item->full_image_url}}" alt="{{$item->title}}" class="img-responsive center-block">
                    </a>
                </div>
                <div class="blog-item-mains">
                    <h3 class="blog-item-name">
                        <a href="{{ $item->link }}" title="{{$item->title}}">{{$item->title}}</a>
                    </h3>
                    <div class="post-time">
                        {{ $item->created_at->format('d/m/Y H:s') }}
                    </div>
                    <p class="blog-item-summary mai margin-bottom-5" style="
                                                                    display: -webkit-box;
                                                                    -webkit-line-clamp: 4;
                                                                    -webkit-box-orient: vertical;
                                                                    text-overflow: ellipsis;
                                                                    overflow: hidden;">
                        {{$item-> summary}}
                    </p>
                </div>
            </article>
        </div>
        
    @endif
@endforeach
