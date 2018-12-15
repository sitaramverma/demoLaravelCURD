@extends('layouts.app')

@section('content')

<p> Welcome about page...</p>

@if(count($postdtls) > 1)

    @foreach ($postdtls as $postdtl)
        <div class="well">
            <p>{{$postdtl->id}}</p>
            <p>{{$postdtl->title}}</p>
            <p>{{$postdtl->created_at}}</p>
            <p>{{$postdtl->updated_at}}</p>
        </div>
    @endforeach
   
@else
    <p>No Details Found</p>
@endif

@endsection