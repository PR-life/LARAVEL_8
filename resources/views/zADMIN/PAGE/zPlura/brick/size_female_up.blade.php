<div class="x-female / net void">
    <div class="h">Размер</div>
    <ul class="Sizes / flex -wrap">
        @for ($i = 38; $i < 53; $i++)
        <li>
            <input id="size_19051612_{{$i}}" class="none" name="up_size" value="{{ $i }}" type="radio" 
            {{$size->up_size == $i ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19051612_{{$i}}">{{ $i }}</label>
        </li>
        @endfor
    </ul>
</div>