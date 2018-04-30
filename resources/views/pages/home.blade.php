@extends('layouts.main')
@section('title','- welcome')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog</h1>
                <p>Thank you so much for visiting. This is my test website. Please read our popular posts.</p>
                <p><a href="" class="bth btn-primary btn-lg" role="button">Popular Posts</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{$post->title}}</h3>
                    <p>
                        {{substr($post->body, 0, 50)}}{{strlen($post->body)>200? "...":""}}
                    </p>
                    <a href="{{route('blog.single',$post->slug)}}" class="btn btn-primary">Read more</a>
                    <hr>
                </div>
            @endforeach
        </div>

        <div class="col-md-4">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection