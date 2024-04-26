<div class="void / Form -S">

    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'category')
        @slot('name', 'Категория')

        


        <dl class="-dot Void / Form -XS / net">
            <dt class="content-xs Grey"><label for="inputCategory_id">id категории</label></dt>
            <dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="{{$landing->category_id}}" placeholder="..."></span></dd>
        </dl>


        {{-- @component('zADMIN._wrap.select.categories.lvl_1')
            @include('_._brick.select.category.lvl_1.index',['Categories' => $categories, 'Var' => $landing->category_id])
        @endcomponent

        @component('zADMIN._wrap.select.categories.lvl_2')
            @include('_._brick.select.category.lvl_2.index',['Categories' => $categories, 'Var' => $landing->category_id])
        @endcomponent
        
  --}}



    @endcomponent


    
    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms', ['css' => 'round-s x-24051434 / void-s'])
        @slot('id', 'tags')
        @slot('name', 'Теги')

{{-- 
        @component('zADMIN._wrap.select.tags.index')
            @component('zADMIN._wrap.select.tags')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $landing])
            @endcomponent
        @endcomponent --}}


    @endcomponent

 

    <div class="paragraph / net"></div>

    <div class="pl-edgeS"> 
        <dl class="-dot -rightS Void">
            <dt class="content-xs Grey">дата</dt>
            <dd><span class="content-xs">{{$landing->created_at}}</span></dd>
        </dl>
    </div>

</div>
