@if($page = Page::findBySlug('uygulama-paketleri1'))
    <div class="c-content-box c-size-md slide-bottom">
        <div class="container">
            <div class="col-md-3">
                <div class="title">
                    <h2>
                        {{ $page->title }}
                    </h2>
                </div>
            </div>
            <div class="col-md-9">
                <div class="widget-slider">
                    @foreach($page->children()->get() as $page)
                    <div>
                        <article class="entry-item">
                            <div class="entry-content">
                                <header>
                                    <h4><span class="theme-txt-color">SONAX</span> {!! $page->title !!}</h4>
                                    <p>{{ $page->extension()->sub_title }}</p>
                                </header>
                                <footer>
                                    <h6><a href="#">{{ trans('global.review') }}</a></h6>
                                    <span class="readmore"><a href="{!! route('page', [$page->uri]) !!}"></a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif