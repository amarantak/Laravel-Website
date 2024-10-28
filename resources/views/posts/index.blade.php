{{-- View of Page Blog where all the posts are listed --}}
@extends('layouts.app');

@section('content')
    <h1>Posts</h1>
    @if(count($posts)> 0)
      @foreach($posts as $post)
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img class="card-img-top img-fluid" src="/storage/cover_images/{{$post->cover_image}}" alt="Card Image" style="height: 200px; object-fit: cover;">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}
                    </small>
                </div>
            </div>   
        </div>       
    </div>
    <br> 
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
        
    @endif
@endsection