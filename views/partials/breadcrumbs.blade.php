@if ($breadcrumbs)
    <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-font-regular">
        @foreach ($breadcrumbs as $crumb)
            <?php
            $icon = isset($crumb->icon) ? '<i class="' . $crumb->icon . '"></i> ' : '';
            ?>

            @if ($crumb->url && ! $crumb->last)
                <li>
                    <a class="c-font-white" href="{{ $crumb->url }}">{!! $icon !!}{{ $crumb->title }}</a>
                </li>
                <li><span class="c-fonts-white">/</span></li>
            @else
                <li class="c-state_active c-font-white">{!! $icon !!}{{ $crumb->title }}</li>
            @endif
        @endforeach
    </ul>
@endif