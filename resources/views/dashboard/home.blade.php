@extends('layouts.dashboard')

@section('title', 'Seller Home')


@section('content')
@push('styles')
        <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
@endpush

  <!-- Start Client -->
  <div class="container pt120">
    <div class="box inner flc">
      <div class="links">
        <a href="{{route('post.create')}}">
          add Post
          <img src="{{asset('assets/media/icons/addLink.png')}}" alt="">
        </a>
        <a href="{{route('post.index')}}">
          All posts
          <img src="{{asset('assets/media/icons/editLink.png')}}" alt="">
        </a>
      </div>
    </div>
  </div>
  <!-- End Client -->



@endsection
