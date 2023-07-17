@extends('layout.ant_furniture.layouts.app')
@section('content')
<section class="bread-crumb margin-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <li class="home" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="./index.html" title="Trang chủ">
                            <span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1">
                        </a>
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <strong itemprop="name">Đăng nhập tài khoản</strong>
                        <meta itemprop="position" content="2">
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container margin-bottom-30">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="page-login account-box-shadow">
                <div id="login">
                    <div class="text-center">
                        <h1 class="title-head"><span>Đăng nhập tài khoản</span></h1>
                    </div>
                    <div class="social-login text-center margin-bottom-10">
                        <a href="{{base_url('member/login-social/facebook')}}" class="social-login--facebook" onclick="loginFacebook()">
                            <img width="129px" height="37px" alt="facebook-login-button" src="{{asset('layout/ant_furniture/img/fb-btn.svg')}}">
                        </a>
                        <a href="{{base_url('member/login-social/google')}}" class="social-login--google" onclick="loginGoogle()">
                            <img width="129px" height="37px" alt="google-login-button" src="{{asset('layout/ant_furniture/img/gp-btn.svg')}}">
                        </a>
                    </div>
                    <form accept-charset="utf-8" action="{{base_url('member/login')}}" id="customer_login" method="post" class="has-validation-callback">
                    @csrf    
                    <input name="FormType" type="hidden" value="customer_login">
                        <input name="utf8" type="hidden" value="true">
                        <div class="form-signup">

                        </div>
                        <div class="form-signup clearfix">
                            <fieldset class="form-group margin-bottom-20">
                                <label>Email<span class="required">*</span></label>
                                <input type="email" class="form-control form-control-lg" value="" name="email"
                                       id="customer_email"
                                       data-validation-error-msg="Email sai định dạng">
                            </fieldset>
                            <fieldset class="form-group">
                                <label>Mật khẩu<span class="required">*</span></label>
                                <input type="password" class="form-control form-control-lg" value="" name="password"
                                       id="customer_password" placeholder="Mật khẩu">
                            </fieldset>
                            <div class="pull-xs-left text-center" style="margin-top: 15px;">
                                <button class="btn btn-style btn-blues" type="submit" value="Đăng nhập">
                                    Đăng nhập
                                </button>
                            </div>
                            <div class="clearfix"></div>
                            <p class="text-center">
                                <a href="{{route('forgot')}}" class="btn-link-style">
                                    Quên mật khẩu?
                                </a>
                            </p>
                            <div class="text-login text-center">
                                <p>
                                    Bạn chưa có tài khoản. Đăng ký <a href="{{route('register')}}">tại đây.</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
               
            </div>
        </div>

    </div>
</div>
@endsection