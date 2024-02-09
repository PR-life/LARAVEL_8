@component('_assembling.QA.wagon.wrap.index', ['css' => $css ?? null])

<div class="Preamble -row / space">
	<div class="Ava -S">
		<img src="/images/ava/hello.jpg" alt="">
	</div>
	<div class="Grey">
		<span class="content-xs / Ellipsis">
			{{$Var->date}}
		</span>
	</div>
</div>


<div class="_close / space-left">
	<div class="paragraph-s"></div>
	@include('_._brick.Q.min',['Var' => $Var])
	<div class="paragraph"></div>
</div>


<div class="_open -flex / flex dC bC / space-left space-right">

	<div class="content Void">
		<div class="paragraph"></div>
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

	<div class="paragraph"></div>

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
@endcomponent





