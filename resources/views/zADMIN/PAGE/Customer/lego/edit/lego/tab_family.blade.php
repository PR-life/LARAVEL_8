<div class="space void net">
    <div class="Min -w5 / net">
        @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Супруг'])
        @component('zADMIN.PAGE._wrap.select.face.index', ['id' => 'face'])
            @include('_._brick.select.face.edit.index',['Faces' => $faces, 'Var' => $face])
        @endcomponent
    </div>
    
    <div class="Min -w5">
        @include('zADMIN.PAGE._wrap.select.name',['Var' => 'Дети'])
        @component('zADMIN.PAGE._wrap.select.faces.all', ['id' => 'faces'])
            @include('_._brick.select.faces.edit.index',['Faces' => $faces, 'Var' => $face])
        @endcomponent
    </div>
</div>

{{-- <div class="paragraphЧ2"></div> --}}
{{-- <div class="Min -w5">
    @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Дети'])
    @component('zADMIN.PAGE._wrap.select.categories.main', ['id' => 'categories'])
        @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $face])
    @endcomponent
</div> --}}