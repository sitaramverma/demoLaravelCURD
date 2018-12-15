@extends('layouts.app')

@section('content')

<h2>Create Post</h2>

{!! Form::open(['action'=>'PostController@store','method'=>'POST']) !!}
    <div class="col-sm-12">
        <div class="col-sm-12">
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('title','Body')}}
                {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
            </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>
    <div>
{!! Form::close() !!}

@endsection