<div class="void / Form555 -S">
 
    {{-- @component('_wrap.__.summary')
        @slot('id', 'category')
        @slot('name', 'Категория')

        
        <dl class="-dot Void / Form -XS / net">
            <dt class="content-xs Grey"><label for="inputCategory_id">id родителя</label></dt>
            <dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="{{$sms->category_id}}" placeholder="..."></span></dd>
        </dl>

        @component('zADMIN.PAGE._wrap.select.categories.lvl_1')
            @include('_._brick.select.category.lvl_1.index',['Categories' => $categories, 'Var' => $sms->category_id])
        @endcomponent

        @component('zADMIN.PAGE._wrap.select.categories.lvl_2')
            @include('_._brick.select.category.lvl_2.index',['Categories' => $categories, 'Var' => $sms->category_id])
        @endcomponent
        
    @endcomponent --}}


    
    {{-- @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms', ['css' => 'round-s x-24051434 / void-s'])
        @slot('id', 'tags')
        @slot('name', 'Теги')

        @component('zADMIN.PAGE._wrap.select.tags.index')
            @component('zADMIN._wrap.select.tags')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $sms])
            @endcomponent
        @endcomponent

    @endcomponent --}}

    @component('_wrap.__.summary')
        @slot('id', 'wrapFlaber_sms_data')
        @slot('name', 'Данные')


            <dl class="-dot -rightS Void">
                <dt class="content-xs Grey">from_page</dt>
                <dd><span class="content-xs">{{$sms->from_page}}</span></dd>
                <dt class="content-xs Grey">id_item</dt>
                <dd><span class="content-xs">{{$sms->id_item}}</span></dd>
                <dt class="content-xs Grey">contact</dt>
                <dd><span class="content-xs">{{$sms->contact}}</span></dd>
                <dt class="content-xs Grey">email</dt>
                <dd><span class="content-xs">{{$sms->email}}</span></dd>
                <dt class="content-xs Grey">phone</dt>
                <dd><span class="content-xs">{{$sms->phone}}</span></dd>
                <dt class="content-xs Grey">whatsapp</dt>
                <dd><span class="content-xs">{{$sms->whatsapp}}</span></dd>
                <dt class="content-xs Grey">telegram</dt>
                <dd><span class="content-xs">{{$sms->telegram}}</span></dd>
                <dt class="content-xs Grey">viber</dt>
                <dd><span class="content-xs">{{$sms->viber}}</span></dd>
            </dl>

    @endcomponent




    {{-- <div class="space"> 
        <dl class="-dot -rightS Void">
            <dt class="content-xs Grey"><label for="param_string_1">string_1</label></dt>
            <dd>
                <input id="param_string_1" type="text" name="string_1" value="{{$category->string_1}}" placeholder="...">
            </dd>
        </dl>
    </div> --}}

</div>
