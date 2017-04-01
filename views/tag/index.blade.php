@extends('layouts.master')

@section('content')
    <div class="c-layout-page">

        <div class="c-layout-breadcrumbs-1 c-raindrops c-fonts-uppercase c-fonts-bold">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-white c-font-sbold">{{ trans('tag::tags.tag').' : '.ucfirst($tag->name) }}</h3>
                </div>

                {!! Breadcrumbs::render('page.tag') !!}

            </div>
        </div>

        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($pages as $page)
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>{{ $page->title }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
