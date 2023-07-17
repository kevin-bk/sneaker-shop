@extends('layout.ant_furniture.layouts.app')
@section('content')
<section class="bread-crumb margin-bottom-30">
    <div class="container">
        <div class="row">
            <div class="main-breadcrumb">
                <ol class="breadcrumb mt15">
                    <li>
                        <a href="{{ base_url()}}">{{ trans('common.home') }} ></a>
                    </li>
                    <li class="active hidden-xs">{{ $page->title }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<div class="container contact margin-bottom-20">
    <div class="row">
        <div class="col-md-4">
            <div class="widget-item info-contact in-fo-page-content">
                <h1 class="title-head">Thông tin liên hệ</h1>
                <!-- End .widget-title -->
                <ul class="widget-menu contact-info-page">

                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $config["company_address"] ?? '' }}</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:0123456789">{{ $config["company_phone"] ?? '' }}</a></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i> <a
                            href="mailto:{{ $config["company_email"] ?? '' }}">{{ $config["company_email"] ?? '' }}</a></li>

                </ul>
                <!-- End .widget-menu -->
            </div>
            <div class="box-maps margin-top-10 margin-bottom-10">

                
                {!! $config["company_map"] ?? ''!!} 
               
            </div>
        </div>
        <div class="col-md-8">
            <div class="page-login">
                <div id="login">
                    <h3 class="title-head text-center">Gửi thông tin</h3>
                    <span class="text-center block"></span>
                    <span class="text-center margin-bottom-10 block">Bạn hãy điền nội dung tin nhắn vào form dưới đây và
                        gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.
                    </span>

                    @include('layout.ant_furniture.page.generate_form', ['form' => $page->form])

                </div>
            </div>
        </div>
    </div>
</div>
@endsection