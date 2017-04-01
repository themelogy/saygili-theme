<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    @include('partials/header/top-bar', ['active' => true])
    <div class="c-navbar">
        <div class="container">

            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">

                <div class="c-brand c-pull-left">
                    <a href="{{ url(locale()) }}" class="c-logo">
                        @if(View::hasSection('logo'))
                            @yield('logo')
                        @else
                            <img src="{{ Theme::url('img/logos/logo2.png') }}" alt="{{ setting('core::site-name-mini') }}" class="c-desktop-logo">
                        @endif
                        <img src="{{ Theme::url('img/logos/logo2-fixed.png') }}" alt="{{ setting('core::site-name-mini') }}" class="c-desktop-logo-inverse">
                        <img src="{{ Theme::url('img/logos/logo2-fixed.png') }}" alt="{{ setting('core::site-name-mini') }}" class="c-mobile-logo"> </a>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    @if(setting('theme::search-form')==true)
                    <button class="c-search-toggler" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    @endif
                    @if(setting('theme::shop-cart')==true)
                    <button class="c-cart-toggler" type="button">
                        <i class="icon-handbag"></i>
                        <span class="c-cart-number c-theme-bg">2</span>
                    </button>
                    @endif
                </div>
                <!-- END: BRAND -->

                @include('partials/header/navigation/search-form', ['active' => true])

                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                    {!! Menu::get('header', \Modules\Theme\Presenters\Saygili\HeaderMenuPresenter::class) !!}
                </nav>

            </div>

            @include('partials/header/navigation/shop-cart', ['active'=>setting('theme::shop-cart')])

        </div>
    </div>
</header>