@extends('layout.ant_furniture.layouts.app')
@section('content')
<section class="bread-crumb margin-bottom-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb">
                    <li class="home" itemprop="itemListElement">
                        <a itemprop="item" href="/" title="Trang chủ">
                            <span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1" />
                        </a>
                        <span><i class="fa fa-angle-right"></i></span>
                    </li>

                    <li itemprop="itemListElement">
                        <a itemprop="item" href="{{$post->link}}" title="{{$title}}">
                            <span itemprop="name">{{$title}}</span>
                            <meta itemprop="position" content="2" />
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container article-wraper">
    <div class="row">
        <section class="right-content col-md-9 col-md-push-3">
            <article class="article-main" itemscope>
                <div class="hidden" itemprop="publisher" itemscope>
                    <div>
                        <img src="{{ asset('layout/ant_furniture/img/logo4b76.png') }}" alt="Ant Furniture" />

                    </div>
                    <meta itemprop="name" content="{{$post->title}}">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-head" style="margin-top: 20px;
                                                    font-size: 25px;
                                                    font-weight: bold;">
                            {{$post->title}}
                        </h1>
                        <div class="postby">
                            <span>{{ $post->created_at->format('d/m/Y H:s') }}</span>
                        </div>
                        <div class="blog_related margin-bottom-10">
                            <article class="blog_entry clearfix">
                                <h3 class="blog_entry-title">
                                    <a class="line-clampss" rel="bookmark" href="{{$post->link}}"
                                        title="{{$post->title}}">
                                        <i class="ion ion-md-arrow-dropright"></i>
                                        {{$post->summary}}
                                    </a>
                                </h3>
                            </article>
                        </div>
                        <div class="article-details">
                            <div class="article-content">
                                <div class="rte">
                                    <div class="caption" id="fancy-image-view">
                                        {!!$post->detail!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                    @include('site.comment.generate_form',
                    ['type' => \App\Models\Comment::TYPE_POST, 'post_id' => $post->id])
                    

                    
                </div>
            </article>
        </section>

        <aside class="left left-content col-md-3 col-md-pull-9">
            <aside class="aside-blog-item margin-bottom-15">
                <a href="#">
                    <img src="{{ asset('layout/ant_furniture/img/blogs_banner.png') }}" alt="Banner QC"
                        class="img-responsive center-block" />
                </a>
            </aside>
            

            @include('layout.ant_furniture.post.element.manysee')
            @include('layout.ant_furniture.post.element.promotion')


        </aside>

    </div>
</div>
@endsection