<div class="_shell {{$css ?? 'Form / vol-Abs'}} / {{isset($cssNet) ? 'net' : ''}}">
    <input id="input{{$nameId}}" type="text" name="{{$name}}" value="{{$slot}}" placeholder=".">
    <label class="Abs familySamolet" for="input{{$nameId}}">@svg('plus'){{$name}}</label>
</div>