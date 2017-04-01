@if($page)
<div class="c-content-title-1">
    <h3 class="c-font-uppercase c-font-bold c-font-white">{{ $page->title }}</h3>
    <div class="c-line-left hide"></div>
</div>
<ul class="c-links">
    @foreach($page->children()->orderBy('position','asc')->get() as $child)
        <li>
            <a href="{{ route('page', [$child->uri]) }}">{{ $child->title }}</a>
        </li>
    @endforeach
</ul>
@endif