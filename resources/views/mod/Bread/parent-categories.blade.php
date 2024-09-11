@if($Var->parentCategory)
    @include('mod.Bread.parent-categories', ['Var' => $Var->parentCategory])
@endif

<li class="x-parent {{$Var->slug}}">
    <a href="{{ url($Var->full_slug) }}">{{ $Var->bread_name ?? $Var->name }}</a>
</li>


{{-- @if($Var->parentCategory)
    @include('mod.Bread.parent-categories', ['Var' => $Var->parentCategory])
@endif

<li>
    <a href="{{ route('asgrupp.category.show', $Var->slug) }}">{{ $Var->bread_name ?? $Var->name }}</a>
</li> --}}
