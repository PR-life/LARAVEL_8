{{-- <div class="Poster -space dC bC {{$css ?? ''}} / _indexMax">
    <div class="_edge / content-s">{!!$Var->prev_h1!!}</div>
    <div class="_edge">
        <div class="p">{!!$Var->prev_p!!}</div>
        <div class="h2 b600">{!!$Var->prev_h2!!}</div>
    </div>
</div> --}}

<div class="Poster -center vol-yota {{$css ?? '-Black round'}} / _indexMax index">
	{{-- <div class="Abs -all {{$cssBg ?? ''}}"></div> --}}
	<div class="Font -S / space">
		<div class="paragraph"></div>
		@isset($Var->prev_h1)
		<div class="_h -vw / b600 center-text">{!!$Var->prev_h1!!}</div>
		@endisset
		@isset($Var->prev_h2)
		<div class="_h2 -vw / b600 center-text">{!!$Var->prev_h2!!}</div>
		@endisset
		@isset($Var->prev_p)
		<div class="paragraph-s"></div>
		<div class="_p p center-text">{!!$Var->prev_p!!}</div>
		@endisset
	</div>			
</div>


{{-- <div class="Poster index / {{isset($h) ? '-h' : ''}} {{isset($p) ? '-p' : ''}} {{$css ?? ''}}">


	<h1>543643</h1>
	<div class="Abs -all {{$cssBg ?? ''}}"></div>
	<div class="_body Font / _indexMax">
		@isset($h)
		<div class="_h / {{$cssH ?? ''}}">{!!$h!!}</div>
		@endisset
		@isset($h2)
		<div class="_h2 / {{$cssH2 ?? ''}}">{!!$h2!!}</div>
		@endisset
		@isset($p)
			@if(isset($h) || isset($h2))
				<div class="paragraph go-s"></div>
			@endif
		<div class="_p -mbl / {{$cssP ?? ''}}">{!!$p!!}</div>
		@endisset
	</div>			
</div> --}}