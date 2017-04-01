<div class="c-container c-first">
    <div class="c-footer-logo">
        <h3 class="c-font-uppercase c-font-bold c-font-white">
            <img src="{{ Theme::url('img/logos/footer-logo.png') }}" alt="{{ setting('core::site-name-mini') }}" />
        </h3>
        <p class="c-text"></p>
    </div>
    <ul class="c-socials">
        @if(setting('theme::twitter'))<li><a target="_blank" href="{{ setting('theme::twitter') }}"><i class="icon-social-twitter"></i></a></li>@endif
        @if(setting('theme::facebook'))<li><a target="_blank" href="{{ setting('theme::facebook') }}"><i class="icon-social-facebook"></i></a></li>@endif
        @if(setting('theme::instagram'))<li><a target="_blank" href="{{ setting('theme::instagram') }}"><i class="fa fa-instagram"></i></a></li>@endif
        @if(setting('theme::linkedin'))<li><a target="_blank" href="{{ setting('theme::linkedin') }}"><i class="fa fa-linkedin"></i></a></li>@endif
        @if(setting('theme::pinterest'))<li><a target="_blank" href="{{ setting('theme::pinterest') }}"><i class="fa fa-pinterest"></i></a></li>@endif
        @if(setting('theme::youtube'))<li><a target="_blank" href="{{ setting('theme::youtube') }}"><i class="icon-social-youtube"></i></a></li>@endif
        @if(setting('theme::dribble'))<li><a target="_blank" href="{{ setting('theme::dribble') }}"><i class="icon-social-dribbble"></i></a></li>@endif
    </ul>
    <ul class="c-address">
        <li>
            <i class="icon-pointer c-theme-font"></i> <span>{!! setting('theme::address') !!}</span>
        </li>
        <li>
            <i class="icon-call-end c-theme-font"></i> <span>{{ setting('theme::phone') }} - {{ setting('theme::phone') }}</span>
        </li>
        <li>
            <i class="fa fa-fax c-theme-font"></i> <span>{{ setting('theme::fax') }}</span>
        </li>
        <li>
            <i class="icon-envelope c-theme-font"></i> <span>{{ setting('theme::email') }}</span>
        </li>
    </ul>
</div>