<div class="x-male / net void">
<div class="h">Размер</div>
<ul class="Sizes / flex -wrap">
    @for ($i = 37; $i < 51; $i++)
    <li>
        <input id="size_19020834_{{$i}}" class="none" name="size_hosiery" value="{{ $i }}" type="radio" 
        {{$size->size_hosiery == $i ? 'checked' : ''}}>
        <label class="Ico -XL / flex cI cC" for="size_19020834_{{$i}}">{{ $i }}</label>
    </li>
    @endfor
</ul>
</div>