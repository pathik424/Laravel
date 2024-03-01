@extends('frontend.app')


@section('frontend')


@foreach ($single as $id => $posts)
<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="/{{ $posts->image }}" alt="" height="500px"
                                        width="100px">
                                </div>
                                <div class="down-content">
                                    <span>{{ $posts->name }}</span>
                                    <a href="post-details.html">
                                        <h4>Best Template Website for HTML CSS</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">{{ $posts->postedby }}</a></li>
                                        <li><a href="#">{{ $posts->created_at }}</a></li>
                                        <li><a href="#">12 Comments</a></li>
                                    </ul>
                                    <p>{{ $posts->body }}</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li><a href="#">{{ $posts->description }}</a>,</li>
                                                    {{-- <li><a href="#">Nature</a></li> --}}
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#"> Twitter</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endforeach

@endsection
