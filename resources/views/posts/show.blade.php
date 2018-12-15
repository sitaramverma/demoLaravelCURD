@extends('layouts.app')

@section('content')

<div class="col-sm-12">
        <a href="/posts" class="btn btn-default" style="background-color:#409a30">Go Back</a>
        <h1 style="color:#4a7dcd">{{$post->title}}</h1>
        <h3>{{$post->body}}</h3>
        <p>{{$post->created_at}}</p>
        <p>{{$post->updated_at}}</p> 
        {!!Form::open(['action' => ['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-left'])!!}
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="background-color:#409a30">Edit</a>
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close() !!}
</div>
@endsection