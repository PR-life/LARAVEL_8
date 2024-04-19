<input id="checkKontur" class="none" type="checkbox">
<label for="checkKontur" class="Hook -fix -bg -mbl -op"></label>
<div id="Kontur">
	<div class="Mbl aura relative H-100">
		<div class="Kontur">
			<div class="Scroll -auto HMax_mbl">
				<div class="_scr flex dC bC">
					<div>
						<div class="_head">
							@includeIf(isset($project) ? $project.'.mod.Kontur.head' : 'mod.Kontur.head')
						</div>
						<div class="paragraph"></div>
						<div class="_body">
							<div class="Edge-left Edge-right edge-left">
								@includeIf(isset($project) ? $project.'.mod.Kontur.body' : 'mod.Kontur.body')
							</div>
						</div>
					</div>
					<div class="_footer">
						@includeIf(isset($project) ? $project.'.mod.Kontur.footer' : 'mod.Kontur.footer')
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="kontur-open / -Black">
	<label for="checkKontur" class="block flex cC cI Ico -L highlight">
		<span class="_1 Ico">
			@svg({{$ico}})
		</span>
		<span class="_2 Ico -S none">
			@svg('close')
		</span>
	</label>
</div>
