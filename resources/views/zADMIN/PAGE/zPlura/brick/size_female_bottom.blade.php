<div class="x-female / net void">
    <div class="h">Размер</div>
    <ul class="Sizes / flex -wrap">
        @for ($i = 38; $i < 53; $i++)
        <li>
            <input id="size_19051634_{{$i}}" class="none" name="bottom_size" value="{{ $i }}" type="radio" 
            {{$size->bottom_size == $i ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19051634_{{$i}}">{{ $i }}</label>
        </li>
        @endfor
    </ul>
</div>