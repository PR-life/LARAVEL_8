@component('zADMIN.PAGE._lego.filter.SHEMA.index.wrap.Filter')
    @slot('cssModel','-group')

    <div class="{{ ($_GET != [] || request()->routeIs('admin.group.trash')) ? '' : 'notActive noEvents' }}">
        <a href="{{route('admin.group.index')}}">
            <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
        </a>
    </div>
    @include('zADMIN.PAGE._lego.filter.lego.name')

    @include('zADMIN.PAGE._lego.filter.lego.icoEnd')

    <a class="{{request()->routeIs('admin.group.trash') ? '' : 'notActive'}}" href="{{route('admin.group.trash')}}">@svg('basket-2')</a>
@endcomponent