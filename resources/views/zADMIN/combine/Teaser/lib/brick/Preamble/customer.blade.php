<a class="Preamble -row" href="{{ route('admin.customer.edit', $Var->id) }}">
    <span class="Ava {{$Var->avatar ? '' : '-def'}}"></span>
    <span class="block">
        <span class="block author b600">
            @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $Var->surname . ' ' . $Var->name . ' ' . $Var->patronymic])
        </span>
        <span class="__mt content-xxs block / Grey">{{$Var->country}} {{$Var->city}}</span>
    </span>
</a>