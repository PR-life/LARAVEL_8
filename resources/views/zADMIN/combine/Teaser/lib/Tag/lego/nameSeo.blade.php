<a class="flex -wrap / h / cross-xs" href="{{ 

route('admin.'.mb_strtolower(class_basename($tag)).'.edit', ['tag' => $tag->id, 'shema' => $shema ?? null])

}}">

    <span>{!!$tag->name!!} <span class="EN content Grey -c30">{!!$tag->en_name!!}</span></span>

    @if($tag->name_2)
        <span class="content-xxs / space-s round-s / Grey replica">{!!$tag->name_2!!} <span class="EN Grey -c30">{!!$tag->en_name_2!!}</span></span>
    @endif
    @if($tag->name_3)
        <span class="content-xxs / space-s round-s / Grey replica">{!!$tag->name_3!!} <span class="EN Grey -c30">{!!$tag->en_name_3!!}</span></span>
    @endif
    @if($tag->name_4)
        <span class="content-xxs / space-s round-s / Grey replica">{!!$tag->name_4!!} <span class="EN Grey -c30">{!!$tag->en_name_4!!}</span></span>
    @endif
    @if($tag->name_5)
        <span class="content-xxs / space-s round-s / Grey replica">{!!$tag->name_5!!} <span class="EN Grey -c30">{!!$tag->en_name_5!!}</span></span>
    @endif
    @if($tag->name_6)
        <span class="content-xxs / space-s round-s / Grey replica">{!!$tag->name_6!!} <span class="EN Grey -c30">{!!$tag->en_name_6!!}</span></span>
    @endif
    @if($tag->name_7)
        <span class="content-xxs / space-s round-s / Grey replica">{!!$tag->name_7!!} <span class="EN Grey -c30">{!!$tag->en_name_7!!}</span></span>
    @endif
    @if($tag->name_8)
        <span class="content-xxs / space-s round-s / Grey replica">{!!$tag->name_8!!} <span class="EN Grey -c30">{!!$tag->en_name_8!!}</span></span>
    @endif
    {{-- @include('zADMIN.combine.Teaser._wrap.ellipsis.name_plus_h2',['Var' => $tag->name ?? $tag->created_at]) --}}
</a>
