<div class="x-female / net void">
    <div class="h">Размер</div>
    <ul class="Sizes / flex -wrap">
        @for ($i = 36; $i < 53; $i++)
            @if ($i % 2 == 0) 
                <li>
                    <input id="size_19051612_{{$i}}" class="none" name="up_size" value="{{ $i }}" type="radio" 
                    {{$size->up_size == $i ? 'checked' : ''}}>
                    <label class="Ico -XL / flex cI cC" for="size_19051612_{{$i}}">{{ $i }}</label>
                </li>
            @endif
        @endfor
    </ul>
</div>