<div class="col-md-3 hidden-sm hidden-xs">
    <div class="mainmenu">
        <span class="edit-span">
            <i class="fa fa-dashcube" aria-hidden="true"></i> Danh mục sản phẩm
        </span>
        <div class="nav-cate">
            <ul id="menu2017">
                @foreach($menuProduct as $menusp)
                    <li class="dropdown menu-item-count">
                        <h3>
                            <img src="{{$menusp->full_image_url}}"/>
                            <a href="{{ base_url('product').('/').$menusp->slug }}">{{$menusp->title}}
                                @if(count($menusp->subProduct) > 0)
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                @endif
                            </a>
                        </h3>
                        @if(count($menusp->subProduct) > 0)
                            <div class="subcate gd-menu active">
                                <div class="subcate-flex">
                                    @foreach($menusp->subProduct as $sublv2)
                                        <aside>
                                            <a href="{{ base_url('product').('/').$sublv2->slug }}" class="">{{$sublv2->title}}</a>
                                        </aside>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>