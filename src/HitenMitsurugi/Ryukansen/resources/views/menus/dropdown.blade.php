<li role="presentation" class="{{ $submenu }}">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        {{ $item->display_name }}

        @if ($submenu === null)
            <span class="ti-angle-down"></span>
        @else
            <span class="ti-angle-right"></span>
        @endif
    </a>

    <ul class="dropdown-menu">
        @foreach ($item->children as $child)
            {!! HitenMitsurugi\Ryukansen\MenuCollector::makeAnchor($child, true) !!}
        @endforeach
    </ul>
</li>
