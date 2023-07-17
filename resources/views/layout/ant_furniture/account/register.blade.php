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
                        <strong itemprop="name">Đăng ký tài khoản</strong>
                        <meta itemprop="position" content="2">
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container mr-bottom-20">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="page-login account-box-shadow">
                <div id="login">
                    <h1 class="title-head text-center">Đăng ký tài khoản</h1>
                    <div class="text-center"><span>Nếu chưa có tài khoản vui lòng đăng ký tại đây</span></div>
                    <div class="social-login text-center margin-bottom-10 margin-top-15">
                        <a href="#" class="social-login--facebook">
                            <img width="129px" height="37px" alt="facebook-login-button" src="{{asset('layout/ant_furniture/img/fb-btn.svg')}}">
                        </a>
                        <a href="#" class="social-login--google">
                            <img width="129px" height="37px" alt="google-login-button" src="{{asset('layout/ant_furniture/img/gp-btn.svg')}}">
                        </a>
                    </div>
                    <form method="post" action="{{ base_url('member/register') }}">
                    @csrf
                        <div class="loginbox-textbox">
                            @if ($errors->any())
                                @foreach ($errors->all() as $err)
                                    <p class="text-danger">- {{$err}}</p>
                                @endforeach

                            @else
                            <p class="text-success"></p>
                            @endif
                        </div>
                        <div class="loginbox-textbox">
                            <label class="control-label">Email</label>
                            <input type="email" required name="email" class="form-control"  value="{{ old('email') }}">
                        </div>

                        <div class="loginbox-textbox">
                            <label class="control-label">Password</label>
                            <input type="password" required name="password" class="form-control">
                        </div>

                        <div class="loginbox-textbox">
                            <label class="control-label">Confirm Password</label>
                            <input type="password" required name="password_confirmation" class="form-control" >
                        </div>

                        <div class="loginbox-submit">
                            <input type="submit" class="btn btn-primary btn-block" value="Đăng Ký">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

