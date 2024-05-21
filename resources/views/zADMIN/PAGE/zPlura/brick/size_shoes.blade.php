<div class="x-male / net void">
    <div class="h">Размер</div>
    <ul class="Sizes / flex -wrap">
        @for ($i = 39; $i < 45; $i+=.5)
        <li>
            <input id="size_19050838_{{$i}}" class="none" name="size_shoes" value="{{ $i }}" type="radio" 
            {{$size->size_shoes == $i ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19050838_{{$i}}">{{ $i }}</label>
        </li>
        @endfor
        @for ($i = 45; $i < 48; $i++)
        <li>
            <input id="size_19050838_{{$i}}" class="none" name="size_shoes" value="{{ $i }}" type="radio" 
            {{$size->size_shoes == $i ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19050838_{{$i}}">{{ $i }}</label>
        </li>
        @endfor
    </ul>
</div>