<div class="col-md-3">
    <div class="block block-search">
        <form class="input-group search-bar search_form" action="{{route('search')}}" method="get" role="search" id="voice-search">
            @csrf
            <input type="search" name="s" value="" placeholder="Tìm kiếm sản phẩm... "
                class="input-group-field st-default-search-input search-text search-voice" autocomplete="off">
            <span class="input-group-btn">
                <button class="btn icon-fallback-text" type="submit" style="color: #1f3b47;" >
                    <i class="fa fa-search"></i>
                </button>
            </span>

        </form>
    </div>
</div>