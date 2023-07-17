@if(!empty($itemView))
    <div class="aside-item">
        <div class="heading">
            <h2 class="title-head"><a href="#"><span>Xem nhiều nhất</span></a></h2>
        </div>
        <div class="list-blogs">
            @foreach($itemView as $item)
                <article class="blog-item blog-item-list clearfix">
                    <a href="{{ $item->link }}" class="panel-box-media">
                        <img src="{{$item->full_image_url}}" width="70"
                             alt="="{{ $item->title }}">
                    </a>
                    <div class="blogs-rights">
                        <h3 class="blog-item-name">
                            <a href="{{ $item->link }}"
                               title="{{ $item->title }}"
                               style="
                                        display: -webkit-box;
                                        -webkit-line-clamp: 2;
                                        -webkit-box-orient: vertical;
                                        text-overflow: ellipsis;
                                        overflow: hidden;">
                                {{$item->title}}
                            </a>
                        </h3>
                        <div class="post-time">{{ $item->created_at->format('d/m/Y H:s') }}</div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@endif