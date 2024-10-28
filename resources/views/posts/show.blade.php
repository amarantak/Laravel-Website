{{-- View for single Post --}}
@extends('layouts.app')

@section('content')   
    <a href="{{ url('/posts') }}" class="btn btn-default">Go Back</a>
    <br><br>
    <h1>{{ $post->title }}</h1>
    <img class="card-img-top img-fluid rounded" src="/storage/cover_images/{{$post->cover_image}}" alt="Card Image" style="height: 300px; object-fit: cover;">
    <div>
        {!! $post->body !!} <!-- Use with caution, ensure content is sanitized -->
    </div>
    <hr>
    <small>Written on {{ $post->created_at->format('M d, Y') }} by {{$post->user->name}}</small>
    <hr>
    {{-- Show buttons only if auth user --}}
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
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
        @endif
    @endif
    </div>
@endsection
