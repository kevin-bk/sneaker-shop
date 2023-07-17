<header class="header">
    <div class="top-link header-link hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 header-static">
                    <i class="fa fa-globe"></i> Chào mừng bạn đến với {{ $config["company_name"] ?? '' }}
                </div>
                <div class="col-md-6 col-xs-12 right">
                    <div class="top-link-dropdown">
                        <ul class="header-links">
                            @if(auth('web')->check())
                            <li style="float:left; margin-right: 10px; margin-top: 6px;">
                                <div class="img_avata">
                                    <img class="img-circle img-responsive" id="pathPreviewSingle_image_url"
                                        style="width: 28px; height: 28px"
                                        src="@if(!empty($member->image_url)){{ asset('storage'.$member->image_url) }}@else{{ asset('site/img/no-avatar.png') }}@endif"
                                        alt="avatar">
                                </div>
                            </li>
                            <li class="customer welcome customer-welcome">

                                <span class="customer">
                                    <a class="account">{{ $member->email }}</a>
                                </span>
                                <div class="customer-menu">
                                    <ul class="header links">
                                        <li><a href="{{base_url('member')}}">Thông tin tài khoản</a></li>
                                        <li><a href="{{base_url('member/logout')}}">Đăng xuất</a></li>

                                    </ul>
                                </div>
                            </li>

                            @else
                            <li class="customer welcome customer-welcome">
                                <span class="customer">
                                    <a class="account">Tài khoản</a>
                                </span>
                                <div class="customer-menu">
                                    <ul class="header links">
                                        <li><a href="{{route('login')}}">Đăng nhập</a></li>
                                        <li><a href="{{route('register')}}">Đăng ký</a></li>
                                    </ul>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-100-h">
                    <button type="button" class="navbar-toggle collapsed visible-sm visible-xs" id="trigger-mobile"
                            >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logo">
                        <a href="{{route('home')}}" class="logo-wrapper">
                            @if(!empty($config['logo']))
                            <img src="{{ $config['logo'] }}" alt="{{ $config['company_name'] ?? '' }}">
                            @else
                            <span class="text">{{ $config['company_name'] ?? '' }}</span>
                            @endif
                        </a>
                    </div>
                    <div class="mobile-cart visible-sm visible-xs">
                        <a href="{{route('cart')}}" title="Giỏ hàng">
                            <i class="fa fa-shopping-basket"></i>
                            <div class="cart-right">
                                <span class="count_item_pr">{{ \Cart::getTotalQuantity() }}</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 hidden-sm hidden-xs">
                    <div class="our-service">
                        <div class="row">
                            <div class="box col-md-4">
                                <div class="box-inner">
                                    <i class="fa fa-globe"></i>
                                    <div class="content">
                                        <h5>Giao hàng 24h</h5>
                                        <p>Với đơn hàng trên 500.000 đ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box col-md-4">
                                <div class="box-inner">
                                    <i class="fa fa-check"></i>
                                    <div class="content">
                                        <h5>Chất lượng</h5>
                                        <p>Bảo đảm chất lượng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box col-md-4">
                                <div class="box-inner">
                                    <i class="fa fa-bell"></i>
                                    <div class="content">
                                        <h5>Nguồn gốc</h5>
                                        <p>Nhập khẩu chính hãng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="minicart-wrapper">
                        <a class="showcart" href="{{route('cart')}}">
                            <i class="fa fa-shopping-basket"></i>

                            <span class="cart-value count_item_pr">{{ \Cart::getTotalQuantity() }}</span>

                            <span class="content">
                                <span class="content-inner">

                                    <span class="text">Giỏ hàng</span>

                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.ant_furniture.home.element.nav')
</header>

