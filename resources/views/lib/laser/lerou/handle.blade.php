<div class="lightsaber__handle / relative">
    <div class="lightsaber__light-left / Abs">

        {{-- <div class="lightsaber__spark up"></div>
        <div class="lightsaber__spark up"></div>
        <div class="lightsaber__spark up"></div>
        <div class="lightsaber__spark down"></div>
        <div class="lightsaber__spark down"></div>
        <div class="lightsaber__spark down"></div> --}}

        <div class="_ripple lightsaber__ripple / Abs"></div>
        <div class="_ripple lightsaber__ripple / Abs"></div>
    </div>
    <div class="lightsaber__light-right / Abs">
{{-- 
        <div class="lightsaber__spark up"></div>
        <div class="lightsaber__spark up"></div>
        <div class="lightsaber__spark up"></div>
        <div class="lightsaber__spark down"></div>
        <div class="lightsaber__spark down"></div>
        <div class="lightsaber__spark down"></div> --}}

        <div class="_ripple lightsaber__ripple / Abs"></div>
        <div class="_ripple lightsaber__ripple / Abs"></div>
    </div>
</div>


<style>





.lightsaber--on
.lightsaber__light-left {
	 transform: rotate(-90deg) scale(1, 1);
}
 .lightsaber--on
 .lightsaber__light-right {
	 transform: rotate(90deg) scale(1, 1);
}



.lightsaber__handle {
	 width: var(--LaserBeam-w-handle);
	 height: var(--LaserBeam-h-handle);
}




 .lightsaber__light-left,
 .lightsaber__light-right {
	 z-index: -1;
	 /* content: ''; */
	 /* position: absolute; */
	 width: var(--LaserBeam-h-handle);
	 height: 6px;

	 border-top-right-radius: 100% 4px;
	 border-bottom-right-radius: 100% 4px;

	 /* background: linear-gradient(
			var(--LaserBeam-bg-1) 0%,
			var(--LaserBeam-bg-white) 14%,
			var(--LaserBeam-bg-white) 47%,
			var(--LaserBeam-bg-white) 90%,
			var(--LaserBeam-bg-1) 100%
		); */

	transform-origin: 0 0;
	transition: transform .3s;
	animation: small-glow 2s infinite;
}




.lightsaber__light-left {
	 right: -29px;
	 top: 5px;
	 transform: rotate(-90deg) scale(0, 1);
}


 .lightsaber__light-right {
	 right: -35px;
	 top: 32px;
	 transform: rotate(90deg) scale(0, 1);
}






</style>