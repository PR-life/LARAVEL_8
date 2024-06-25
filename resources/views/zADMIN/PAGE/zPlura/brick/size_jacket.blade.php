<div class="x-male / net void">
    <div class="h">Размер</div>
    <ul class="Sizes / flex -wrap">
        @for ($i = 44; $i < 69; $i+=2)
        <li>
            <input id="size_18051739_{{$i}}" class="none" name="size_jacket" value="{{ $i }}" type="radio" 
            {{$size->size_jacket == $i ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_18051739_{{$i}}">{{ $i }}</label>
        </li>
        @endfor
    </ul>
    <div class="h">Рост</div>
    <ul class="Sizes / flex -wrap">
        <li>
            <input id="size_19050815_С" class="none" name="size_jacket_height" value="С" type="radio" 
            {{$size->size_jacket_height == 'С' ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19050815_С">С</label>
        </li>
        <li>
            <input id="size_19050815_R" class="none" name="size_jacket_height" value="R" type="radio" 
            {{$size->size_jacket_height == 'R' ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19050815_R">R</label>
        </li>
        <li>
            <input id="size_19050815_L" class="none" name="size_jacket_height" value="L" type="radio" 
            {{$size->size_jacket_height == 'L' ? 'checked' : ''}}>
            <label class="Ico -XL / flex cI cC" for="size_19050815_L">L</label>
        </li>
    </ul>
    <div class="h">Полнота</div>
    <ul class="Sizes / flex -wrap">
        @for ($i = 4; $i < 9; $i++)
            @if($i != 5 && $i != 8)
            <li>
                <input id="size_18051740_{{$i}}" class="none" name="size_jacket_exhaustiveness" value="{{ $i }}" type="radio" 
                {{$size->size_jacket_exhaustiveness == $i ? 'checked' : ''}}>
                <label class="Ico -XL / flex cI cC" for="size_18051740_{{$i}}">{{ $i }}</label>
            </li>
            @endif
        @endfor
    </ul>
    
</div>
 
 