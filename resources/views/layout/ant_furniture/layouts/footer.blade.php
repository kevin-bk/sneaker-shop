<footer class="footer-container">
    <div class="footer-top container">
        <div class="footer-static row">
            <div class="f-col f-col1 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-footer">
                    <a href="{{route('home')}}">
                        @if(!empty($config['logo']))
                        <img src="{{ $config['logo'] }}" alt="{{ $config['company_name'] ?? '' }}">
                        @else
                        <span class="text">{{ $config['company_name'] ?? '' }}</span>
                        @endif
                    </a>
                </div>
                <div class="footer-content">
                    <ul class="info">

                        <li>Địa chỉ: {{ $config["company_address"] ?? '' }}</li>
                        <li>Điện thoại: <a href="tel:{{ $config["company_phone"] ?? '' }}"> {{ $config["company_phone"] ?? '' }}</a></li>
                        <li>Website: <a href="{{ $config["company_website"] ?? '' }}"> {{ $config["company_website"] ?? '' }}</a></li>
                        <li>Email: <a href="mailto:{{ $config["company_email"] ?? '' }}">{{ $config["company_email"] ?? '' }}</a>
                        </li>

                    </ul>
                    <div class="social-icons">
                        <ul>

                            <li class="twitter"><a title="twitter"
                                    href="{{ $config["company_twitter"] ?? '' }}"" target=" _blank"><i
                                        class="fa fa-twitter"></i></a></li>


                            <li class="facebook"><a title="facebook" href="{{ $config["company_facebook"] ?? '' }}"
                                    target="_blank"><i class="fa fa-facebook-f"></i></a></li>


                            <li class="googleplus"><a title="googleplus" href="{{ $config["company_google"] ?? '' }}"
                                    target="_blank"><i class="fa fa-google-plus"></i></a></li>


                            <li class="youtube"><a title="youtube" href="{{ $config["company_youtube"] ?? '' }}"
                                    target="_blank"><i class="fa fa-pinterest-p"></i></a></li>


                            <li class="pinterest"><a title="pinterest" href="{{ $config["company_pinterest"] ?? '' }}"
                                    target="_blank"><i class="fa fa-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="f-col f-col2 col-md-2 col-sm-6 col-xs-6">
                <div class="footer-title">
                    <h3>Hướng dẫn</h3>
                </div>
                <div class="footer-content">
                    <ul class="menu">

                        @foreach($menuFooter1 as $myMenu)
                        <li
                            class="nav-item  @if($myMenu->subMenu->count() > 0) has-mega @endif @if(request()->is($myMenu->value)) active @endif">
                            <a class="nav-link dropdown-toggle" href="{{ base_url($myMenu->value) }}"
                                id="navbarDropdown" role="button"
                                data-toggle="@if($myMenu->subMenu->count() > 0) dropdown @endif" aria-haspopup="true"
                                aria-expanded="false">
                                {{ $myMenu->title }}
                                @if($myMenu->subMenu->count() > 0)
                                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                                @endif
                            </a>

                            @if($myMenu->subMenu->count() > 0)
                            <div class="mega-content dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                        <ul class="level0">
                                            @foreach($myMenu->subMenu as $subMenu)
                                            <li class="level1 parent item dropdown-item" style="margin: 10px;">
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
                </div>
            </div>
            <div class="f-col f-col3 col-md-2 col-sm-6 col-xs-6">
                <div class="footer-title">
                    <h3>Chính sách</h3>
                </div>
                <div class="footer-content">
                    <ul class="menu">

                        @foreach($menuFooter2 as $myMenu)
                        <li
                            class="nav-item  @if($myMenu->subMenu->count() > 0) has-mega @endif @if(request()->is($myMenu->value)) active @endif">
                            <a class="nav-link" href="{{ base_url($myMenu->value) }}">
                                {{ $myMenu->title }}
                                @if($myMenu->subMenu->count() > 0)
                                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                                @endif
                            </a>

                            @if($myMenu->subMenu->count() > 0)
                            <div class="mega-content dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="level0-wrapper2">
                                    <div class="nav-block nav-block-center">
                                        <ul class="level0">
                                            @foreach($myMenu->subMenu as $subMenu)
                                            <li class="level1 parent item dropdown-item" style="margin: 10px;">
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
                </div>
            </div>
            <div class="f-col f-col4 col-md-4 col-sm-12 col-xs-12">
                <div class="footer-title">
                    <h3>Nhận email khuyến mãi</h3>
                </div>
                <div class="footer-content">Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp dẫn<div
                        class="block newsletter">
                        <div class="content">

                            <form class="form subscribe" action="/newsletter" method="POST">
                                @csrf
                                <div class="field newsletter">
                                    <div class="control">
                                        <input name="email" type="email" id="newsletter" value=""
                                            placeholder="Nhập địa chỉ Email của bạn" required>

                                        <div class="actions">
                                            <button class="action subscribe primary" name="subscribe" title="Đăng ký"
                                                type="submit">
                                                <span>Đăng ký</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-copyright">
                    <small class="copyright">
                        <span>© Bản quyền thuộc về <b>{{ $config["company_name"] ?? '' }}</b> <span class="s480-f">|</span> Cung cấp bởi
                            <a>{{ $config["company_name"] ?? '' }}</a></span>
                    </small>
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment">
                    @if(!empty($config['logo']))
                    <img src="{{ $config['logo'] }}" alt="{{ $config['company_name'] ?? '' }}">
                    @else
                    <span class="text">{{ $config['company_name'] ?? '' }}</span>
                    @endif
                </div>
            </div>
        </div>

        <button onclick="topFunction()" id="myBtn" title="Go to top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </button>


    </div>
</footer>

<script src="{{ asset('layout/ant_furniture/js/script.js') }} " type="text/javascript"></script>
<script src="{{ asset('layout/ant_furniture/js/backtotop.js') }} " type="text/javascript"></script>
<script src="{{ asset('layout/ant_furniture/js/main.js') }} " type="text/javascript"></script>
<script src="{{ asset('layout/ant_furniture/js/carousel.js') }} " type="text/javascript"></script>
<script src="{{ asset('layout/ant_furniture/js/cart.js') }} " type="text/javascript"></script>

{!! !empty($config['code_footer']) ? $config['code_footer'] : '' !!}