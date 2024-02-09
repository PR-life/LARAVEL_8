<div class="Wagon -w {{$css ?? ''}} / item">
<div class="W-100 relative pointer OnOff Off" data-click data-css data-toggle='Off On'>

	<div class="Preamble dC / space-left space-topX2">
		<div class="Ava"></div>
		<div class="paragraph-s"></div>
		<div class="author">
			<span class="Ellipsis">
				{{$Var->name}}
			</span>
		</div>
		<div class="paragraph"></div>
	</div>

	{{-- <div class="_close / space-left">
		<div class="paragraph-s"></div>
		<div class="content">
			{{$Var->sms}}
		</div>
	</div> --}}
 
	<div class="_close / space-left">
		@include('_._brick.Q.min',['Var' => $Var])
	</div>
 
	
	<div class="_open -flex / flex dC bC / space-left space-right">
		<div class="content Void">
			<p>{{$Var->answer}}</p>
			<div class="paragraph"></div>
		</div>
		<div class="Preamble dC eI / space-right">
			<div class="author / Grey">
				{{$Var->author}}
			</div>
			@if(isset($Var->authorInfo))
			<div class="content-xs / Grey">
				{{$Var->authorInfo}}
			</div>
			@endif
		</div>
	</div> 
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
</div>	
</div>


