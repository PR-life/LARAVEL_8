@component('zADMIN.PAGE._lego.filter.SHEMA.index.wrap.index')
    @slot('cssModel', '-face')

    <div class="Abs -left">
        <div class="{{ ($_GET != [] || request()->routeIs('admin.crm.customer.trash')) ? '' : 'notActive noEvents' }}">
            <a href="{{route('admin.crm.customer.index')}}">
                <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
            </a>
        </div>
    </div>

    @include('zADMIN.PAGE._lego.filter.lego.patronymic')
    @include('zADMIN.PAGE._lego.filter.lego.name', ['placeholder' => 'имя'])
    @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories])

    <div class="OnOff {{$_GET != [] ? 'on' : 'off'}}">
        <button class="_close / Ico / transparent pointer" type="submit" id="sendForm">@svg('search')</button>
        <button class="_open / Ico / transparent pointer" type="submit" id="sendForm">@svg('change')</button>
    </div>

    {{-- <a class="{{request()->routeIs('admin.crm.customer.trash') ? '' : 'notActive'}}" href="{{route('admin.crm.customer.trash')}}">@svg('basket-2')</a> --}}
@endcomponent