@if($Var->parentCategory)
    @if($Var->parentCategory->slug != 'tehnicheskie-gazy-i-oborydovanie')
        @include('mod.Bread.parent-categories', ['Var' => $Var->parentCategory])
    @else
        <li class="x-catalog">
            <a href="/catalog">Каталог 
                {{-- 22 ({{$Var->name}}) --}}
            </a>
        </li>
    @endif
@endif


@if($Var->slug == 'blog')
<li class="x-parent">
    <a href="/blog">Блог 
    </a>
</li>
@endif

@if($Var->slug != 'catalog' && $Var->slug != 'blog')

    <li class="x-parent {{$Var->slug}}">
        <a href="/catalog/{{ $Var->slug }}">{{ $Var->bread_name ?? $Var->name }}</a>
    </li>
    @else

    @if($Var->slug != 'blog')
    <li class="x-parent">
        <a href="/catalog">Каталог 
        </a>
    </li>
    @endif
 
@endif


{{-- @if($Var->parentCategory)
    @include('mod.Bread.parent-categories', ['Var' => $Var->parentCategory])
@endif

<li>
    <a href="{{ route('asgrupp.category.show', $Var->slug) }}">{{ $Var->bread_name ?? $Var->name }}</a>
</li> --}}
