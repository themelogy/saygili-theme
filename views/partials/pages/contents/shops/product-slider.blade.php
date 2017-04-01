<!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
<div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
    <div class="container">
        <div class="c-content-title-4">
            <h3 class="c-font-uppercase c-center c-font-bold c-line-strike">
                <span class="c-bg-white">{{ trans('store::products.title.products') }}</span>
            </h3>
        </div>
        <div class="row">
            <div data-slider="owl" data-items="4" data-auto-play="8000">
                <div class="owl-carousel owl-theme c-theme owl-small-space">
                    @foreach(app(\Modules\Store\Repositories\ProductRepository::class)->latest(setting('store::latest-products-amount')) as $product)
                    <div class="item">
                        <div class="c-content-product-2 c-bg-white c-border">
                            <div class="c-content-overlay">
                                <div class="c-overlay-wrapper">
                                    <div class="c-overlay-content">
                                        <a href="{{ $product->present()->url }}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">{{ trans('store::products.title.review') }}</a>
                                    </div>
                                </div>

                                <div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url({{ $product->present()->firstImage(276, 270, 'fit', 80) }});"></div>
                            </div>
                            <div class="c-info">
                                <p class="c-title c-font-14 c-font-slim">{{ $product->title }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/SHOPS/SHOP-2-2 -->