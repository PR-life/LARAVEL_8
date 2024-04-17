@push('beeAfter')
    @component('zADMIN.PAGE._lego.filter.z_for_table.def', ['Var' => $Model, 'var' => $model ?? null])
        {!!$slot ?? ''!!}
    @endcomponent
    <div class="paragraph"></div>
@endpush