{{-- <div class="Q {{$css26071858 ?? ''}} loop-{{$x_loop}} / {{$face26071858 ?? 'face face-padding face-top'}}" {!!$data26071858 ?? "data-click data-css data-toggle='On'"!!} itemprop="comment" itemscope itemtype="https://schema.org/Comment"> --}}

<div class="Q {{ $css26071858 ?? '' }} loop-{{ $x_loop }} / {{ $face26071858 ?? 'face face-padding face-top' }}"
    {!! $data26071858 ?? "data-click data-css data-toggle='On'" !!}
    itemprop="comment" itemscope itemtype="https://schema.org/Comment">

    {{-- <meta itemprop="datePublished" content="{{$Var->created_at}}"> --}}
    {{-- <time itemprop="datePublished" datetime="{{ $Var->created_at }}">
        {{ $Var->created_at->format('d.m.Y') }}
    </time> --}}

    <div class="_wrap / relative">
        <div class="content / Void / {{$lineClamp26071858 ?? 'lineClamp var-3 owl-lineClamp / pointer'}}" itemprop="text">
            {!!$slot!!}
        </div>

        
        @if($preambleWings ?? false)
        <div class="Wings net / noEvents">
            <div class="_win padding-26071907">
                <div class="flex / content-s Grey">
                    {{-- @if(!in_array($Var->name, ['Аноним', 'форма без имени', 'без имени']))
                        <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                            <span itemprop="name">{{$Var->name ?? 'аноним'}}</span>  
                        </span>
                        @include('_.elem.dot',['separator'=>'___'])
                    @endif          --}}
                    <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <span itemprop="name">
                            {{ $Var->getDisplayName() }}  
                        </span>    
                    </span>
                    {{-- <span class="Ellipsis line-1">{{$Var->dateAsCarbon->diffForHumans()}}</span> --}}
                </div>
            </div>
        </div>
        @endif
    </div>
    @if($preamble ?? false)
    <div class="Preamble -row -S">
        <div class="content-s / Grey">{!!$Var->name ?? 'аноним'!!}</div>
        @isset($date19121038)
        <div class="content-s / Grey">
            {{$Var->dateAsCarbon->diffForHumans()}}
        </div>
        @endisset
    </div>
    @endif
</div>

{{-- <div class="Q {{$css ?? ''}} / {{$face ?? 'face face-padding face-top'}}" {!!$noJs ?? "data-click data-css data-toggle='On'"!!}>
    <div class="_wrap / relative">
        <div class="content / Void / {{$cssLineClamp ?? 'lineClamp var-3 owl-lineClamp / pointer'}}">
            {!!$slot!!}
        </div>
    </div>
    @if(!isset($preamble))
    <div class="Preamble -row -S">
        <div class="content-s / Grey">{!!$name ?? 'аноним'!!}</div>
        @isset($date)
        <div class="content-s / Grey">
            {!!$date!!}
        </div>
        @endisset
    </div>
    @endif
</div> --}}