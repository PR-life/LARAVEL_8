<?php

namespace App\Http\Controllers\ADMIN\xTraits;

use App\Models\{Group,Tag, Lego,Faq, Item,Paper};
use App\Models\_child\Service;

trait CommonDataTrait
{
    protected function getCommonData()
    {
        $groups = Group::all();
        $tags = Tag::all();
        $Lego = Lego::orderBy('name')->get();
        $faqs = Faq::orderBy('created_at')->get();
        $items = Item::all();
        $papers = Paper::all();
        $services = Service::all();

        return compact('groups', 'tags', 'Lego', 'faqs', 'items', 'papers', 'services');
    }
}
