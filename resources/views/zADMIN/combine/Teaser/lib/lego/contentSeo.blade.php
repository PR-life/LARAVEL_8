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