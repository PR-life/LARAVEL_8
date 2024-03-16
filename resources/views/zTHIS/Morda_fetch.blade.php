@extends('zTHIS._shema.INDEX')

@push('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('js-bottom-solo')

{{-- https://www.youtube.com/watch?v=eKCD9djJQKc --}}
{{-- https://learn-codes.org/javascript/384313-javascript-fetch-method-in-laravel --}}

<script>
let form = document.getElementById('Form')

// form.addEventListener('submit',function(e){
// 	e.preventDefault();


// })



document.querySelector('#postFetchAPI').addEventListener('click', onClick);

let url = '/fetch';

//    let token = form.querySelector('input[name="_token"]').getAttribute('value');
	let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

	console.log(token)

   function onClick(){
      fetch(url, {
              headers: {
                  "Content-Type": "application/json",
                  "Accept": "application/json, text-plain, */*",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-TOKEN": token
                  },
              method: 'post',
              credentials: "same-origin",
              body: JSON.stringify({
                  name: 'Tushar',
                  number: '78987'
              })
          })
		  .then(function(response) {
			console.log(response);
            //  return response.json();
         })
        //   .then((data) => {
		// 	console.log(data);
		// 	console.log('redirect');
        //     //   window.location.href = redirect;
        //   })
          .catch(function(error) {
              console.log(error);
          });
   }


</script>
@endpush



@section('content')

<div class="flex">
	<a class="Btn cC / content" href={{route('js.morda')}}>js.morda</a>
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
	  
	<button id="postFetchAPI" class="Btn">FetchAPI</button>

</div>

 

@endsection