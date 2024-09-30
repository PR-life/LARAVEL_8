@component('zADMIN.PAGE._lego.filter.SCHEMA.index.wrap.Filter')
    @slot('cssModel','-tag')

    <div class="{{ ($_GET != [] || request()->routeIs('admin.tag.trash')) ? '' : 'notActive noEvents' }}">
        <a href="{{route('admin.tag.index')}}">
            <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
        </a>
    </div>
    @include('zADMIN.PAGE._lego.filter.lego.name')

    {{-- @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories]) --}}
    {{-- @include('zADMIN.PAGE._lego.filter.lego.tags', ['Var' => $tags]) --}}
    
    @include('zADMIN.PAGE._lego.filter.lego.icoEnd')

    <a class="{{request()->routeIs('admin.tag.trash') ? '' : 'notActive'}}" href="{{route('admin.tag.trash')}}">@svg('basket-2')</a>
@endcomponent