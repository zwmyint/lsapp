@extends('layouts.app')
@section('content')
<div>
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $item)
            <div class="well">
                <h3><a href="/posts/{{$item->id}}">{{$item->title}}</a></h3>
                <small>Written on {{$item->created_at}}</small>
            </div>
        @endforeach

        {{--$posts->links()--}}
        
    @else
        <p>No Posts Found !</p>
    @endif
</div>
@endsection