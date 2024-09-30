@component('zADMIN.PAGE._lego.filter.SCHEMA.index.wrap.Filter')
    @slot('cssModel','-post')

    <div class="{{ ($_GET != [] || request()->routeIs('admin.post.trash')) ? '' : 'notActive noEvents' }}">
        <a href="{{route('admin.post.index')}}">
            <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
        </a>
    </div>
    @include('zADMIN.PAGE._lego.filter.lego.name')
    {{-- @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories]) --}}
    
    @include('zADMIN.PAGE._lego.filter.lego.icoEnd')

    <a class="{{request()->routeIs('admin.post.trash') ? '' : 'notActive'}}" href="{{route('admin.post.trash')}}">@svg('basket-2')</a>
@endcomponent