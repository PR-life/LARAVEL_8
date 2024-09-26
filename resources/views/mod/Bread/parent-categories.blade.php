@if($Var->parentCategory)
    @if($Var->parentCategory->slug != 'tehnicheskie-gazy-i-oborydovanie')
        @include('mod.Bread.parent-categories', ['Var' => $Var->parentCategory])
    @else
        <li>
            <a href="/catalog">Каталог 
                {{-- 22 ({{$Var->name}}) --}}
            </a>
        </li>
    @endif
@endif


@if($Var->slug != 'catalog')
        {{-- @if($Var->slug != 'tehnicheskie-gazy-i-oborydovanie') --}}
            <li class="x-parent {{$Var->slug}}">
                <a href="/catalog/{{ $Var->slug }}">{{ $Var->bread_name ?? $Var->name }}</a>
            </li>
        {{-- @endif --}}
    @else
    <li class="x-parent">
        <a href="/catalog">Каталог 
            {{-- 33 --}}
        </a>
        {{-- <a href="{{ url($Var->full_slug) }}">{{ $Var->bread_name ?? $Var->name }}</a> --}}
    </li>
@endif

{{-- @if($Var->parentCategory)
    @include('mod.Bread.parent-categories', ['Var' => $Var->parentCategory])
@endif

<li>
    <a href="{{ route('asgrupp.category.show', $Var->slug) }}">{{ $Var->bread_name ?? $Var->name }}</a>
</li> --}}
