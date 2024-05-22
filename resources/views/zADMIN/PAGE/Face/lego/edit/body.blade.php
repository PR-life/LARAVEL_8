<div class="paragraph"></div>
<div class="flex cross-s / space-left">
	<a class="Ico -XL ico-20051538 / flex cI cC / ml-2" href="{{route('admin.plura.face.edit',$face->id)}}">
		<span class="Ico block">
			@svg('pen')
		</span>
	</a>
	<div>
		<div class="h1">{{$face->surname}} {{$face->name}} {{$face->patronymic}}</div>
		<input type="hidden" name="surname" value="{{$face->surname}}">
		<input type="hidden" name="name" value="{{$face->name}}">
		<input type="hidden" name="patronymic" value="{{$face->patronymic}}">
		<div class="paragraphX2"></div>
	</div>
</div>

<div class="paragraph"></div>
<div class="hill-s"></div>



@include('zADMIN.PAGE.Face.lego.edit.lego.tabs'.config('AS.view_switch'))

<div class="hill"></div>

@include('zADMIN.PAGE.Face.lego.edit.lego.note'.config('AS.view_switch'))

 
<div class="hill-s"></div>