@include('component.Form._brick.input.bd_min')
@include('component.Form._brick.input.spam')

<input type="hidden" name="label" value="callback">
<input type="hidden" name="reachgoal_id" value="formCallback">
<input type="hidden" name="param_1" value="Заказать обратный звонок">


@include('component.Form._inc.name',['label' => 'Введите имя<b></b>', 'cssInput' => 'round-s'])
<div class="paragraph"></div>

@include('component.Form._inc.phone',[
    'label' => 'Телефон...',
    'css' => 'label-insideInput / Anime vol-shake_hor',
    'cssInput' => 'round-s',
    'errorBag' => 'newCallBack',
    'required' => true
])