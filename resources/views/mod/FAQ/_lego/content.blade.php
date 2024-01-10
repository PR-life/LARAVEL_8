@isset($item->h1)
<div class="h b500">{!!$item->h1!!}</div>
@endisset
{!!$item->text ?? ''!!}