@extends('layouts.main')
@section('title')

@endsection


@section('stylesheets')

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Archive</h1>
        </div>
    </div>

    <div class="row">
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{route('blog.single', $post->slug)}}">{{$post->title}}
                    </a>
                    {{$post->created_at}}
                </li>
            @endforeach
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
