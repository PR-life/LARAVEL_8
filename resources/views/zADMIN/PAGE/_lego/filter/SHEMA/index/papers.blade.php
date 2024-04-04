@component('zADMIN.PAGE._lego.filter.SHEMA.index.wrap.Filter')
    @slot('cssModel','-paper')

    <div class="{{ ($_GET != [] || request()->routeIs('admin.paper.trash')) ? '' : 'notActive noEvents' }}">
        <a href="{{route('admin.paper.index')}}">
            <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
        </a>
    </div>
    @include('zADMIN.PAGE._lego.filter.lego.name')
    @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories])
    
    @include('zADMIN.PAGE._lego.filter.lego.icoEnd')

    <a class="{{request()->routeIs('admin.paper.trash') ? '' : 'notActive'}}" href="{{route('admin.paper.trash')}}">@svg('basket-2')</a>
@endcomponent

 


    {{-- <div id="Filter" class="-paper / none _indexMax" check-localstorage='Filter' data-check="active" param='Block'>
        <form id="form_managerDiv" class="Form -S / flex cI / cross-xxs">
            <div class="{{ ($_GET != [] || request()->routeIs('admin.paper.trash')) ? '' : 'notActive noEvents' }}">
                <a href="{{route('admin.paper.index')}}">
                    <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
                </a>
            </div>
            @include('zADMIN.PAGE._lego.filter.lego.name')
            @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories])
            <div class="OnOff {{$_GET != [] ? 'on' : 'off'}}">
                <button class="_close / Ico / transparent pointer" type="submit" id="sendForm">@svg('search')</button>
                <button class="_open / Ico / transparent pointer" type="submit" id="sendForm">@svg('change')</button>
            </div>
            <a class="{{request()->routeIs('admin.paper.trash') ? '' : 'notActive'}}" href="{{route('admin.paper.trash')}}">@svg('basket-2')</a>
        </form>
    </div> --}}
{{-- </div> --}}
