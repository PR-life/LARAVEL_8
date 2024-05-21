<div class="x-male / net void">
    <div class="h">Размер</div>
    <ul class="Sizes / flex -wrap">
        @for ($i = 44; $i < 69; $i+=2)
        <li>
            <input id="size_19050825_{{$i}}" class="none" name="size_trouser" value="{{ $i }}" type="radio" 
            {{$size->size_trouser == $i ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19050825_{{$i}}">{{ $i }}</label>
        </li>
        @endfor
    </ul>
</div>