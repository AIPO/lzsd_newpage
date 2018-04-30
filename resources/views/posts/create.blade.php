@extends('layouts.main')
@section('title','Create new post')
@section('stylesheets')
    {!! Html::style('css/app.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Create new Post</h1>
            <hr>
            {!! Form::open(array('route'=>'posts.store'))!!}
            {!! Form::label('title', 'Title: ') !!}
            {!! Form::text('title', null, array('class' => 'form-control', 'required')) !!}
            {!! Form::label('slug', 'Slug: ') !!}
            {!! Form::text('slug', null, array('class' => 'form-control', 'required')) !!}
            {!! Form::label('body', 'Post body: ') !!}
            {!! Form::textarea('body', null, array('class'=> 'form-control', 'required')) !!}
            {!! Form::submit('Create Post', array('class' =>'btn btn-success btn-lg')) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection