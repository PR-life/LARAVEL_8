<div class="space / flex">

    <div id="Filter" class="-paper / none _indexMax" check-localstorage='Filter' data-check="active" param='Block'>
        <form id="form_managerDiv" class="Form -S / flex cI / cross-xxs">
            <div class="{{ ($_GET != [] || request()->routeIs('admin.item.trash')) ? '' : 'notActive noEvents' }}">
                <a href="{{route('admin.item.index')}}">
                    <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
                </a>
            </div>
            @include('zADMIN.PAGE._lego.filter.lego.name')
            @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories])
            @include('zADMIN.PAGE._lego.filter.lego.groups', ['Var' => $groups])

            <div class="OnOff {{$_GET != [] ? 'on' : 'off'}}">
                <button class="_close / Ico -S / transparent pointer" type="submit" id="sendForm">@svg('search')</button>
                <button class="_open / Ico / transparent pointer" type="submit" id="sendForm">@svg('change')</button>
            </div>

            {{-- <a class="{{request()->routeIs('admin.category.trash') ? '' : 'notActive'}}" href="{{route('admin.category.trash')}}">@svg('basket-2')</a> --}}
        </form>
    </div>
</div>