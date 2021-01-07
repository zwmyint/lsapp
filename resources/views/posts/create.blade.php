@extends('layouts.app')
@section('content')
<div>
    <h1>Create Post</h1>
    
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
        
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'body', 'class' => 'form-control','placeholder' =>'Body'])}}
        </div>
    
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