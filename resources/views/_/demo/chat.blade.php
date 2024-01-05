<?php
	$Arr = [
			[
				'name' => '',
				'text' => 'без имени и даты и ответа',
				'dateAsCarbon' => '',
				'answer' => '',
				'answer_user_name' => '',
			],
			[
				'name' => 'Пушкин',
				'text' => 'Увидимся завтра?',
				'dateAsCarbon' => 'вчера',
				'answer' => 'Я болею',
				'answer_user_name' => 'Чехов',
			],
			[
				'name' => 'Пушкин',
				'text' => 'Можем посидеть в аптеке',
				'dateAsCarbon' => 'вчера',
				'answer' => '',
				'answer_user_name' => '',
			],
			[
				'name' => 'Вера',
				'text' => 'Будешь в магазине - захвати печеньки',
				'answer' => 'Печенька захвачены мой генерал!',
				'dateAsCarbon' => 'месяц назад',
				'answer_user_name' => 'Я',
				'strlen' => 'full'
			],
			[
				'name' => 'Администрация',
				'text' => 'Завтра с 08:00 по 12:00 проводится субботник. Явка всех изъявивших желание - обязательна. <br>Все не изъявившие желание обязаны соощить о своем нежелании руководителю подразделения и предоставить документальное подтверждение с обоснованием своего нежелания. Списки нежелающих будут предоставлены администрации и им ничего не будет. <br>Чего не будет - администрация решит позже.',
				'answer' => 'Ваш пароль должен содержать цифры, буквы, знаки пунктуации, завязку, развитие, кульминацию и неожиданный финал.',
				'dateAsCarbon' => '2 месяца назад',
				'answer_user_name' => 'Админ',
			],
	];

	// $Comments = (object) $Arr;
	$Comments = json_decode(json_encode($Arr));
?>


@foreach($Arr as $item)

	@component('_wrap.Q.index', ['css' => '-M'])
		@slot('name',$item['name'])
		@slot('date','вчера')
		<p>
			{!!strip_tags($item['text'], ['a','br'])!!}
		</p>
	@endcomponent

	@if(isset($item['answer']) && $item['answer'] != null)
		@component('_wrap.A.index', ['css' => '-M'])
			@slot('name',$item['answer_user_name'])
			@slot('date','вчера')
			<p>
				{{strip_tags($item['answer'], ['a','br'])}}
			</p>
		@endcomponent
	@endif

@endforeach