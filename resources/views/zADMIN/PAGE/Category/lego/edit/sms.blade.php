<div class="Form -S">



<div class="space / void">
	<div class="_shell vol-Abs / net">
		<input id="inputString1" type="text" name="string_1" value="{{$category->string_1 ?? old('string_1')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')string_1</label>
	</div>
</div>

    {{-- @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'category')
        @slot('name', 'Категория')

        <dl class="-dot Void / Form -XS / net">
            <dt class="content-xs Grey"><label for="inputCategory_id">id родителя</label></dt>
            <dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="{{$category->category_id}}" placeholder="..."></span></dd>
        </dl>

        @component('zADMIN._wrap.select.categories.lvl_1')
            @include('_._brick.select.category.lvl_1.index',['Categories' => $categories, 'Var' => $category->category_id])
        @endcomponent

        @component('zADMIN._wrap.select.categories.lvl_2')
            @include('_._brick.select.category.lvl_2.index',['Categories' => $categories, 'Var' => $category->category_id])
        @endcomponent
        
    @endcomponent --}}



    {{-- @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms', ['css' => 'round-s x-24051434 / void-s'])
        @slot('id', 'tags')
        @slot('name', 'Теги')


        @component('zADMIN._wrap.select.tags.index')
            @component('zADMIN._wrap.select.tags')
                @include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $category])
            @endcomponent
        @endcomponent


    @endcomponent --}}


</div>
