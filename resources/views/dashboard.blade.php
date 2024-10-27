@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="panel-body">
                        <a href="/posts/create" class="btn btn-primary mt-4 mb-3">Create Post</a>
                        <h3>Your Blog Posts</h3>
                        @if(count($posts)>0)
                        <table class="table table-striped">                           
                            @foreach($posts as $post)
                            <tr>                              
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a></td>
                                <td>            
                                        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => '']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                    
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <p>You have no Posts to show!</p>
                        @endif
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection
