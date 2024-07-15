<div class="void-m">


    @component('zADMIN._wrap.form._shell.Lang', ['id' => 'nameTag_2'. (class_basename($tag))])
        @component('zADMIN._wrap.form._shell.x_hr')
            @slot('css', 'Form / vol-Abs')
            @slot('nameId','Name_2')
            @slot('name','name_2')
            {{$tag->name_2 ?? old('name_2')}}
        @endcomponent
        <div class="none on">
        @component('zADMIN._wrap.form._shell.x_hr')
            @slot('css', 'Form / vol-Abs')
            @slot('nameId','en_Name_2')
            @slot('name','en_name_2')
            {{$tag->en_name_2 ?? old('en_name_2')}}
        @endcomponent
        </div>
    @endcomponent



    @component('zADMIN._wrap.form._shell.x_hr')
        @slot('css', 'Form / vol-Abs')
        @slot('nameId','Name_3')
        @slot('name','name_3')
        {{$tag->name_3 ?? old('name_3')}}
    @endcomponent

    @component('zADMIN._wrap.form._shell.x_hr')
        @slot('css', 'Form / vol-Abs')
        @slot('nameId','Name_4')
        @slot('name','name_4')
        {{$tag->name_4 ?? old('name_4')}}
    @endcomponent


    @component('zADMIN._wrap.form._shell.x_hr')
        @slot('css', 'Form / vol-Abs')
        @slot('nameId','Name_5')
        @slot('name','name_5')
        {{$tag->name_5 ?? old('name_5')}}
    @endcomponent

    @component('zADMIN._wrap.form._shell.x_hr')
        @slot('css', 'Form / vol-Abs')
        @slot('nameId','Name_6')
        @slot('name','name_6')
        {{$tag->name_6 ?? old('name_6')}}
    @endcomponent


</div>