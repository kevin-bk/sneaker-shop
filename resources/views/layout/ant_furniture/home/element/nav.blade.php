<div class="header-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-9 hidden-sm hidden-xs">
                <nav class="hidden-sm hidden-xs">
                    <ul id="nav" class="nav">
                        @foreach($menuTop as $myMenu)
                        <li
                            class="nav-item  @if($myMenu->subMenu->count() > 0) has-mega @endif @if(request()->is($myMenu->value)) active @endif">
                            <a class="nav-link" href="{{ base_url($myMenu->value) }}">
                                {{ $myMenu->title }}
                                @if($myMenu->subMenu->count() > 0)
                                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                                @endif
                            </a>

                            @if($myMenu->subMenu->count() > 0)
                            <div class="mega-content">
                                <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                        <ul class="level0">
                                            @foreach($myMenu->subMenu as $subMenu)
                                            <li class="level1 parent item">
                                                <h2 class="h4">
                                                    <a href="{{ base_url($subMenu->value) }}">
                                                        <span>{{ $subMenu->title }}</span>
                                                    </a>
                                                </h2>
                                                <ul class="level1">
                                                    @foreach($subMenu->subMenu as $subMenuLevel3)
                                                    <li class="level2">
                                                        <a href="{{ base_url($subMenuLevel3->value) }}">
                                                            <span>{{ $subMenuLevel3->title  }}</span>
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            @include('layout.ant_furniture.search.index')
        </div>
    </div>
</div>

<!-- mobile -->

<div class="mobile-main-menu" id="bs-example-navbar-collapse-2">
    @if(auth('web')->check())
    <div class="drawer-header">
        <a href="{{base_url('member')}}">
            <div class="drawer-header--auth">
                <div class="_object">
                    <img class="img-circle img-responsive" id="pathPreviewSingle_image_url"
                        style="width: 35px; height: 35px"
                        src="@if(!empty($member->image_url)){{ asset('storage'.$member->image_url) }}@else{{ asset('site/img/no-avatar.png') }}@endif"
                        alt="avatar">
                </div>

                <div class="_body">
                    <span class="customer">
                        <h4>Xin Chào</h4>
                    </span>
                    <span class="customer">
                        <a class="account" style="color:#000;">{{ $member->email }}</a>
                    </span>
                </div>
                <div class="drawer_close">

                    <a class="close" href="{{route('home')}}">
                        <span class="glyphicon glyphicon-chevron-left"></span></a>


                </div>

            </div>
        </a>
    </div>

    <ul class="ul-first-menu">

        <li><a href="{{base_url('member')}}"><i class="fa fa-sign-in"></i>Thông tin tài khoản</a></li>
        <li><a href="{{base_url('member/logout')}}"><i class="fa fa-user-plus"></i> Đăng xuất</a></li>

    </ul>

    @else
    <div class="drawer-header">
        <a href="account/login">
            <div class="drawer-header--auth">
                <div class="_object">
                    <img src="//bizweb.dktcdn.net/100/331/465/themes/684469/assets/user.svg?1628514581269"
                        alt="Ant Furniture">
                </div>

                <div class="_body">
                    ĐĂNG NHẬP
                    <br>
                    Nhận nhiều ưu đãi hơn
                </div>

            </div>
        </a>
    </div>

    <ul class="ul-first-menu">

        <li><a href="{{route('login')}}"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
        <li><a href="{{route('register')}}"><i class="fa fa-user-plus"></i> Đăng ký</a></li>


    </ul>
    @endif
    <div class="la-scroll-fix-infor-user">
        <!--CATEGORY-->
        <div class="la-nav-menu-items">
            <div class="la-title-nav-items"><strong>Danh mục</strong></div>

            <ul class="la-nav-list-items">
                @foreach($menuTop as $myMenu)


                <li class="ng-scope ng-has-child1">
                    <a href="{{ base_url($myMenu->value) }}">{{ $myMenu->title }}
                        @if($myMenu->subMenu->count() > 0)
                        <i class="fa fa-plus fa1" aria-hidden="true"></i>
                        @endif
                    </a>
                    @if($myMenu->subMenu->count() > 0)
                    <ul class="ul-has-child1">
                        @foreach($myMenu->subMenu as $subMenu)
                        <li class="ng-scope ng-has-child2">
                            <a href="{{ base_url($subMenu->value) }}">{{ $subMenu->title }}
                                @if($subMenu->subMenu->count() > 0)
                                <i class="fa fa-plus fa2" aria-hidden="true"></i>
                                @endif
                            </a>
                            @foreach($subMenu->subMenu as $subMenuLevel3)
                            <ul class="ul-has-child2">

                                <li class="ng-scope">
                                    <a href="{{ base_url($subMenuLevel3->value) }}">{{ $subMenuLevel3->title  }}</a>
                                </li>

                            </ul>
                            @endforeach
                        </li>
                        @endforeach


                    </ul>
                    @endif
                </li>


                @endforeach
            </ul>

        </div>
    </div>
    <ul class="mobile-support">
        <li>
            <div class="drawer-text-support">HỖ TRỢ</div>
        </li>

        <li>Điện thoại: <a href="tel:{{ $config["company_phone"] ?? '' }}">
                {{ $config["company_phone"] ?? '' }}</a>
        </li>
        <li>Email: <a href="mailto:mai.levanhuynh@gmail.com">{{ $config["company_email"] ?? '' }}</a>



    </ul>
</div>