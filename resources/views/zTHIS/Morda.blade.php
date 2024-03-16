@extends('zTHIS._shema.INDEX')


@push('js-bottom-solo')

@endpush



@section('content')

<div class="flex">
	<a class="Btn -S cC / content" href={{route('js.morda')}}>js</a>
	<a class="Btn -S cC / content" href={{route('lib.morda')}}>lib</a>
</div>


<div class="Pente aura Edge -PC / HMinVar / Space -v">


    <div class="Wings">
		<div class="_win -t">
			<?php echo '<pre class="content">'; ?> 
				<?php print_r($_GET)  ?> 
			<?php echo '</pre>'; ?> 
		</div>
	</div>

    <form id="Form" class="Form void" method="get"> 
		@csrf()
		<input type="text" name='name' placeholder="Name">'
		<input type="text" name='email' placeholder="Email">'
		<button class="Btn">Send</button>
    </form>
	  

</div>

 

@endsection