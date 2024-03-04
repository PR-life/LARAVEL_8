<div class="Bee55 -S55 / Goo55 -manager555 / _indexMax">
    <div class="space / flex">
        <form id="form_managerDiv" class="Form -S / flex cI / cross-xxs">
            <div class="{{ ($_GET != [] || request()->routeIs('admin.post.trash')) ? '' : 'notActive noEvents' }}">
                <a href="{{route('admin.post.index')}}">
                    <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
                </a>
            </div>
            @include('zADMIN.PAGE._lego.filter.lego.name')
            @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories])

            <div class="OnOff {{$_GET != [] ? 'on' : 'off'}}">
                <button class="_close / Ico / transparent pointer" type="submit" id="sendForm">@svg('search')</button>
                <button class="_open / Ico / transparent pointer" type="submit" id="sendForm">@svg('change')</button>
            </div>

            <a class="{{request()->routeIs('admin.post.trash') ? '' : 'notActive'}}" href="{{route('admin.post.trash')}}">@svg('basket-2')</a>
        </form>
    </div>
</div>