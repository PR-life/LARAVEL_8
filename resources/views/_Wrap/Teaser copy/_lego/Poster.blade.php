<?php 
	$x_16051719 = $Var->prev_h1 || $Var->prev_h2 || $Var->prev_p;
?>


<a class="Edge block highlight" href="{{$VarRoute}}">
	<div class="block edge-s">

		@if ($Var->text && !$x_16051719)
			<div class="_edge content">
				{!!strip_tags($Var->text)!!}
			</div>
			<div class="paragraph-s"></div>
		@endif


		<div class="inline relative index">
			<img src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7" width="560" height="315">
			<div class="Abs -all / x-bg / round"></div>`

			
				@if ($Var->prev_image)
					<div class="Abs -all / flex cC cI / Bg -gif / round-s hidden x-img">
						<img class="Min -h100 MaxWImg_auto" src="{{ asset('storage/' . $Var->prev_image) }}">
					</div>
					@if ($x_16051719)
					<div class="Veil -All">
						<div class="_mid"></div>
					</div>
					@endif
				@endif

				@if ($x_16051719)
					<div class="Poster -center / _indexMax index">
						<div class="Font / space">
							@if($Var->prev_h1)
								<div class="_h -vw / b600 center-text">{!!$Var->prev_h1!!}</div>
							@endif
							@if($Var->prev_h2)
								<div class="paragraph"></div>	
								<div class="_h2 -vw / b600 center-text">{!!$Var->prev_h2!!}</div>
							@endif
							@if($Var->prev_p)
							<div class="paragraph-s"></div>	
							<div class="_p p center-text">{!!$Var->prev_p!!}</div>
							@endif
						</div>			
					</div>
				@endif


		</div> 
	</div>

	@if ($Var->text && $x_16051719)
		<div class="paragraph-s"></div>
		<div class="_edge content">
			{!!strip_tags($Var->text)!!}
		</div>
	@endif
</a>
