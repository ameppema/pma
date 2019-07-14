@extends('layouts.app')

@section('title')
  Home
@endsection

@section('content')
      <div class="home__work--container">
        @foreach($works as $work)
          <div class="home__work--item">
              <h3 class="home__work--title">{{ $work->title }}</h3>
              <img class="home__work--image" src="{{ $work->image }}">
              <a class="home__work--link" href="work/{{ $work->id }}">
                <p class="home__work--category">{{ $work->category }}</p>
                <p class="home__work--description">{{ str_limit($work->text, 50) }} &raquo;</p>
                <p class="home__work--link">View</p>
              </a>
          </div>
        @endforeach
      </div>
@endsection
