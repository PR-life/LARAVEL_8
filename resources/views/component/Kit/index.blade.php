<div class="Wagon -w -wM -h / Bone / index">
	<div>
		<div class="Wings -mbl">
			<div class="_win -t / space-left">
				{!!$info ?? ''!!}
				<div class="h -lineHeight">{!!$name!!}</div>
				<div class="paragraph"></div>
			</div>
		</div>
		<div class="_head / relative">
			<div class="paragraph-s"></div>
			@include('component.Kit._lego.head')

			<div class="paragraphX2"></div>
			<div class="paragraph"></div>
			<div class="x-line / space-left space-right"></div>		
			<div class="paragraph"></div>	
			<div class="paragraphX2"></div>

		</div>
		<div class="_body / space-left">
			
			<div class="space-right">
				<dl class="-left -dot -lineHeight x-grey / Void [ margin bottom XS ]">
					{{$dl}}
				</dl>
			</div>

			<div class="paragraph"></div>	
			{!!$description ?? ''!!}

			<div class="hill-s"></div>
		</div>
	</div>
	<div class="_footer / flex dC eC / space-left">
		<div class="paragraph"></div>
		<div class="_bg">
			<div class="paragraph"></div>
			<div class="text">
				@isset($check)
				<ul class="ul -XS vol-check c2 slim">
					{{$check}}
				</ul>
				@endisset
				@isset($param)
				<div class="paragraph"></div>
				<div class="space-left">
					<ul class="ul -S -out vol-dot / net slim">
						{{$param}}
					</ul>
				</div>
				@endisset
				{{$slot}}
			</div>
			<div class="paragraph"></div>
		</div>
	</div>
</div>