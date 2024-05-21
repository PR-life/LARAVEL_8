<div class="x-female / net void">
    <div class="h">Размер {{$size->size_shoes}}</div>
    <ul class="Sizes / flex -wrap">
        @for ($i = 38; $i < 42; $i+=.5)
        <li>
            <input id="size_19051646_{{$i}}" class="none" name="size_shoes" value="{{ $i }}" type="radio" 
            {{$size->size_shoes == $i ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19051646_{{$i}}">{{ $i }}</label>
        </li>
        @endfor
        @for ($i = 42; $i < 45; $i++)
        <li>
            <input id="size_19051646_{{$i}}" class="none" name="size_shoes" value="{{ $i }}" type="radio" 
            {{$size->size_shoes == $i ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19051646_{{$i}}">{{ $i }}</label>
        </li>
        @endfor
    </ul>
</div>