{{-- <input id="user_id" type="hidden" name="user_id" value="{{$paper->user_id}}"> --}}

<div class="void / Form -S">

    <div class="space-leftS">        
        <div class="Preamble -row / User">
            <div class="Ava -S user-{{$paper->user_id}} / hidden">
                <img src="{{$paper->user->avatar ?? '/images-0/ava_face.png'}}" title="{{$paper->user->name}}">
            </div>
            <div>
                <div class="content-xxs / Grey">
                    автор
                </div>
                <div class="author">
                    <span class="content-xs">
                        {{$paper->user->name}}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="pl-edgeS"> 
        <dl class="-dot -rightS Void">
            <dt class="content-xs Grey">дата</dt>
            <dd><span class="content-xs">{{$paper->created_at}}</span></dd>
        </dl>
    </div>



    @component('_wrap.__.summary')
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'wrapDemonUser')
        @slot('name', 'данные автора')


        <div class="flex bC cI">
            <input class="Max -w1" id="inputUser_id" type="text" name="user_id" value="{{$paper->user_id}}" placeholder="...">
        </div>

        <div class="paragraph / net"></div>
        <dl class="-dot Void / Form -XS / net">
            <dt class="content-xs Grey"><label for="inputDemon_name">Имя</label></dt>
            <dd><span class="content-xs"><input id="inputDemon_name" type="text" name="demon_name" value="{{$paper->demon_name}}" placeholder="USER: {{$paper->user->nickname ?? $paper->user->name}}"></span></dd>
            <dt class="content-xs Grey"><label for="inputDemon_par_1">Откуда</label></dt>
            <dd><span class="content-xs"><input id="inputDemon_par_1" type="text" name="demon_par_1" value="{{$paper->demon_par_1}}" placeholder="USER: {{$paper->user->user_par_1}}"></span></dd>
            <dt class="content-xs Grey"><label for="inputDemon_par_2">Профессия</label></dt>
            <dd><span class="content-xs"><input id="inputDemon_par_2" type="text" name="demon_par_2" value="{{$paper->demon_par_2}}" placeholder="USER: {{$paper->user->user_par_2}}"></span></dd> 
        </dl>
    @endcomponent


    @component('_wrap.__.summary')
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'shema')
        @slot('name', 'шаблон')

        <div class="content-xxs Grey">Тизер</div>
        @include('zADMIN.PAGE._lego.edit.shema.teaser', ['Var' => $paper])

        <div class="paragraph"></div>

    @endcomponent


    @component('_wrap.__.summary')
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'mockup')
        @slot('name', 'mockup')

        {{-- <div class="content-xxs Grey">Тизер</div> --}}
        @include('zADMIN.PAGE._lego.edit.mockup.index', ['Var' => $paper])
        {{-- <div class="paragraph"></div> --}}

    @endcomponent



    @component('_wrap.__.summary')
        {{-- @slot('cssName', 'content-m pl-4') --}}
        {{-- @slot('cssWrap', '') --}}
        {{-- @slot('cssContent', '') --}}
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'demon')
        @slot('name', 'price')

        {{-- <div class="paragraph / net"></div> --}}
        <dl class="-dot Void / Form -XS / net">
            <dt class="content-xs Grey"><label for="inputPrice">price</label></dt>
            <dd><span class="content-xs"><input id="inputPrice" type="text" name="price" value="{{$paper->price}}"></dd>
        </dl>
    @endcomponent






    
    {{-- @component('zADMIN._wrap._open.tool_FlaberSms')
        @slot('id', 'shema')
        @slot('name', 'шаблон')

        <div class="content-xxs Grey">Тизер</div>
        @include('zADMIN.PAGE._lego.edit.shema.teaser', ['Var' => $paper])

        <div class="paragraph"></div>

        <div class="content-xxs Grey">Full</div>
        @include('zADMIN.PAGE._lego.edit.shema.full')

    @endcomponent --}}






        





    {{-- @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'category')
        @slot('name', 'Категория')

        


        <dl class="-dot Void / Form -XS / net">
            <dt class="content-xs Grey"><label for="inputCategory_id">id родителя</label></dt>
            <dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="{{$paper->category_id}}" placeholder="..."></span></dd>
        </dl>


        @component('zADMIN._wrap.select.categories.lvl_1')
            @include('_._brick.select.category.lvl_1.index',['Categories' => $categories, 'Var' => $paper->category_id])
        @endcomponent

        @component('zADMIN._wrap.select.categories.lvl_2')
            @include('_._brick.select.category.lvl_2.index',['Categories' => $categories, 'Var' => $paper->category_id])
        @endcomponent
        
 



    @endcomponent --}}


    
    {{-- @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms', ['css' => 'round-s x-24051434 / void-s'])
        @slot('id', 'tags')
        @slot('name', 'Теги')


        @component('zADMIN._wrap.select.tags.index')
            @component('zADMIN._wrap.select.tags')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $paper])
            @endcomponent
        @endcomponent


    @endcomponent --}}

 

    {{-- <div class="paragraph / net"></div> --}}

    {{-- <div class="pl-edgeS"> 
        <dl class="-dot -rightS Void">
            <dt class="content-xs Grey">дата</dt>
            <dd><span class="content-xs">{{$paper->created_at}}</span></dd>
        </dl>
    </div> --}}

</div>
