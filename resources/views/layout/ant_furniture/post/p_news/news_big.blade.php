<div class="col-md-8 col-sm-8">
    @foreach($items as $key => $item)
        @if($key > 0)
            @break
        @endif

        <div class="later_news_big">
            <div class="tempvideo">
                <a href="{{ $item->link }}">
                    <img src="{{$item->full_image_url}}" alt="{{$item->title}}" style="width: 100%" class="img-responsive center-block">
                </a>
            </div>
            <h3>
                <a href="{{ $item->link }}" title="{{ $item->title }}">
                    {{$item->title}}
                </a>
            </h3>
            <figure style="
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            text-overflow: ellipsis;
                            overflow: hidden;">
                {{$item-> summary}}
            </figure>
        </div>
    @endforeach
</div>
