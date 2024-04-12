<div class="paragraph"></div>
<div id="filter_tags_1" class="none -{{$var}} / space-leftS space-right  / Goo -manager / _indexMax noEvents" check-localstorage='filter_tags_1' data-check='active' param='Block'>
    <div id="filter_tags_1_jsId" class="{{$css ?? 'space-s'}}" check-localstorage='trigger_model_{{$Var}}' data-check='active' param='blockManager'>
        <div class="flex bC cI / yesEvents">

            <div class="x-manager / flex / cross-xxs" data-localstorage localstorage-picking="filter_btn_table_empty filter_btn_table_full">

                @component('zADMIN._wrap.manager.btn.localStorage_toggle')
                    @slot('localstorageName','filter_btn_table_empty')
                    @slot('dataCheck','y-empty')
                    @slot('nodeName','Table_index')
                    @slot('toggleCss','y-empty')
                    @slot('css07041155','y-empty')
                    @slot('css','x-empty')
                    @slot('node07041155','parentParent')
                    @slot('name','заполнить')
                @endcomponent

                @component('zADMIN._wrap.manager.btn.localStorage_toggle')
                    @slot('localstorageName','filter_btn_table_full')
                    @slot('dataCheck','y-full')
                    @slot('nodeName','Table_index')
                    @slot('toggleCss','y-full')
                    @slot('css07041155','y-full')
                    @slot('css','x-full')
                    @slot('node07041155','parentParent')
                    @slot('name','full')
                @endcomponent

                @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
                    @slot('localstorageName','filter_btn_table_statusActive')
                    @slot('dataCheck','y-active')
                    @slot('nodeName','Table_index')
                    @slot('toggleCss','y-active')
                    @slot('name','active')
                @endcomponent

                @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'x-exclude'])
                    @slot('localstorageName','filter_btn_table_statusPause')
                    @slot('dataCheck','y-pause')
                    @slot('nodeName','Table_index')
                    @slot('toggleCss','y-pause')
                    @slot('name','pause')
                @endcomponent

                {!!$slot!!}


            </div>
            @isset($var)
            <div class="flex cross-xs op / color-23101932">
                <a class="Ico -XS / round-xs {{ request()->has('shema') ? '' : 'active' }}" href="{{route('admin.'.$var.'.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 13 13" fill="currentColor"><path d="M0 10h3v3H0zm5 0h8v3H5zM0 5h3v3H0zm5 0h8v3H5zM0 0h3v3H0zm5 0h8v3H5z"/></svg>
                </a>
                <a class="Ico -XS / round-xs {{ request()->query('shema') == 'group' ? 'active' : '' }}" href="{{route('admin.'.$var.'.index', ['shema' => 'group'])}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 13 13" fill="currentColor"><path d="M0 0h6v6H0zm7 0h6v6H7zm0 7h6v6H7zM0 7h6v6H0z"/></svg>
                </a>
            </div>
            @endisset

        </div>

    </div>
</div>


<script>
    
</script>