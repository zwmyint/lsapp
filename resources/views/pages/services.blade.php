@extends('layouts.app')
@section('content')
<div>
    <h1>{{$title}}</h1>
    <p>This is the services page.</p>

    @if(count($services) > 0)
        <ul class="list-group">
        @foreach ($services as $item)
            <li class="list-group-item">{{$item}}</li>
        @endforeach
        </ul>
    @endif

</div>
@endsection