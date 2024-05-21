<div class="x-male / net void">
<div class="h">Размер</div>
<ul class="Sizes / flex -wrap">
    @for ($i = 37; $i < 51; $i++)
    <li>
        <input id="size_19020826_{{$i}}" class="none" name="size_shirt" value="{{ $i }}" type="radio" 
        {{$size->size_shirt == $i ? 'checked' : ''}}>
        <label class="Ico -XL / flex cI cC" for="size_19020826_{{$i}}">{{ $i }}</label>
    </li>
    @endfor
</ul>
</div>