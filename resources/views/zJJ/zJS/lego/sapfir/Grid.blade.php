<div class="Grid x8 / Solar -bg -solo / hidden relative index">
    {{-- <div class="Solar index hidden"> --}}
    <div class="_solar / Abs -all / _indexMin">
        {{-- <div class="_bg"></div> --}}
    </div>
    {{-- </div> --}}

    @for($i = 0; $i < 40; ++$i)
    <div class="item / relative / Bg55 -gif">
        <div class="solar-bg"></div>
        @include('_._brick.img.squere', ['css' => 'W-100'])
    </div>
    @endfor
</div>