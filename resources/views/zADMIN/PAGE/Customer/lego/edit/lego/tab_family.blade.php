{{-- <div class="content-xs / Grey -c50 / higlight slctn noEvents net">Супруг</div>
<div class="paragraph net"></div> --}}
 
<div class="Min -w5 / net">
    @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Супруг'])
    @component('zADMIN.PAGE._wrap.select.face.index', ['id' => 'faces'])
        @include('_._brick.select.face.edit.index',['Faces' => $faces, 'Var' => $face])
    @endcomponent
</div>
{{-- <div class="paragraphЧ2"></div> --}}
{{-- <div class="Min -w5">
    @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Дети'])
    @component('zADMIN.PAGE._wrap.select.categories.main', ['id' => 'categories'])
        @include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $face])
    @endcomponent
</div> --}}