{{-- indexCheck_19122024.blade copy.php --}}
<div class="Q {{ $css26071858 ?? '' }} loop-{{ $x_loop }} / {{ $face26071858 ?? 'face face-padding face-top' }}"
    {!! $data26071858 ?? "data-click data-css data-toggle='On'" !!}
    itemprop="comment" itemscope itemtype="https://schema.org/Comment">
    <div class="_wrap / relative">
        <div class="content {{ $content26071858 ?? '' }} / Void / {{$lineClamp26071858 ?? 'lineClamp var-3 owl-lineClamp / pointer'}}" itemprop="text">
            {!!$slot!!}
        </div>
        @if($preambleWings ?? false)
        <div class="Wings net / noEvents">
            <div class="_win padding-26071907">
                <div class="flex / content-s Grey">
                    <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                        <span itemprop="name">
                            {{ $Var->getDisplayName() }}  
                        </span>    
                    </span>
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
            {{$Var->human_readable_date}}
        </div>
        @endisset
    </div>
    @endif
</div>