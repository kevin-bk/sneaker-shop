@extends('layout.ant_furniture.layouts.app')
@section('content')
    <article id="content" class="container">
        <div class="main-breadcrumb">
            <ol class="breadcrumb mt15">
                <li>
                    <a href="{{ base_url()}}">{{ trans('common.home') }} ></a>
                </li>
                <li class="active hidden-xs">{{ $page->title }}</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <div class="detail-view">
                    <h1 class="article-heading">{{ $page->title }}</h1>
                </div>
                <div class="page-content">
                    {!! $page->detail !!}

                    @if(!empty($page->template_id))
                        @include('layout.ant_furniture.page.contact')
                    @endif
                </div>
            </div>

        </div>
    </article>
@endsection
