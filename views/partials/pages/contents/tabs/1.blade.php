<div class="c-content-box c-size-md c-no-bottom-padding c-overflow-hide">
    <div class="c-container">
        <div class="row">
            <div class="col-md-12">
                <div class="c-content-title-1">
                    <h3 class="c-font-34 c-font-center c-font-bold c-font-uppercase c-margin-b-30"> JANGO'S Main Features </h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="c-content-tab-2 c-theme c-opt-1">
                    @if($page = Page::findBySlug('uygulama-paketleri'))
                    <ul class="nav c-tab-icon-stack c-font-sbold c-font-uppercase">
                        @foreach($page->children()->get() as $child)
                        <li @if($page->children()->first()->slug == $child->slug)class="active"@endif>
                            <a href="#c-tab2-opt1-1" data-toggle="tab">
                                <span class="c-content-line-icon c-icon-25"></span>
                                <span class="c-title">{{ $child->title }}</span>
                            </a>
                            <div class="c-arrow"></div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="c-tab-content">
                        <div class="c-bg-img-center1" style="background-image: url({{ Theme::url('img/content/backgrounds/bg-62.jpg') }})">
                            <div class="container">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="c-tab2-opt1-1">
                                        <div class="c-tab-pane">
                                            <div class="c-content-blog-post-card-1-slider" data-slider="owl" data-items="3" data-auto-play="8000">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="item">
                                                        <img class="img-responsive" src="{{ Theme::url('img/content/stock2/3.jpg') }}" alt="" />
                                                        <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">Modern Design Trends</h4>
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="{{ Theme::url('img/content/stock2/3.jpg') }}" alt="" />
                                                        <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">Modern Design Trends</h4>
                                                    </div>
                                                    <div class="item">
                                                        <img class="img-responsive" src="{{ Theme::url('img/content/stock2/3.jpg') }}" alt="" />
                                                        <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">Modern Design Trends</h4>
                                                    </div>

                                                    <div class="item">
                                                        <img class="img-responsive" src="{{ Theme::url('img/content/stock2/3.jpg') }}" alt="" />
                                                        <h4 class="c-font-30 c-font-thin c-font-uppercase c-font-bold">Modern Design Trends</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>