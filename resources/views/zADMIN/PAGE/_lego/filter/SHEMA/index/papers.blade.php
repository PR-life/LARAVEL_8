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