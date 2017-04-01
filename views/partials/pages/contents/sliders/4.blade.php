@if($slide = Slide::findBySlug('anasayfa'))

<section class="c-layout-revo-slider c-layout-revo-slider-4">
    <div class="tp-banner-container c-theme">
        <div class="tp-banner rev_slider" data-version="5.0">
            <ul>

                @foreach($slide->sliders()->where('status', 1)->orderBy('ordering', 'asc')->get() as $slider)
                <!--BEGIN: SLIDE #1 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                    <img alt="" src="{{ \Imagy::getImage($slider->files()->first()->filename, 'anasayfa_slider', ['width' => 1903, 'height' => 600, 'mode' => 'fit', 'quality' => 100]) }}" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption customin customout"
                         data-x="center"
                         data-y="center"
                         data-hoffset=""
                         data-voffset="-50"
                         data-speed="500"
                         data-start="1000"
                         data-transform_idle="o:1;"
                         data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                         data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="600">
                        <h3 class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block">{{ $slider->title }}</h3>
                    </div>

                    @if($slider->link->url)
                    <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="130" data-speed="900"
                         data-start="2000" data-transform_idle="o:1;"
                         data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                         data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                        <a href="{{ $slider->link->url }}"
                           class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">{{ $slider->link->title }}</a>
                    </div>
                    @endif

                </li>
                <!--END -->
                @endforeach

                @if(setting('theme::video')==true)
                <!--BEGIN: SLIDE #3 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="700" data-delay="6000"
                    data-thumb="">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img alt="" src="{{ Theme::url('img/content/backgrounds/bg-19.jpg') }}" data-bgposition="center center"
                         data-bgfit="cover" data-bgrepeat="no-repeat" class="visible-xs"/>
                    <div class="rs-background-video-layer fulllscreenvideo tp-videolayer" data-forcerewind="on"
                         data-volume="mute" data-videowidth="100%" data-videoheight="100%"
                         data-videomp4="assets/base/media/video/video-2.mp4" data-videopreload="preload"
                         data-videoloop="loop" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true"
                         data-autoplayonlyfirsttime="false" data-nextslideatend="true"></div>
                    <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset=""
                         data-voffset="-30" data-speed="500" data-start="1000" data-transform_idle="o:1;"
                         data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                         data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;"
                         data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                         data-endspeed="600">
                        <h3 class="c-main-title-square c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block">
                            Let us show you
                            <br>Unlimited possibilities </h3>
                    </div>
                    <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="130" data-speed="900"
                         data-start="2000" data-transform_idle="o:1;"
                         data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                         data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                        <a href="http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314"
                           class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">Purchase</a>
                    </div>
                </li>
                @endif
                <!--END -->

            </ul>
        </div>
    </div>
</section>

@push('plugin-scripts')
{{ Theme::script('js/plugins/revo-slider/js/jquery.themepunch.tools.min.js') }}
{{ Theme::script('js/plugins/revo-slider/js/jquery.themepunch.revolution.min.js') }}
{{ Theme::script('js/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js') }}
{{ Theme::script('js/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js') }}
{{ Theme::script('js/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js') }}
{{ Theme::script('js/plugins/revo-slider/js/extensions/revolution.extension.video.min.js') }}
@endpush

@push('plugin-styles')
{!! Theme::style('css/plugins/revo-slider/css/settings.css') !!}
{!! Theme::style('css/plugins/revo-slider/css/layers.css') !!}
{!! Theme::style('css/plugins/revo-slider/css/navigation.css') !!}
@endpush

@push('scripts')
<script>
    $(document).ready(function () {
        var slider = $('.c-layout-revo-slider .tp-banner');
        var cont = $('.c-layout-revo-slider .tp-banner-container');
        var height = (App.getViewPort().width > App.getBreakpoint('md') ? 450 : 300);
        var api = slider.show().revolution(
                {
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    responsiveLevels: [2048, 1024, 778, 480],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    delay: 15000,
                    minHeight: height,
                    autoHeight: 'off',
                    touchenabled: "on",
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "on",
                        arrows: {
                            style: "circle",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        }
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    disableProgressBar: "on",
                    fullScreenOffsetContainer: '.tp-banner-container',
                    hideThumbsOnMobile: "on",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "on",
                    hideArrowsOnMobile: "on",
                    hideThumbsUnderResolution: 0,
                    videoJsPath: "rs-plugin/videojs/",
                });
    }); //ready
</script>
@endpush
@endif