<div class="x-male / net void">
<div class="h">Размер</div>
<ul class="Sizes / flex -wrap">
    @for ($i = 30; $i < 45; $i++)
    <li>
        <input id="size_19020836_{{$i}}" class="none" name="size_jeans" value="{{ $i }}" type="radio" 
        {{$size->size_jeans == $i ? 'checked' : ''}}>
        <label class="Ico -XL / flex cI cC" for="size_19020836_{{$i}}">{{ $i }}</label>
    </li>
    @endfor
</ul>
</div>