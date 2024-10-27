@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>  
    <a href="{{ url('/posts') }}" class="btn btn-default">Go Back</a> <!-- Fixed class name and used url helper -->
    <div>
        {!! $post->body !!} <!-- Use with caution, ensure content is sanitized -->
    </div>
    <hr>
    <small>Written on {{ $post->created_at->format('M d, Y') }}</small> <!-- Formatted date for better readability -->
@endsection
