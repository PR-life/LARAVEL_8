<meta itemprop="datePublished" content="{{$Var->updated_at}}">
<div class="A">
	<div class="_wrap">
		<div class="content / lineClamp var-2 owl-lineClamp / Void" itemprop="text">
			{!!strip_tags($Var->answer, ['a','br','p'])!!}
		</div>
		<div class="Preamble dC eI / {{$cssPreamble ?? ''}}">
			<div class="author / flex" itemprop="author" itemscope itemtype="https://schema.org/Organization">
				<span class="Grey" itemprop="name">{{__('_const/this.LLC')}}</span>
			</div>
			{{-- <div class="author / flex">
				<span class="content-xs / Grey">{{$Var->answer_user_name ?? __('_const/zTHIS.answer_user_name')}}</span>
			</div> --}}
		</div>
	</div>
</div>