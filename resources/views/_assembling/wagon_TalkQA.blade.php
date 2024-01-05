<div class="Wagon -w -wL -hS / item teaser vol-QA / Family-OpenSans round-l hidden">
	<div class="W-100 relative pointer OnOff Off" data-click data-css data-toggle='On Off'>
		<div class="Preamble / space-left space-topX2">
			<div class="{{$cssPreamble ?? ''}}">
				<div class="Ava -def"></div>
				<div class="author / flex">
					<span class="Grey">
						{{$Var->name}}
					</span>
				</div>
				<div class="paragraph"></div>
			</div>
		</div>
		<div class="_close / space-left">
			<div class="content">
				{{strip_tags($Var->sms)}}
			</div>
		</div>
		<div class="_open">
			<div class="paragraph none x-Talk"></div>
			@include('_._brick.A.min',['Var' => $Var, 'User' => $User ?? null, 'cssPreamble' => 'x-Talk'])
		</div>
		<div class="_ico x-Talk / Abs -rb W-100 / flex cI bC / space noevents">
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