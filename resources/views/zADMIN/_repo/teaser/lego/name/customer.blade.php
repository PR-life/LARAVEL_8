<a class="Preamble -row / Customer" href="{{ route('admin.crm.face.edit', $Var->id) }}">
    <span class="Ava -M {{$Var->avatar ? '' : '-def'}}"></span>
    <span class="block / pl-2">
        <span class="block / content-m b500">
            @include('_wrap._text.ellipsis.name',['Var' => $Var->surname . ' ' . $Var->name . ' ' . $Var->patronymic])
        </span>
        <span class="__mt content-xs block / Grey">{{$Var->country}} {{$Var->city}}</span>
    </span>
</a>