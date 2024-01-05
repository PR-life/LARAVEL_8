<div class="w-100 / Gardener -bar">
	<div class="flex cI">
		<div class="content Grey">./</div>
		<input id="slug" class="-S / slug" type="text" name="slug" placeholder="slug" value="{{old('slug') ? old('slug') : date("Y-m-j-h-i")}}">
	</div>
	@error('slug')
		<div class="content danger">{{$message}}</div>
	@enderror
</div>

@include('_.js.lib.slug')
<script>
	slugAuto(document.getElementById('name'),document.getElementById('slug'))
</script>