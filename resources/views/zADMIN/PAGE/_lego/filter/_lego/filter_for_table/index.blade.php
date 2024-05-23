@push('beeAfter')
    @component('zADMIN.PAGE._lego.filter.z_for_table.def', ['Var' => $Model, 'var' => $model ?? null, 'hidden_btn_full' => $hidden_btn_full ?? null])
        {!!$slot ?? ''!!}
    @endcomponent
    <div class="paragraphX2"></div>
@endpush