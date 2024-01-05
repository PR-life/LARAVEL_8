<div class="relative">
	<div class="flex cI">
		<div class="content Grey">./</div>
		<input id="slug" class="-S / slug" type="text" name="slug" placeholder="slug" value="{{old('slug') ?? $Var}}">
	</div>
	@error('slug')
		<div class="content danger">{{$message}}</div>
	@enderror
	<div class="Abs -rt / pointer" onclick='slugEFW()'>
		<div class="Ico -XS / orb-s contentBox">
			@svg('change')
		</div>
	</div>
</div>

@include('_.js.lib.slug')
<script>
	function slugEFW() {
		slugRefresh(document.getElementById('inputName'),document.getElementById('slug'))
	}
</script>