@if(optional($Var->parentCategory)->exists)
    @include('mod.Bread.parent-categories', ['Var' => $Var->parentCategory])
@endif

<li>
    <a href="/catalog/{{$Var->slug}}">{{ $Var->bread_name ?? $Var->name }}</a>
</li>


{{-- @if(isset($Var->parent))
    @include('mod.Bread.parent-products', ['Var' => $Var->parent])
@endif
<li>
    <a href="/catalog/{{$Var->slug}}">{{ $Var->bread_name ?? $Var->name }}</a>
</li> --}}
