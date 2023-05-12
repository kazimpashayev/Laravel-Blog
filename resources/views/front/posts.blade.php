@extends('front.layouts.master')
@section('title' , 'Posts')
@section('image', 'front/img/home-bg.jpg')
@section('description', 'A Blog Theme by Start Bootstrap')
@section('content')
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{ route('post') }}">
                    <h2 class="post-title">{{ $post->name }}</h2>
                    <h3 class="post-subtitle">{{ $post->content }}</h3>
                </a> 
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on {{\Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->

            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
        @endforeach
        <div class="col-xl-7 ">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
        
