@push('js-bottom-solo')
	@include('_/js/manager/select/index')
@endpush

<div id="Filter" class="none / Goo55 -manager555 / _indexMax" check-localstorage='Filter' data-check="active" param='Block'>
    <div class="space / flex">
        

            {{-- @dd($_GET) --}}
        <form id="form_managerDiv" class="Form -S / flex cI / cross-xxs">
            <div class="{{ ($_GET != [] || request()->routeIs('admin.faq.trash')) ? '' : 'notActive noEvents' }}">
                <a href="{{route('admin.faq.index')}}">
                    <span class="flex / Ico -XS / orb-s contentBox">@svg('close')</span>
                </a>
            </div>
            @include('zADMIN.PAGE._lego.filter.lego.name')
            @include('zADMIN.PAGE._lego.filter.lego.categories', ['Var' => $categories])


            <div class="Select">
                <select class="Min -w3" name="tag_id">
                    <option class="default" selected value> -- tag -- </option>
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}" {{$tag->id == ($_GET["tag_id"] ?? null) ? ' selected' : ''}}>
                            {{$tag->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            

            <div class="OnOff {{$_GET != [] ? 'on' : 'off'}}">
                <button class="_close / Ico / transparent pointer" type="submit" id="sendForm">@svg('search')</button>
                <button class="_open / Ico / transparent pointer" type="submit" id="sendForm">@svg('change')</button>
            </div>

            <a class="{{request()->routeIs('admin.faq.trash') ? '' : 'notActive'}}" href="{{route('admin.faq.trash')}}">@svg('basket-2')</a>
        </form>
    
    </div>

</div>