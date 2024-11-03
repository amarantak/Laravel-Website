@extends('layouts.app')
@section('content')
<div class="container-fluid w-100 d-flex justify-content-center align-items-start">
    <div class="row w-auto align-items-stretch w-100">
      <!-- Left side (Large image) -->      
        <div class="col-lg-8 col-md-7 d-flex flex-column">
                    {{-- Header --}}
              <div class="d-flex flex-column mb-auto align-items-start pb-4">
                <h1 class="fst-italic mb-auto">Picks of the week</h1>
                <h4>Discover awesome travel stories and share yours to the world</h4>
                
                  <a href="/posts" class="text-dark text-decoration-none">
                 See all posts&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-long"></i></a>
              </div>
              
                                
             {{-- Main Pic --}}
            <div class="card h-100
              @if($post3 && $post3->cover_image)
                rounded"style="background-image: url('{{ asset('storage/cover_images/' . $post3->cover_image) }}'); 
                  background-size: cover; 
                  background-position: center; 
                  background-repeat: no-repeat;">                            
              @endif

              <a href="/posts/{{$post3->id}}" class="card-img-overlay overlay-transition d-flex align-items-end bg-white bg-opacity-50 rounded-bottom h-25 mt-auto text-dark fw-bold">
                <div class="w-100">
                    <h5 class="card-title">{{ $post3->title ?? 'Small Image 3' }}</h5>
                    
                      <p class="card-text">
                        See more&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-long"></i></p>                              
                </div>
              </a>
            </div> 
        </div>        
      

      <!-- Right side (Stacked small images) -->
      <div class="col-lg-4 col-md-5 d-flex flex-column justify-content-end">
        <div class="card mb-4 position-relative overflow-hidden">      
          @if($post2 && $post2->cover_image)
            <img src="{{ asset('storage/cover_images/' . $post2->cover_image) }}" alt="{{ $post2->title ?? 'Small Image 2' }}" class="card-image img-fluid rounded-3">
          @else
            <img src="/storage/cover_images/noimage.jpg" alt="No Image Available" class="card-image img-fluid rounded-3"> <!-- Fallback image -->
          @endif
          <a href="/posts/{{$post2->id}}" class="card-img-overlay overlay-transition d-flex align-items-end bg-white bg-opacity-50 rounded-bottom h-25 mt-auto text-dark fw-bold">
            <div class="w-100">
                <h5 class="card-title">{{ $post2->title ?? 'Small Image 2' }}</h5>
                
                  <p class="card-text">
                    See more&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-long"></i></p>                              
            </div>
          </a>     
        </div>
        {{-- Card 2 --}}
        <div class="card position-relative overflow-hidden">      
          @if($post1 && $post1->cover_image)
            <img src="{{ asset('storage/cover_images/' . $post1->cover_image) }}" alt="{{ $post1->title ?? 'Small Image 1' }}" class="card-image img-fluid rounded-3">
          @else
            <img src="/storage/cover_images/noimage.jpg" alt="No Image Available" class="card-image img-fluid rounded-3"> <!-- Fallback image -->
          @endif
          <a href="/posts/{{$post1->id}}" class="card-img-overlay overlay-transition d-flex align-items-end bg-white bg-opacity-50 rounded-bottom h-25 mt-auto text-dark fw-bold">
            <div class="w-100">
                <h5 class="card-title">{{ $post1->title ?? 'Small Image 1' }}</h5>
                
                  <p class="card-text">
                    See more&nbsp;&nbsp;<i class="fa-solid fa-arrow-right-long"></i></p>                              
            </div>
          </a>     
        </div>         
      </div>
      {{-- Enf of Column --}}
    </div>
  </div>
@endsection