@extends('layouts.app')
@section('content')
<div>
    <h1>Edit Post</h1>
    
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
        
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'body', 'class' => 'form-control','placeholder' =>'Body'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class' =>'btn btn-primary'])}}
        
    {!! Form::close() !!}

</div>

<script>
    ClassicEditor
    .create( document.querySelector( '#body' ) )
    .catch( error => {
    console.error( error );
    } );
</script>

@endsection