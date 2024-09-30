@component('zADMIN.PAGE._lego.filter.SCHEMA.index.wrap.Filter')
    @slot('triggerShow','')
    @slot('Model','Face')
    @slot('cssForm','-L')

    <div class="{{ ($_GET != [] || request()->routeIs('admin.crm.face.trash')) ? '' : 'notActive noEvents' }}">
        <a href="{{route('admin.crm.face.index')}}">
            <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
        </a>
    </div>
    @include('zADMIN.PAGE._lego.filter.lego.surname',['css16070724' => 'Min -w6'])
   
    @include('zADMIN.PAGE._lego.filter.lego.icoEnd')

    {{-- <a class="{{request()->routeIs('admin.crm.face.trash') ? '' : 'notActive'}}" href="{{route('admin.crm.face.trash')}}">@svg('basket-2')</a> --}}
@endcomponent