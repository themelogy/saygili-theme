@if($menus = app(\Modules\Menu\Repositories\MenuRepository::class)->findBySlug($menu))
<div class="c-content-title-1">
    <h3 class="c-font-uppercase c-font-bold c-font-white">{{ $menus->title }}</h3>
    <div class="c-line-left hide"></div>
</div>
{!! Menu::render($menu, \Modules\Theme\Presenters\Saygili\FooterMenuLinksPresenter::class) !!}
@endif