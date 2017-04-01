@extends('layouts.master')

@section('content')
    <div class="c-layout-page">

        <div class="c-layout-breadcrumbs-1 c-raindrops c-fonts-uppercase c-fonts-bold">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-white c-font-sbold">{{ $page->title }}</h3>
                    <h4 class="c-font-thin c-font-white c-opacity-07"> {{ $page->extension()->sub_title }}</h4>
                </div>

                {!! Breadcrumbs::renderIfExists('page') !!}

            </div>
        </div>

        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {!! $page->body !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
