@extends('layouts.app')
@section('content')
<div>
    <div>&nbsp;</div>
    <a href="/posts" class="btn btn-primary">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>&nbsp;</div>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ]) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close()!!}
    
</div>
@endsection