<ul class="nav nav-pills">
@foreach ($menus as $menu)
    {!! HitenMitsurugi\Ryukansen\MenuCollector::makeAnchor($menu) !!}
@endforeach
</ul>
