@extends('zJJ.zJS._shema.index')
{{-- @extends('zLara._shema.lib.index') --}}

{{-- @section('top')
    <div class="paragraphX2"></div>
    <div class="I aura">
        @include('zLara.menu.hang.js')
    </div>
@endsection --}}



@section('content')


<div class="x-09021035 BGvejNY / W-100 relative index [ margin top ]">


	<div id="x_08021806" class="Abs _indexMax">
		<ul class="menu -bGvejNY -M / space-m">
			<li class="item"><span>55555</span></li>
			<li class="item"><span>55555</span></li>
			<li class="item"><span>55555</span></li>
		</ul>
	</div>

	<div class="Abs -all / bGvejNY-dot"></div>
	

	<div class="Abs -all / bGvejNY-img _indexMin"></div>
	
</div>


<style>

.BGvejNY {
	--BGvejNY-bg-w:8vmin;
	--BGvejNY-bg-w-hover:7vmin;
}



.x-09021035 {
	height: 1000px;
	background-color: #222
}

 
.menu.-bGvejNY {
	--fontMenu:var(--rem-h1);
	--ulol-line:var(--rem-h1);
	--c-menu:#fff;	
	--c-menu-hover:#fff;
}

.menu.-bGvejNY .item > * {
	transition: color 400ms ease;
}
 

.menu.-bGvejNY:hover {
	--c-menu:rgba(255,255,255,.1)
}



/* .bGvejNY {
  --x-23111034_1: 10px;
  --x-23111034_2: calc(var(--x-23111034_1) + 1px);
  height: 600px;
  background: linear-gradient(90deg,transparent var(--x-23111034_1),transparent 1%) 50%, linear-gradient(#f9fafb var(--x-23111034_1),transparent 1%) 50%,rgba(0,0,0,.24);
  background-size: var(--x-23111034_2) var(--x-23111034_2);
} */


#x_08021806 li {margin-bottom: 1rem}

.bGvejNY-dot {
  background-image: radial-gradient(rgba(255, 255, 255, 0.1) 10%, transparent 9%);
  background-position: 0% 0%;
  background-size: var(--BGvejNY-bg-w) var(--BGvejNY-bg-w);
  transition:opacity 800ms ease, 
   			background-size 800ms ease,
    		background-position 800ms ease;

}

.bGvejNY-img {
	background-image: url("https://images.unsplash.com/photo-1492496913980-501348b61469?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2574&q=80");
	background-position: center 40%;
  	background-size: 110vmax;
	opacity: 0.15;
	transition: opacity 800ms ease,
		background-size 800ms ease,
		background-position 800ms ease;
}

#body[data-active-index="0"] .bGvejNY-dot {
  background-position: 0% -25%;
}
#body[data-active-index="1"] .bGvejNY-dot {
  background-position: 0% -50%;
}
#body[data-active-index="2"] .bGvejNY-dot {
  background-position: 0% -75%;
}

#body[data-active-index="0"] .bGvejNY-img {
  background-position: center 45%;
}

#body[data-active-index="1"] .bGvejNY-img {
  background-position: center 50%;
}

#body[data-active-index="2"] .bGvejNY-img {
  background-position: center 55%;
}

#menubody[data-active-index="3"] .bGvejNY-img {
  background-position: center 60%;
}


 
#x_08021806:hover ~ .bGvejNY-img {
  background-size: 100vmax;
  opacity: 0.1;
}


#x_08021806:hover ~ .bGvejNY-dot {
  background-size: var(--BGvejNY-bg-w-hover) var(--BGvejNY-bg-w-hover);
  opacity: 0.5;
}

</style>
	



<script>

const menuField = document.getElementById("x_08021806");

Array.from(menuField.querySelectorAll(".item"))
  .forEach((item, index) => {
    item.onmouseover = () => {
      body.dataset.activeIndex = index;
    }
  });

</script>
 
@endsection