@extends('layout.ant_furniture.layouts.app')
@section('content')
    <section class="bread-crumb margin-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li class="home" itemprop="itemListElement">
                            <a itemprop="item" href="{{ base_url() }}" title="Trang chủ">
                                <span itemprop="name">Trang chủ</span>
                                <meta itemprop="position" content="1">
                            </a>
                            <span><i class="fa fa-angle-right"></i></span>
                        </li>

                        <li itemprop="itemListElement">
                            <strong itemprop="name">{{ $postCategory->title ?? 'Tất cả tin tức' }}</strong>
                            <meta itemprop="position" content="2">
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <meta itemprop="name" content="{{$title}}">
        <meta itemprop="description" content="Chủ đề không có mô tả">
        <div class="row">
            <section class="right-content col-md-9 list-blog-page">
                <div class="box-heading hidden">
                    <h1 class="title-head">{{$title}}</h1>
                </div>

                <div class="news-list-main">
                    <div class="newslist latest">
                        <div class="row">
                            @include('layout.ant_furniture.post.p_news.news_big')
                            @include('layout.ant_furniture.post.p_news.news_s_r')
                        </div>
                    </div>
                </div>

                <section class="list-blogs blog-main margin-top-30">
                    <div class="row">
                        @include('layout.ant_furniture.post.p_news.news_center')
                        {{$items ->links()}}
                    </div>
                </section>

            </section>

            <aside class="left left-content col-md-3">
                <aside class="aside-blog-item margin-bottom-15">
                    <a href="#">
                        <img src="{{asset('layout/ant_furniture/img/blogs_banner.png')}}"
                             alt="Ant Furniture" class="img-responsive center-block">
                    </a>
                </aside>

                @include('layout.ant_furniture.post.element.manysee')
                @include('layout.ant_furniture.post.element.promotion')
            </aside>
        </div>
    </div>
@endsection