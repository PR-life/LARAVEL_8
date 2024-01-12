<div class="void / Form -S">

    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'category')
        @slot('name', 'Категория')
        <dl class="-dot Void / Form -XS / net">
            <dt class="content-xs Grey"><label for="inputCategory_id">id родителя</label></dt>
            <dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="{{$faq->category_id}}" placeholder="..."></span></dd>
        </dl>
        @component('zADMIN.PAGE._wrap.select.categories.lvl_1')
            @include('_._brick.select.category.lvl_1.index',['Categories' => $categories, 'Var' => $faq->category_id])
        @endcomponent
        @component('zADMIN.PAGE._wrap.select.categories.lvl_2')
            @include('_._brick.select.category.lvl_2.index',['Categories' => $categories, 'Var' => $faq->category_id])
        @endcomponent
    @endcomponent


    
    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms', ['css' => 'round-s x-24051434 / void-s'])
        @slot('id', 'tags')
        @slot('name', 'Теги')
        @component('zADMIN.PAGE._wrap.select.tags.index')
            @component('zADMIN._wrap.select.tags')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags,'Var' => $faq])
            @endcomponent
        @endcomponent
    @endcomponent

    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'group')
        @slot('name', 'Группа')
        @component('zADMIN.PAGE._wrap.select.groups.index')
            @include('_._brick.select.groups.index',['Categories' => $groups, 'Var' => $faq->group_id])
        @endcomponent
    @endcomponent
 

    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'faq')
        @slot('name', 'Faq')
        <dl class="-dot Void / Form -XS / net">
            <dt class="content-xs Grey"><label for="inputFaq_id">id родителя</label></dt>
            <dd><span class="content-xs"><input id="inputFaq_id" type="text" name="faq_id" value="{{$faq->faq_id}}" placeholder="..."></span></dd>
        </dl>
        @component('zADMIN.PAGE._wrap.select.faqs.lvl_1')
            @include('_._brick.select.faq.lvl_1.index',['Faqs' => $faqs, 'Var' => $faq->faq_id])
        @endcomponent
        <div class="paragraph"></div>
        <div class="content-xs / Grey">Связать с:</div>
        @component('zADMIN.PAGE._wrap.select.faqs.index')
            @component('zADMIN._wrap.select.faqs')
                @include('_._brick.select.faq.edit.index',['Faqs' => $faqs,'Var' => $faq])
            @endcomponent
        @endcomponent
    @endcomponent


</div>
