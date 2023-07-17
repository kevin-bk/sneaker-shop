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
                
                <div id="recover-password" class="form-signup" style="display: block;">
                    <div class="text-center">
                        <h1 class="title-head"><span>Đặt lại mật khẩu</span></h1>
                    </div>
                    <span class="block text-center">
                        Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.
                    </span>
                    <form accept-charset="utf-8" action="/account/recover" id="recover_customer_password" method="post"
                        class="has-validation-callback">
                        <input name="FormType" type="hidden" value="recover_customer_password">
                        <input name="utf8" type="hidden" value="true">
                        <div class="form-signup aaaaaaaa">

                        </div>

                        <div class="form-signup clearfix">
                            <fieldset class="form-group">
                                <label>Email<span class="required">*</span></label>
                                <input type="email" class="form-control form-control-lg" value="" name="Email"
                                    id="recover-email" placeholder="Email" data-validation="email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                    data-validation-error-msg="Email sai định dạng">
                            </fieldset>
                        </div>
                        <div class="action_bottom text-center">
                            <button class="btn btn-style btn-blues" style="margin-top: 15px;" type="submit"
                                value="Lấy lại mật khẩu">Lấy lại mật khẩu</button>
                        </div>
                        <div class="text-login text-center">
                            <p>Quay lại <a href="./" class="btn-link-style btn-register"
                                    >tại đây.</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="container margin-bottom-30">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="page-login account-box-shadow">
                <div id="recover-password" class="form-signup" style="display:none;">
                    <div class="text-center">
                        <h1 class="title-head"><span>Đặt lại mật khẩu</span></h1>
                    </div>
                    <span class="block text-center">
                        Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.
                    </span>
                    <form accept-charset="utf-8" action="#" id="recover_customer_password" method="post"
                        class="has-validation-callback">
                        <input name="FormType" type="hidden" value="recover_customer_password">
                        <input name="utf8" type="hidden" value="true">
                        <div class="form-signup aaaaaaaa"></div>

                        <div class="form-signup clearfix">
                            <fieldset class="form-group">
                                <label>Email<span class="required">*</span></label>
                                <input type="email" class="form-control form-control-lg" value="" name="Email"
                                    id="recover-email" placeholder="Email" data-validation="email"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                    data-validation-error-msg="Email sai định dạng">
                            </fieldset>
                        </div>
                        <div class="action_bottom text-center">
                            <button class="btn btn-style btn-blues" style="margin-top: 15px;" type="submit"
                                value="Lấy lại mật khẩu">Lấy lại mật khẩu
                            </button>
                        </div>
                        <div class="text-login text-center">
                            <p>
                                Quay lại <a href="javascript:;" class="btn-link-style btn-register"
                                    onclick="hideRecoverPasswordForm();">tại đây.</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection