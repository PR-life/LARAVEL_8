@isset($img)
<div class="Abs -all">
    <img class="H-100 W-100 / Img {{$cssImg ?? '-cover'}}" src="{{$img}}" alt="{{$alt ?? ''}}" loading="lazy">
</div>
@endisset