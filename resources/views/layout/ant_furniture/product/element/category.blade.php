<aside class="aside-item collection-category">
    <div class="aside-title">
        <h3 class="title-head margin-top-0"><span>Danh mục</span></h3>
    </div>
    <div class="aside-content">
        <nav class="nav-category navbar-toggleable-md">
            <ul class="nav navbar-pills">
                @foreach($menuTop as $myMenu)
                    <li class="nav-item">
                        <a href="{{ base_url($myMenu->value) }}" class="nav-link">
                            <i class="fa fa-caret-right" aria-hidden="true"></i> {{$myMenu->title }}
                        </a>

                        @if($myMenu->subMenu->count() > 0)
                            <i class="fa fa-angle-down"></i>
                        @endif

                        @if($myMenu->subMenu->count() > 0)
                            <ul class="dropdown-menu">
                                @foreach($myMenu->subMenu as $subMenu)
                                    <li class="dropdown-submenu nav-item ">
                                        <a class="nav-link" href="{{ base_url($subMenu->value) }}">
                                            {{$subMenu->title}}
                                        </a>
                                        <i class="fa fa-angle-down"></i>

                                        <ul class="dropdown-menu">

                                            @foreach($subMenu->subMenu as $subMenuLevel3)
                                                <li class="nav-item ">
                                                    <a class="nav-link" href="{{ base_url($subMenuLevel3->value) }}">
                                                        {{$subMenuLevel3->title}}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>