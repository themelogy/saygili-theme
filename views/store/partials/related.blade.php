@if($product->related()->count()>0)
    <div class="row">
        <div class="c-content-title-1 wow animate fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
            <h3 class="c-font-uppercase c-center c-font-bold">{{ trans('store::products.title.other products') }}</h3>
            <div class="c-line-center"></div>
        </div>
        @foreach($product->related()->get() as $product)
            @if($product->categories()->exists())
                <div class="col-md-3 col-sm-4 c-margin-b-20">
                    <div class="c-content-product-2 c-bg-white c-border">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="{{ $product->url }}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{ trans('store::stores.title.review') }}</a>
                                </div>
                            </div>
                            @if($file = $product->present()->firstImage(null, 230, 'resize', 80))
                                <div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{ $file }});"></div>
                            @endif
                        </div>
                        <div class="c-info">
                            <p class="c-title c-font-16 c-font-slim"><a href="{{ $product->url }}">{{ $product->title }}</a></p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endif