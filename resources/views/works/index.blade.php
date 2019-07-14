@extends('layouts.app')

@section('title')
  Works
@endsection

@section('content')
  <div class="index__work--container">
    @foreach($works as $work)
      <div class="index__work--item">
          <h3 class="index__work--title">{{ $work->title }}</h3>
          <img class="index__work--image" src="{{ $work->image }}">

          <a class="index__work--link__container" href="work/{{ $work->id }}">
            <p class="index__work--category">{{ $work->category }}</p>
            <p class="index__work--description">{{ str_limit($work->text, 70) }} &raquo;</p>
            <p class="index__work--link">View</p>
          </a>

          <div class="index__work--label">
            <img src="/images/assets/label_new.png" alt="label_new">
          </div>
      </div>
    @endforeach
  </div>
@endsection
