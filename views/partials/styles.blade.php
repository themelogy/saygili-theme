<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
{!! Theme::style('css/plugins/socicon/socicon.css') !!}
{!! Theme::style('css/plugins/bootstrap-social/bootstrap-social.css') !!}
{!! Theme::style('css/plugins/font-awesome/css/font-awesome.min.css') !!}
{!! Theme::style('css/plugins/simple-line-icons/simple-line-icons.min.css') !!}
{!! Theme::style('css/plugins/animate/animate.min.css') !!}
{!! Theme::style('css/plugins/semantic-ui/semantic.css') !!}
@if(App::environment()=='production')
<link href="{{ elixir('css/bootstrap.css', 'themes/saygili') }}" rel="stylesheet" type="text/css"/>
@else
{!! Theme::style('css/bootstrap.css') !!}
@endif
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN: BASE PLUGINS  -->
@stack('plugin-styles')
{!! Theme::style('css/plugins/cubeportfolio/css/cubeportfolio.min.css') !!}
{!! Theme::style('css/plugins/owl-carousel/owl.carousel.css') !!}
{!! Theme::style('css/plugins/owl-carousel/owl.theme.css') !!}
{!! Theme::style('css/plugins/owl-carousel/owl.transitions.css') !!}
{!! Theme::style('css/plugins/fancybox/jquery.fancybox.css') !!}
{!! Theme::style('css/plugins/slider-for-bootstrap/css/slider.css') !!}
<!-- END: BASE PLUGINS -->

<!-- BEGIN THEME STYLES -->
@if(App::environment()=='production')
<link href="{{ elixir('css/base/plugins.css', 'themes/saygili') }}" rel="stylesheet" type="text/css"/>
<link href="{{ elixir('css/base/components.css', 'themes/saygili') }}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{ elixir('css/base/themes/blue2.css', 'themes/saygili') }}" rel="stylesheet" type="text/css"/>
<link href="{{ elixir('css/base/custom.css', 'themes/saygili') }}" rel="stylesheet" type="text/css"/>
@else
{!! Theme::style('css/base/plugins.css') !!}
{!! Theme::style('css/base/components.css') !!}
{!! Theme::style('css/base/themes/blue2.css') !!}
{!! Theme::style('css/base/custom.css') !!}
@endif
<!-- END THEME STYLES -->

@stack('css_inline')