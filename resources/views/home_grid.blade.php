@extends('layouts.app')

@section('title')
  Home
@endsection

@section('content')
      <div class="work__container">
        @foreach($works as $work)
          <div class="work__item">
              <h3 class="work__title">{{ $work->title }}</h3>
              <img class="work__image" src="{{ $work->image }}">
              <p class="work__category">{{ $work->category }}</p>
              <p class="work__description">{{ $work->text }}</p>
              <a class="work__link" href="{{ $work->link }}">View</a>
          </div>
        @endforeach
      </div>
@endsection
