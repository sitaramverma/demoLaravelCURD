@extends('layouts.app')

@section('content')

{!! Form::open(['action'=>['PostController@update',$post->id],'method'=>'POST']) !!}
    <div class="col-sm-10">
            <h1>Edit Post</h1>
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('title','Body')}}
                {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>  
    </div>
{!! Form::close() !!}

@endsection