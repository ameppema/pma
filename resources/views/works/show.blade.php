@extends('layouts.app')

@section('title')
  {{$work->title}}
@endsection

@section('content')
  <div class="row">
    <div class="col-12">

        <div class="row show__work--container text-center pt-5">
          <div class="show__work--head col-12">
            <h1 class="show__work--title">{{ $work->title }}</h1>
            <p class="show__work--category">{{ $work->category }}</p>
          </div>

          <div class="row show__work--description px-5">
            <p class="show__work--paragraph col-sm-12 col-lg-6">{!! $work->text !!}</p>
            <p class="show__work--paragraph col-sm-12 col-lg-6">{{ $work->text }}</p>
          </div>

          <div class="row show__work--images px-3">
            <img class="show__work--image col-sm-12 img-fluid px-5 py-5" src="/images/works/0001/work__assets/assets_01.jpg">
            <img class="show__work--image col-sm-12 img-fluid px-5 py-5" src="/images/works/0001/work__assets/assets_02.jpg">
            <img class="show__work--image col-sm-12 col-lg-6 img-fluid px-5 mb-5" src="/images/works/0001/work__assets/assets_03.jpg">
            <img class="show__work--image col-sm-12 col-lg-6 img-fluid px-5 mb-5" src="/images/works/0001/work__assets/assets_04.jpg">
            <img class="show__work--image col-sm-12 col-lg-6 img-fluid px-5" src="/images/works/0001/work__assets/assets_05.jpg">
            <img class="show__work--image col-sm-12 col-lg-6 img-fluid px-5" src="/images/works/0001/work__assets/assets_06.jpg">
            <img class="show__work--image col-sm-12 img-fluid px-5 my-5" src="/images/works/0001/work__assets/assets_07.jpg">
          </div>


          <div class="arrows__controls d-flex justify-content-center py-5">
            <a class="arrow__content--lf d-flex justify-content-center" href="/works">
              <div class="arrow__lf--icon mx5"></div>
              <p class="arrow--text mx-2">BACK</p>
            </a>

            <div class="center__content d-flex">
              <p class="center__icon mx-2">|</p>
              <a class="center__text mx-2" href="/works"><p>WORKS</p></a>
              <p class="center__icon mx-2">|</p>
            </div>

            <a class="arrow__content--rg d-flex justify-content-center" href="/works">
              <p class="arrow--text mx-2">NEXT</p>
              <div class="arrow__rg--icon mx5"></div>
            </a>
          </div>
        </div>

    </div>
  </div>
@endsection
