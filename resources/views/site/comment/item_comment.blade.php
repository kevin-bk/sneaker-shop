<!-- load comment -->

<!-- @if(!empty($post_id))
@php
$comments = \App\Models\Comment::query()->where(['status' => \App\Models\Comment::STATUS_APPROVED, 'post_id'=>
$post_id])->orderBy('id', 'desc')->get()->take(100)
@endphp
@if($comments->count() > 0)
<h3>{{ trans('common.comment') }}</h3>
<div class="bs-example" data-example-id="default-media">

    @foreach($comments as $comment)
    <div class="media" style="margin-bottom: 10px;">
        <div class="media-left" style="margin-right: 15px">
            <a href="#">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64"
                    src="{{ asset('layout/default/img/gravatar.jpg') }}" data-holder-rendered="true"
                    style="width: 64px; height: 64px;">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">{{ $comment->author }}</h4>
            {!!nl2br(str_replace(" ", " &nbsp;", $comment->content))!!}
        </div>
    </div>
    <hr />
    @endforeach
</div>
@endif
@endif -->

@if(!empty($post_id))
    @if($comments->count() > 0)
    <h3>{{ trans('common.comment') }}</h3>
    <div class="bs-example" data-example-id="default-media">

        @foreach($comments as $comment)

        <div class="d-flex justify-content-center py-2">
            <div class="second py-2 px-2"> <span class="text1">
                    <img src="https://i.pravatar.cc/24?id{{ $comment->author }}" alt="Image">
                    <span class="text2">{{ $comment->author }}</span>
                    </br>

                </span>
                <div class="d-flex justify-content-between py-1 pt-2">
                    <div class="cmt_content">

                        {!!nl2br(str_replace(" ", " &nbsp;", $comment->content))!!}

                    </div>

                    <div class="reply px-4">
                        <time class="time_cmt"> {{ $comment->created_at->format('d/m/Y') }}</time>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
@endif
