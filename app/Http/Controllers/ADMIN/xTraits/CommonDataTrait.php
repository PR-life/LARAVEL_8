<?php

namespace App\Http\Controllers\ADMIN\xTraits;

use App\Models\{Tag, Group, Faq, Item, Lego};
use App\Models\_child\Service;

trait CommonDataTrait
{
    protected function getCommonData()
    {
        $tags = Tag::all();
        $groups = Group::all();
        $faqs = Faq::all();
        $items = Item::all();
        $Lego = Lego::orderBy('name')->get();
        $services = Service::all();

        return compact('tags', 'groups', 'faqs', 'items', 'Lego', 'services');
    }
}
