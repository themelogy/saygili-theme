@stack('styles')

<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
{{ Theme::script('js/plugins/excanvas.min.js') }}
<![endif]-->

{{ Theme::script('js/plugins/jquery.min.js') }}
{{ Theme::script('js/plugins/jquery-migrate.min.js') }}
{{ Theme::script('js/plugins/bootstrap/js/bootstrap.min.js') }}
{{ Theme::script('js/plugins/jquery.easing.min.js') }}
{{ Theme::script('js/plugins/reveal-animate/wow.js') }}
{{ Theme::script('js/scripts/reveal-animate/reveal-animate.js') }}
<!-- END: CORE PLUGINS -->

<!-- BEGIN: LAYOUT PLUGINS -->
@stack('plugin-scripts')
{{ Theme::script('js/plugins/semantic-ui/semantic.min.js') }}
{{ Theme::script('js/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}
{{ Theme::script('js/plugins/owl-carousel/owl.carousel.min.js') }}
{{ Theme::script('js/plugins/counterup/jquery.waypoints.min.js') }}
{{ Theme::script('js/plugins/counterup/jquery.counterup.min.js') }}
{{ Theme::script('js/plugins/fancybox/jquery.fancybox.pack.js') }}
{{ Theme::script('js/plugins/slider-for-bootstrap/js/bootstrap-slider.js') }}
<!-- END: LAYOUT PLUGINS -->

<!-- BEGIN: THEME SCRIPTS -->
{{ Theme::script('js/components.js') }}
{{ Theme::script('js/components-shop.js') }}
{{ Theme::script('js/app.js') }}

@stack('scripts')

<script>
    $(document).ready(function () {
        App.init(); // init core
    });
    $(window).on('load', function(){
       $('body').show();
    });
</script>

@stack('js_inline')