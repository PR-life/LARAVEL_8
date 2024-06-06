<div class="void / Form -S">

    {{-- @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms_slim')
        @slot('id', 'tag')
        @slot('name', 'Тег')
        @component('zADMIN.PAGE._wrap.select.tag.index')
            @include('_._brick.select.tag.edit.index',['Tags' => $tags, 'Var' => $item->tag_id])
        @endcomponent
    @endcomponent --}}


    {{-- <div class="paragraph-s / net"></div> --}}
    @include('zADMIN.PAGE.Item.lego.edit.lego.param')



    @component('_wrap.__.summary')
        {{-- @slot('cssName', 'content-m pl-4') --}}
        {{-- @slot('cssWrap', '') --}}
        {{-- @slot('cssContent', '') --}}
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'shema')
        @slot('name', 'шаблон')

        <div class="content-xxs Grey">Тизер</div>
        @include('zADMIN.PAGE._lego.edit.shema.teaser', ['Var' => $item])

        <div class="paragraph"></div>

        {{-- <div class="content-xxs Grey">Full</div> --}}
        {{-- @include('zADMIN.PAGE._lego.edit.shema.full') --}}

    @endcomponent


    {{-- @component('zADMIN._wrap._open.tool_FlaberSms')
        @slot('id', 'mockup')
        @slot('name', 'mockup')

        <div class="content-xxs Grey">Mockup</div>
        @include('zADMIN.PAGE._lego.edit.mockup.index', ['Var' => $item])

    @endcomponent --}}


</div>
