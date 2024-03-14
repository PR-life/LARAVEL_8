@extends('_shema.vol-lite')

@section('content')

<div class="Pente aura / HMinVar / Space -v">


    <div class="Wings">
		<div class="_win -t">
			<?php echo '<pre class="content">'; ?> 
				<?php print_r($_GET)  ?> 
			<?php echo '</pre>'; ?> 
		</div>
	</div>

    <form method="get"> 
		<input type="text" name='name' placeholder="Name">'
		<input type="text" name='email' placeholder="Email">'
		<button>Sendet</button>
	  </form>
	  


</div>

 

@endsection