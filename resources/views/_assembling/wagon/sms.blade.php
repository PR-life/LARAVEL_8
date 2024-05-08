@component('_assembling.wagon.shema.index',['css03051331'=>'vol-QA Family-OpenSans round-l'])
	<div class="W-100 relative pointer / _Axon Axon">
		@include('_assembling.lego.Preamble')
		<div class="off / space-left">
			<div class="content">
				{!!strip_tags($Var->sms)!!}
			</div>
		</div>
		<div class="none on _wrap / x-Talk_block x-Talk_minH555">
			@include('_._brick.A.min',['Var' => $Var, 'User' => $User ?? null, 'cssPreamble' => 'x-Talk_none'])
		</div>
		<div class="x-Talk_none / Abs -rb W-100 / flex cI bC / _Axon / space noevents">
			<div class="Axon">
				<div class="none on">
					<div class="Ico -XS">
						@svg('close')
					</div>
				</div>
			</div>
			<div class="Ico"></div>
			<div class="Axon">
				<div class="off">
					<div class="Ico">
						@svg('responses-2')
					</div>
				</div>
			</div>
		</div>
	</div>
@endcomponent