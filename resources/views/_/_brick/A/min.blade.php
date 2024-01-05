<div class="A">
	<div class="_wrap">
		<div class="content / lineClamp var-2 owl-lineClamp / Void">
			<p>
				{!!strip_tags($Var->answer, ['a','br'])!!}
			</p>
		</div>
		<div class="Preamble dC eI / {{$cssPreamble ?? ''}}">
			<div class="author / flex">
				<span class="Grey">{{$User->name ?? $Var->answer_user_name}}</span>
				{{-- <span class="Grey">{{$User->name}}ООО Альфа-Мед,</span> --}}
			</div>
			<div class="author / flex">
				<span class="content-xs / Grey">{{$User->user_par_1 ?? ''}}</span>
				{{-- <span class="content-xs / Grey">{{$Var->city}}представитель компании</span> --}}
			</div>
		</div>
	</div>
</div>