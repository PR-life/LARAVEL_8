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

            {{-- <a class="{{request()->routeIs('admin.post.trash') ? '' : 'notActive'}}" href="{--{route('admin.post.trash')}}">@svg('basket-2')</a> --}}
        </form>
    
    </div>

</div>


{{-- <div data-localstorage check-localstorage='{{$localstorageName}}' data-check='active'>
    <div data-click data-css data-toggle='active' data-node='parent'>
        <div data-click data-css data-node='{{$nodeName}}' data-toggle="{{$toggleCss}}">
            <div class="{{$css ?? 'space-s round-xs _btn / selection pointer'}}" data-click data-localstorage localstorage-name='{{$localstorageName}}' data-toggle="{{$toggleCss}}">
                <span class="content-xxs">{{$name}}</span>
            </div>
        </div>
    </div>
</div> --}}