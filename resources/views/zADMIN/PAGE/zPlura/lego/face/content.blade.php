@component('zADMIN._wrap.form.plura', ['route' => route('admin.crm.face.update', $face->id), 'css' => '-face Plura'])
		
    <input type="hidden" name="published" value="{{$face->published}}">


    
    @component('zADMIN._brick.bar.v._wrap.index')
    <div class="paragraph"></div>
    <a class="flex cI cC / orb" href="{{route('admin.crm.face.edit', $face->id)}}" title="назад">
        <span class="Ico -S">@svg('arrow-2')</span>
    </a>
    <button class="flex cI cC / orb pointer / transparent" type="submit" title="обновить">
        <span class="Ico">@svg('change')</span>
    </button>
    @endcomponent





    @component('_Wrap.Plura.tabs')

        @slot('tab_1')
            @include('zADMIN.PAGE.zPlura.brick.data_person')
        @endslot
        @slot('tab_2')
            @include('zADMIN.PAGE.zPlura.brick.data_contact')
        @endslot
 
        @slot('tab_3')
            <div class="paragraphX2 / net"></div>
            @include('zADMIN.PAGE.zPlura.brick.size_jacket')
            @include('zADMIN.PAGE.zPlura.brick.size_female_up')
        @endslot		
        @slot('tab_4')
        <div class="paragraphX2 / net"></div>
            @include('zADMIN.PAGE.zPlura.brick.size_trouser')
            @include('zADMIN.PAGE.zPlura.brick.size_female_bottom')
        @endslot	
        @slot('tab_5')
            <div class="paragraphX2 / net"></div>
            @include('zADMIN.PAGE.zPlura.brick.size_shirt')
            @if($face->gender == 'female')
            @include('zADMIN.PAGE.zPlura.brick.size_shoes_female')
            @endif
        @endslot	
        @slot('tab_6')
            <div class="paragraphX2 / net"></div>
            @include('zADMIN.PAGE.zPlura.brick.size_hosiery')
        @endslot	
        @slot('tab_7')
            <div class="paragraphX2 / net"></div>
            @include('zADMIN.PAGE.zPlura.brick.size_jeans')
        @endslot	
        @slot('tab_8')
            @if($face->gender == 'male')
            <div class="paragraphX2 / net"></div>
            @include('zADMIN.PAGE.zPlura.brick.size_shoes')
            @endif
        @endslot	
    @endcomponent

    <div class="hill"></div>

    <div class="flex cross cI">

        <button class="Btn cC" type="submit">обновить</button>

        <div class="inline">
            <a href="{{route('admin.crm.face.edit', $face->id)}}" class="Btn5 cC5 / p transparent"> закрыть</a>
        </div>
    </div>

@endcomponent