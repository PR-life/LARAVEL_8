<div class="A / {{$css ?? ''}}" data-click data-css data-toggle='On'>
	<div class="_wrap -tail / relative">
		<div class="{{$cssContent ?? 'content-m -lineHeight'}} / Void / {{$cssLineClamp ?? 'lineClamp var-2 owl-lineClamp'}}">
			<p>
				{{strip_tags($Var, ['a','br'])}}
			</p>
		</div>
		<div class="Abs tail">@svg('tail')</div>
	</div>
	<div class="Preamble -row -S / right">
		<div class="content-s Grey">{{$Var_user_name ?? 'Николай Николаевич'}}</div>
	</div>
</div>
