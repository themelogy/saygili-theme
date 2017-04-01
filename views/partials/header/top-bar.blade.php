<div class="c-topbar c-topbar-blue2 c-solid-bg">
    <div class="container">
        <!-- BEGIN: INLINE NAV -->
        <nav class="c-top-menu c-pull-left">
            <ul class="c-icons c-theme-ul">
                @if(setting('theme::twitter'))<li><a target="_blank" href="{{ setting('theme::twitter') }}"><i class="icon-social-twitter"></i></a></li>@endif
                @if(setting('theme::facebook'))<li><a target="_blank" href="{{ setting('theme::facebook') }}"><i class="icon-social-facebook"></i></a></li>@endif
                @if(setting('theme::instagram'))<li><a target="_blank" href="{{ setting('theme::instagram') }}"><i class="fa fa-instagram"></i></a></li>@endif
                @if(setting('theme::linkedin'))<li><a target="_blank" href="{{ setting('theme::linkedin') }}"><i class="fa fa-linkedin"></i></a></li>@endif
                @if(setting('theme::pinterest'))<li><a target="_blank" href="{{ setting('theme::pinterest') }}"><i class="fa fa-pinterest"></i></a></li>@endif
                @if(setting('theme::youtube'))<li><a target="_blank" href="{{ setting('theme::youtube') }}"><i class="icon-social-youtube"></i></a></li>@endif
                @if(setting('theme::dribble'))<li><a target="_blank" href="{{ setting('theme::dribble') }}"><i class="icon-social-dribbble"></i></a></li>@endif
                @if(setting('theme::phone'))<li class="hide"><span>T: {{ setting('theme::phone') }}</span> </li>@endif
            </ul>
        </nav>
        <!-- END: INLINE NAV -->
        <!-- BEGIN: INLINE NAV -->
        <nav class="c-top-menu c-pull-right">

            {!! Menu::render('topbar', \Modules\Theme\Presenters\Sonax\TopMenuPresenter::class) !!}

            @if($currentUser)
            <ul class="c-links c-theme-ul">
                <li>{!! Html::link(route('dashboard.index'), trans('dashboard::dashboard.name'), ['target'=>'_blank'])  !!}</li>
            </ul>
            @endif

            <ul class="c-ext c-theme-ul">

                <li class="c-lang dropdown c-last">
                    <a href="#">{{ LaravelLocalization::getCurrentLocale() }}</a>
                    <ul class="dropdown-menu pull-right" role="menu">
                        @foreach (LaravelLocalization::getSupportedLocales() as $locale => $language)
                        <li class="@if(App::getLocale()==$locale) active @endif"><a href="{{ LaravelLocalization::getLocalizedURL($locale) }}">{{ $language['native'] }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="c-search hide">
                    <!-- BEGIN: QUICK SEARCH -->
                    <form action="#">
                        <input type="text" name="query" placeholder="search..." value="" class="form-control" autocomplete="off">
                        <i class="fa fa-search"></i>
                    </form>
                    <!-- END: QUICK SEARCH -->
                </li>
            </ul>
        </nav>
        <!-- END: INLINE NAV -->
    </div>
</div>