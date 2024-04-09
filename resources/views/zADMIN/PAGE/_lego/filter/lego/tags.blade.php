<div class="Select">
	<select class="Min -w3" name="tag_id">
		<option class="default" selected value> -- tag -- </option>
		@foreach($tags as $_tag)
			<option value="{{$_tag->id}}" {{$_tag->id == ($_GET["tag_id"] ?? null) ? ' selected' : ''}}>
				{{$_tag->name}}
			</option>
		@endforeach
	</select>
</div>