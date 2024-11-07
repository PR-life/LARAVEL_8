@component('mod.Slider.form', [
    'id' => $id,
    'route' => 'sms.storequiz',
    'css28061029' => '-move visible-1 -Quiz / Abs -all',
    ])
	@slot('params')
        <input type="hidden" name="label" value="quiz">
        <input type="hidden" name="reachgoal_id" value="formQuiz">
    @endslot
 

	@slot('manager')
        {!!$manager!!}
    @endslot

    {!!$slot!!}
@endcomponent
