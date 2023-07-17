<div class="col-md-4 col-sm-4">
    <ul class="col-later-news">
        @foreach($items as $key => $item)
            <!-- $key == 0 là phần tử thứ nhất lở ở bên box lớn rồi nên bỏ nó -->
            @if($key == 0)
                @continue
            @endif

            @if($key > 4)
                @break
            @endif

            @if($key == 1)
                <li class="has-tempvideo">
                    <div class="tempvideo">
                        <a href="{{ $item->link }}" title="{{$item->title}}">
                            <img src="{{$item->full_image_url}}"
                                 alt="{{$item->title}}"
                                 class="img-responsive center-block">
                        </a>
                    </div>
                    <h3>
                        <a href="{{ $item->link }}" title="{{$item->title}}">
                            {{$item->title}}
                        </a>
                    </h3>
                </li>
            @else
                <li>
                    <h3>
                        <a href="{{ $item->link }}" title="{{$item->title}}" class="linkimg" style="
                                        display: -webkit-box;
                                        -webkit-line-clamp: 1;
                                        -webkit-box-orient: vertical;
                                        text-overflow: ellipsis;
                                        overflow: hidden;">
                            {{$item->title}}
                        </a>
                    </h3>
                </li>
            @endif
        @endforeach
    </ul>
</div>
