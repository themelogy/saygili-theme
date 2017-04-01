@include('partials/header/navigation/user-login', ['active'=>setting('theme::user-login')])

@include('partials/header/navigation/quick-bar-content', ['active'=>setting('theme::quick-bar')])

@if(setting('theme::search-form')==false)
    <li class="c-search-toggler-wrapper">
        <a href="#" class="c-btn-icon c-search-toggler">
            <i class="fa fa-search"></i>
        </a>
    </li>
@endif

@if(setting('theme::shop-cart')==true)
    <li class="c-cart-toggler-wrapper">
        <a href="#" class="c-btn-icon c-cart-toggler">
            <i class="icon-handbag c-cart-icon"></i>
            <span class="c-cart-number c-theme-bg">2</span>
        </a>
    </li>
@endif

@if(setting('theme::user-login')==true)
    <li>
        <a href="javascript:;" data-toggle="modal" data-target="#login-form"
           class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
            <i class="icon-user"></i> Kayıt Ol</a>
    </li>
@endif

@include('partials/header/navigation/quick-bar', ['active'=>setting('theme::quick-bar')])