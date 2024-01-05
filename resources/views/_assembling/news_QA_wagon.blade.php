<div class="Wagon {{$css ?? ''}}" data-item="{{$loop}}" data-year="{{$Var->year ?? ''}}">
<div class="relative {{isset($Var->answer) ? "pointer" : ""}} OnOff Off" data-css data-toggle='Off On' {{isset($Var->answer) ? "data-click" : ""}}>
	<div class="Preamble dC / space-left space-topX2 space-bottom">
		<div class="content-s Grey">
			{{$Var->date}}
		</div>
	</div>

	<div class="_close">
		@if(isset($Var->img))
		<div class="Bg -gif / hidden relative">
			<img class="W-100 / Abs" src="{{$Var->img}}" alt="">
			@include('_._brick.img.280x150')
		</div>
		@endif
		<div class="space-left">
			@if(isset($Var->title))
			<div class="_h">
				{!!$Var->title!!}
			</div>
			@endif
			@if(isset($Var->sms))
				<div class="paragraph-s"></div>
				<div class="content">
					{!!$Var->sms!!}
				</div>
			@endif
		</div>
	</div>
 
	<div class="_open -flex / flex dC bC / space-left space-right">
		<div class="content Void space-top">
			@if(isset($Var->answer))
			<p>{!!$Var->answer!!}</p>
			@endif
		</div>
		<div class="Preamble dC eI / space-right">
			@if(isset($Var->author))
			<div class="author">
				{{$Var->author}}
			</div>
			@endif
			@if(isset($Var->authorInfo))
			<div class="content-xs">
				{{$Var->authorInfo}}
			</div>
			@endif
		</div>
	</div> 
	@if(isset($Var->answer))
	<div class="Abs -rb W-100 / flex cI bC / space noevents">
		<div>
			<div class="_Open">
				<div class="Ico -XS">
					@svg('close')
				</div>
			</div>
		</div>
		<div class="Ico"></div>
		<div>
			<div class="_Close">
				<div class="Ico">
					@svg('responses-2')
				</div>
			</div>
		</div>
	</div>
	@endif
</div>	
</div>


