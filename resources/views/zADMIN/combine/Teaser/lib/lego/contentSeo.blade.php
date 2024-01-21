<span class="content-s / Grey / v-Meta_description -off">
    {!!$Var->description ?? '<em>description</em>'!!}
</span>

<div class="EN">
    <div class="paragraph"></div>
    <span class="content-m b600 / v-Meta_title -off">
        @include('zADMIN.combine.Teaser._wrap.ellipsis',['Var' => $Var->en_title ?? '<em>en_title</em>'])
    </span>
    <div class="paragraph-s"></div>
    <span class="content-s / Grey / v-Meta_description -off">
        {!!$Var->en_description ?? '<em>en_description</em>'!!}
    </span>
</div>
 
@isset($Var->canonical)
<div class="paragraph"></div>
<span class="content-s / space-xs"> 
    {{-- <span class="content-xxs mr-1 / Grey -c50">canonical:</span> --}}
    <span class="inline">
        <span class="Badge -solo -green -S / mr-1">
            <span class="ced">canonical:</span>
        </span>
    </span>
    <span class="Grey -c30">{{$Var->canonical}}</span>
</span>
@endisset