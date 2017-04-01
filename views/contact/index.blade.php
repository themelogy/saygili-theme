@extends('layouts.master')

@section('content')
    <div class="c-layout-page">

        <div class="c-layout-breadcrumbs-1 c-raindrops c-fonts-uppercase c-fonts-bold">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-white c-font-sbold">İletişim</h3>
                </div>

                {!! Breadcrumbs::renderIfExists('page') !!}

            </div>
        </div>

        <div class="container">
            <div class="white-space space-big"></div>

            <div class="row" style="padding: 50px 0;">
                <div class="col-md-6">
                    <div class="c-content-title-2 c-title-md">
                        <h3 class="c-theme-font c-font-uppercase">{{ trans('contact::contacts.title.contact-information') }}</h3>
                        <div class="c-line-left"></div>
                    </div>

                    <div class="c-body">
                        <div class="c-section">
                            <h3>{{ setting('theme::company-name') }}</h3>
                        </div>
                        <div class="c-section">
                            <p>{!! setting('theme::address') !!}</p>
                        </div>
                        <div class="c-section">
                            <p>
                                <strong>T</strong> {!! setting('theme::phone') !!}
                                <br/>
                                <strong>F</strong> {!! setting('theme::fax') !!}</p>
                        </div>
                        <div class="c-section">
                            <br/>
                            <ul class="c-content-iconlist-1 c-theme">
                                @if(setting('theme::twitter'))<li><a target="_blank" href="{{ setting('theme::twitter') }}"><i class="icon-social-twitter"></i></a></li>@endif
                                @if(setting('theme::facebook'))<li><a target="_blank" href="{{ setting('theme::facebook') }}"><i class="icon-social-facebook"></i></a></li>@endif
                                @if(setting('theme::instagram'))<li><a target="_blank" href="{{ setting('theme::instagram') }}"><i class="fa fa-instagram"></i></a></li>@endif
                                @if(setting('theme::linkedin'))<li><a target="_blank" href="{{ setting('theme::linkedin') }}"><i class="fa fa-linkedin"></i></a></li>@endif
                                @if(setting('theme::pinterest'))<li><a target="_blank" href="{{ setting('theme::pinterest') }}"><i class="fa fa-pinterest"></i></a></li>@endif
                                @if(setting('theme::youtube'))<li><a target="_blank" href="{{ setting('theme::youtube') }}"><i class="icon-social-youtube"></i></a></li>@endif
                                @if(setting('theme::dribble'))<li><a target="_blank" href="{{ setting('theme::dribble') }}"><i class="icon-social-dribbble"></i></a></li>@endif
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="c-content-title-2 c-title-md">
                        <h3 class="c-theme-font c-font-uppercase">{{ trans('contact::contacts.title.contact-form') }}</h3>
                        <div class="c-line-left"></div>
                    </div>
                    <!-- Form -->
                    @include('contact.form')
                    <!-- /Form -->

                    <div class="white-space space-small"></div>
                </div>
            </div>

            <div class="white-space space-medium"></div>

        </div>

    </div>

@stop