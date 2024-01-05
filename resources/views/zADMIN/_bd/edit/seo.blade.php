@component('zADMIN.PAGE._wrap.Lang.index', ['css' => 'net'])
<div class="_shell">
	<textarea name="title" placeholder="title">{{$Var->title ?? old('title')}}</textarea>
</div>
<div class="_shell / _open">
	<textarea name="title_en" placeholder="title_en">{{$Var->title_en ?? old('title_en')}}</textarea>
</div>
@endcomponent
@component('zADMIN.PAGE._wrap.Lang.index')
<div class="_shell">
	<textarea name="description" placeholder="description">{{isset($Var->description) ? $Var->description : old('description')}}</textarea>
</div>
<div class="_shell / _open">
	<textarea name="description_en" placeholder="description_en">{{isset($Var->description_en) ? $Var->description_en : old('description_en')}}</textarea>
</div>
@endcomponent
@component('zADMIN.PAGE._wrap.Lang.index')
<div class="_shell">
	<textarea name="keywords" placeholder="keywords">{{$Var->keywords ?? old('keywords')}}</textarea>
</div>
<div class="_shell / _open">
	<textarea name="keywords_en" placeholder="keywords_en">{{$Var->keywords_en ?? old('keywords_en')}}</textarea>
</div>
@endcomponent