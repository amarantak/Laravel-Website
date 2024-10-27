{{-- View for single Post --}}
@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>  
    <a href="{{ url('/posts') }}" class="btn btn-default">Go Back</a>   
    <div>
        {!! $post->body !!} <!-- Use with caution, ensure content is sanitized -->
    </div>
    <hr>
    <small>Written on {{ $post->created_at->format('M d, Y') }} by {{$post->user->name}}</small>
    <hr>
    <div class="btn-group" role="group" aria-label="Post Actions" style="left: right;">
        <div>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        </div>
        &nbsp;&nbsp;
        <div class="pl-5">
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => '']) !!}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
        </div>
       
    </div>
@endsection
