<section class="awe-section-1">
    <div class="home-slider owl-carousel not-dqowl owl-loaded owl-drag">
        <div id="carousel-id" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($banner as $key => $item)
                <li data-target="#carousel-id" data-slide-to="{{ $key }}" class=" @if($key == 0) active @endif"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach($banner as $key => $item)
                <div class="item @if($key == 0) active @endif">
                    <img src="{{$item->full_image_url}}" alt="{{$item->title}}">
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</section>

