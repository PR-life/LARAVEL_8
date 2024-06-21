@component('zADMIN.PAGE._lego.filter.SHEMA.index.wrap.Filter')
    @slot('cssModel','-paper')

    <div class="{{ ($_GET != [] || request()->routeIs('admin.' . $model . '.index')) ? '' : 'notActive noEvents' }}">
        <a href="{{route('admin.' . $model . '.index')}}">
            <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
        </a>
    </div>
    @include('zADMIN.PAGE._lego.filter.lego.name')
    @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories])
    @include('zADMIN.PAGE._lego.filter.lego.tags', ['Var' => $tags])
    
    @include('zADMIN.PAGE._lego.filter.lego.icoEnd')

    <a class="{{request()->routeIs('admin.' . $model . '.index') ? '' : 'notActive'}}" href="{{route('admin.' . $model . '.index')}}">@svg('basket-2')</a>
@endcomponent