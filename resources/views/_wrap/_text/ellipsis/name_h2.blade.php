<span class="block nowrap Ellipsis / {{$css ?? ''}}">
    {!!strip_tags($Var)!!}
    @isset($h2)
        <span class="{{$cssH2 ?? 'letterLow / Grey -c30 / b400'}}">{{$h2}}</span>
    @endisset
</span>