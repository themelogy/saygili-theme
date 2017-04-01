@extends('layouts.master')

@section('content')
    <div class="c-layout-page">

        <div class="c-layout-breadcrumbs-1 c-raindrops c-fonts-uppercase c-fonts-bold">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-white c-font-sbold">{{ $page->title }}</h3>
                    <h4 class="c-font-thin c-font-white c-opacity-07"> {{ $page->extension()->sub_title }}</h4>
                </div>

                {!! Breadcrumbs::render('page') !!}

            </div>
        </div>

        <div class="c-content-box c-size-md c-bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if($page = Page::findBySlug('uygulama-paketleri'))
                            <div class="ui styled fluid accordion">
                                <?php $parent_count = 1; ?>
                                @foreach($page->children()->get() as $child)
                                <div class="title @if($parent_count==1) active @endif">
                                    <i class="dropdown icon"></i>
                                    {{ $child->title }}
                                </div>
                                <div class="content @if($parent_count==1) active @endif">
                                    @if($children = $child->children()->get())
                                        @if(count($children))
                                        <div class="accordion">
                                            <?php $child_count = 1; ?>
                                            @foreach($children as $child)
                                                <div class="title @if($child_count==1) active @endif">
                                                    <i class="dropdown icon"></i>
                                                    {{ $child->title }}
                                                </div>
                                                <div class="content @if($child_count==1) active @endif">
                                                    {!! $child->body !!}
                                                </div>
                                                <?php $child_count++; ?>
                                            @endforeach
                                        </div>
                                        @endif
                                    @endif
                                </div>
                                <?php $parent_count++; ?>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@push('scripts')
<script type="text/javascript">
    $('.ui.accordion').accordion();
</script>
@endpush
