<div class="paragraph"></div>
<div id="filter_tags_1" class="none / space-leftS space-right  / Goo -manager / _indexMax noEvents" check-localstorage='filter_tags_1' data-check='active' param='Block'>
    <div class="{{$css ?? 'space-s'}}">
        <div class="flex bC cI / yesEvents">

            <div class="flex / cross-xxs / x-23101338">

                @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'Btn -S -auto -edgeS x-active / slim round-s'])
                    @slot('localstorageName','filter_btn_table_empty')
                    @slot('dataCheck','x-empty')
                    @slot('nodeName','Table_index')
                    @slot('toggleCss','x-empty')
                    @slot('name','заполнить')
                @endcomponent

                @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'Btn -S -auto -edgeS x-active / slim round-s'])
                    @slot('localstorageName','filter_btn_table_full')
                    @slot('dataCheck','x-full')
                    @slot('nodeName','Table_index')
                    @slot('toggleCss','x-full')
                    @slot('name','full')
                @endcomponent

                @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'Btn -S -auto -edgeS x-exclude / slim round-s'])
                    @slot('localstorageName','filter_btn_table_statusActive')
                    @slot('dataCheck','x-active')
                    @slot('nodeName','Table_index')
                    @slot('toggleCss','x-active')
                    @slot('name','active')
                @endcomponent

                @component('zADMIN._wrap.manager.btn.localStorage_toggle',['css' => 'Btn -S -auto -edgeS x-exclude / slim round-s'])
                    @slot('localstorageName','filter_btn_table_statusPause')
                    @slot('dataCheck','x-pause')
                    @slot('nodeName','Table_index')
                    @slot('toggleCss','x-pause')
                    @slot('name','pause')
                @endcomponent


            </div>
            @isset($Var)
            <div class="flex cross-xs op / color-23101932">
                <a class="Ico -XS / round-xs {{ request()->has('shema') ? '' : 'active' }}" href="{{route('admin.'.$Var.'.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 13 13" fill="currentColor"><path d="M0 10h3v3H0zm5 0h8v3H5zM0 5h3v3H0zm5 0h8v3H5zM0 0h3v3H0zm5 0h8v3H5z"/></svg>
                </a>
                <a class="Ico -XS / round-xs {{ request()->query('shema') == 'group' ? 'active' : '' }}" href="{{route('admin.'.$Var.'.index', ['shema' => 'group'])}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 13 13" fill="currentColor"><path d="M0 0h6v6H0zm7 0h6v6H7zm0 7h6v6H7zM0 7h6v6H0z"/></svg>
                </a>
            </div>
            @endisset

        </div>

    </div>
</div>