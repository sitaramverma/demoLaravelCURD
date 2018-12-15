@extends('layouts.app')

@section('content')


@if(count($posts) > 1)
    @foreach ($posts as $post)
            <div class="col-sm-12">
                <h1> Welcome To Posts Page...</h1>
                <div class="well">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3> 
                    <h2>{{$post->body}}</h2>
                    <h2>{{$post->created_at}}</h2>
                </div>
            </div>       
    @endforeach
@else 
    <p>No Posts Found</p>
@endif

@endsection