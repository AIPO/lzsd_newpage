@extends('layouts.main')
@section('title','All Posts')

@section('stylesheets')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{route('posts.create')}}" class="btn btn-lg btn-block">Create new post</a>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created At</th>
                <th>Actions</th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th>{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{substr($post->body,0,20)}}</td>
                        <td>{{$post->createdAt}}</td>
                        <td><a href="">View</a> <a href="">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                @if($posts->total()>0)
                    {!! $posts->currentPage(); !!} of {!! $posts->total() !!}
                @else
                    <p>No records for posts</p>
                @endif
            </div>
        </div>
    </div>


@endsection
