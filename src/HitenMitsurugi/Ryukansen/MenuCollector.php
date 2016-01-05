<?php

namespace HitenMitsurugi\Ryukansen;

use stdClass;
use Illuminate\Support\Collection;

class MenuCollector
{
    protected $items;

    protected $current;

    protected $currentKey;

    protected $menu;

    public function __construct(Repositories\Menu $menu)
    {
        $this->menu = $menu;
        $this->items = new Collection($this->menu->all());
    }

    /*
     * Recursive function to loop through items and create a menu
     *
     * @return string
     */
    public function render()
    {
        $this->build($this->items);

        foreach ($this->items as $key => $item) {
            if ($item->parent) {
                unset($this->items[$key]);
            }
        }

        return view('ryukansen::menus.menu', [
            'menus' => $this->items,
        ]);
    }

    public static function makeAnchor(stdClass $item, $isSubMenu = false)
    {
        if ($item->children->count()) {
            return view('ryukansen::menus.dropdown', [
                'item' => $item,
                'submenu' => $isSubMenu ? 'dropdown-submenu' : null,
            ]);
        } else {
            return view('ryukansen::menus.anchor', [
                'item' => $item,
            ]);
        }
    }

    public function build(Collection &$items)
    {
        foreach ($items as $key => $item) {
            $item = $this->findChildren($item);

            $items[$key] = $item;
        }
    }

    public function findChildren(stdClass $item)
    {
        $item->children = $this->items->whereLoose('parent', $item->id);

        return $item;
    }
}
