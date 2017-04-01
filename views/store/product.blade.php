@extends('layouts.master')

@section('content')

    <div class="c-layout-page">

        <div class="c-layout-breadcrumbs-1 c-raindrops c-fonts-uppercase c-fonts-bold">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-white c-font-sbold">{{ $product->title }}</h3>
                    <h4 class="c-font-thin c-font-red c-opacity-07"></h4>
                </div>
                {!! Breadcrumbs::renderIfExists('store.product') !!}
            </div>
        </div>

        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
            <div class="container">
                <div class="c-shop-product-details-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-product-gallery">
                                <div class="c-product-gallery-content" style="height: auto;">
                                    @foreach($product->present()->images(900, 700, 'resize', 80) as $image)
                                        <div class="c-zoom">
                                            <img src="{{ $image }}" />
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row c-product-gallery-thumbnail">
                                    @foreach($product->present()->images(150, 150, 'fit', 80) as $image)
                                        <div class="col-xs-3 c-product-thumb">
                                            <img src="{{ $image }}">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="c-product-meta">
                                <div class="c-content-title-1">
                                    <h3 class="c-font-uppercase c-font-bold">{{ $product->title }}</h3>
                                    <div class="c-line-left"></div>
                                </div>

                                @if($product->isNew)
                                <div class="c-product-badge" style="position: absolute; right: 10px; top:-50px;">
                                    <div class="c-product-new">
                                        {!! trans('store::products.title.new') !!}
                                    </div>
                                </div>
                                @endif

                            </div>

                            <div class="c-product-short-desc">
                                {!! $product->description !!}
                            </div>

                            @if($product->present()->file)
                            <div class="row c-product-variant">
                                <a class="btn btn-default c-btn-uppercase c-btn-bold" href="{{ url($product->present()->file) }}">
                                    <i class="fa fa-download"></i>
                                    {{ trans('store::products.title.download catalog') }}
                                </a>
                            </div>
                            @endif

                        </div>
                    </div>
                    @if(view()->exists('partials.related'))
                        @includeIf('store.partials.related')
                    @else
                        @includeIf('store::partials.related')
                    @endif

                </div>
            </div>
        </div>

    </div>

@endsection

@push('scripts')
{!! Theme::script('js/plugins/zoom-master/jquery.zoom.min.js') !!}
@endpush