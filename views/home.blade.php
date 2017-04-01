@extends('layouts.master')

@section('logo')
    <img src="{{ Theme::url('img/logos/logo2.png') }}" alt="{{ setting('core::site-name-mini') }}" class="c-desktop-logo">
@endsection

@section('content')
    <div class="c-layout-page">

        @include('partials/pages/contents/slider', ['select'=>4])

        @include('partials/pages/home/slider-bottom')

        @include('partials/pages/contents/feature', ['select'=>false])

        @include('partials/pages/contents/portfolio', ['select'=>false])

        @include('partials/pages/contents/service', ['select'=>false])

        @include('partials/pages/contents/counter', ['select'=>false])

        @include('partials/pages/contents/bar', ['select'=>false])

        @include('partials/pages/contents/blog/last-posts', ['show' => false])

        @include('partials/pages/contents/item', ['select'=>false])

        @include('partials/pages/contents/testimonial', ['select'=>false])

        @include('partials/pages/contents/team', ['select'=>false])

        @include('partials/pages/contents/shops/product-slider')

        @include('partials/pages/contents/client', ['select'=>false])

    </div>

@endsection