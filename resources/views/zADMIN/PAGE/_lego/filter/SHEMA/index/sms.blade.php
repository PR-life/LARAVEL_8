@component('zADMIN.PAGE._lego.filter.SHEMA.index.wrap.Filter')
    @slot('cssModel','-sms')

    <div class="{{ ($_GET != [] || request()->routeIs('admin.sms.trash')) ? '' : 'notActive noEvents' }}">
        <a href="{{route('admin.sms.index')}}">
            <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
        </a>
    </div>
    @include('zADMIN.PAGE._lego.filter.lego.sms')
    @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories])
    
    @include('zADMIN.PAGE._lego.filter.lego.icoEnd')

    <a class="{{request()->routeIs('admin.post.trash') ? '' : 'notActive'}}" href="{{route('admin.sms.trash')}}">@svg('basket-2')</a>
@endcomponent