<?php
	$Arr = [
			[
				'name' => '',
				'sms' => 'без имени и даты и ответа',
				'dateAsCarbon' => '',
				'answer' => '',
				'answer_user_name' => '',
			],
			[
				'name' => 'Пушкин',
				'sms' => 'Увидимся завтра?',
				'dateAsCarbon' => 'вчера',
				'answer' => 'Я болею',
				'answer_user_name' => 'Чехов',
			],
			[
				'name' => 'Пушкин',
				'sms' => 'Можем посидеть в аптеке',
				'dateAsCarbon' => 'вчера',
				'answer' => '',
				'answer_user_name' => '',
			],
			[
				'name' => 'Вера',
				'sms' => 'Будешь в магазине - захвати печеньки',
				'answer' => 'Печенька захвачены мой генерал!',
				'dateAsCarbon' => 'месяц назад',
				'answer_user_name' => 'Я',
				'strlen' => 'full'
			],
			[
				'name' => 'Администрация',
				'sms' => 'Завтра с 08:00 по 12:00 проводится субботник. Явка всех изъявивших желание - обязательна. <br>Все не изъявившие желание обязаны соощить о своем нежелании руководителю подразделения и предоставить документальное подтверждение с обоснованием своего нежелания. Списки нежелающих будут предоставлены администрации и им ничего не будет. <br>Чего не будет - администрация решит позже.',
				'answer' => 'Ваш пароль должен содержать цифры, буквы, знаки пунктуации, завязку, развитие, кульминацию и неожиданный финал.',
				'dateAsCarbon' => '2 месяца назад',
				'answer_user_name' => 'Админ',
			],
	];

	// $Comments = (object) $Arr;
	// $Comments = json_decode(json_encode($Arr));

 

?>



{{-- /home/a/alfamedllc/oogway.store/resources/views/mod/Talk/Sms80.blade.php --}}

@include('mod.Talk.Sms80', ['Var'=> []])



{{-- 
@foreach($Arr as $item)

	 
		$Var = (object) $item;
 

	@include('_assembling.wagon_TalkQA')
 

@endforeach --}}