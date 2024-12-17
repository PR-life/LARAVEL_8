<div class="paragraph-s"></div>

<div id="Photo" class="Swipe_1012 / / index relative">
	<div id="wrap_11121143" class="" data-localstorage localstorage-picking="wrap_11121143">
		<div class="Plot plot-h plot-item / index relative">
			<div class="Shell Roll_PC / _indexMin / index hidden">
				<div class="edge-1012163 Track W-100 {{count($photosSlider) ? '' : 'cC'}} / cross-1112">
					@if(count($photosSlider)) @foreach($photosSlider as $_foto)
					<img class="Img -cover" src="{{$_foto}}" alt="" />
					@endforeach @else
					<img class="Img -cover" src="/storage/item_images/{{$item->image}}" alt="" />
					@endif
				</div>
			</div>

			<div class="Abs -r -b / edge-rightS_PC">
				<div class="manager-11121409 / flex cross-xs space-m">
					<div class="_btn right pointer round">
						<span class="Ico -XL space / flex cI cC">
							<span class="rotate-l">
								<svg><use xlink:href="#svg-arrow"></use></svg>
							</span>
						</span>
					</div>
					<div class="_btn left pointer round">
						<span class="Ico -XL space / flex cI cC">
							<span class="rotate-r">
								<svg><use xlink:href="#svg-arrow"></use></svg>
							</span>
						</span>
					</div>
				</div>
			</div>

			<div class="Abs -rt / space-s edge-rightS_PC">
				@include('_CLOUD.xAsgrupp._manager.size_item_foto')
			</div>
		</div>

		@if(count($photosSlider))
		<div class="_thumbnails / flex cC cross-xxs / space"></div>
		@endif
	</div>
</div>
