<div class="Teaser / Void -slim / space-hL Edge">
	@include('_pattern.Teaser.News.paper.index',['Var' => $Var, 'routeName' => 'imago.morda'])
	<div class="paragraph"></div>
	<div class="flex cross-xs edge-left">
		<div class="flex cI">
			<div class="Ico mr-1">
				@svg('responses')
			</div>
			<span class="content -lineHeight">{{$Var->comments_count}}</span>
		</div>
		<div class="flex cI">
			<div class="Ico mr-1">
				@svg('vote')
			</div>
			<span class="content -lineHeight">{{$Var->liked_users_count}}</span>
		</div>
	</div>
	@if ($Var->answer != '' && $Var->answer != null)
		<div class="paragraph net"></div>
		<div class="Chat -hidden / Edge">
			{{-- @include('_pattern.Answer.index',['Var' => $Var]) --}}
			@include('_._brick.A.index',['Var' => $Var])
		</div>
	@endif  
</div>