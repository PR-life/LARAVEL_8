@extends('zJJ.zJS._shema.index')
@section('title')Javascript @endsection




@push('js-bottom-link')
	<script src="{{ mix('/js/skill/OXOY.js') }}"></script>
@endpush


@section('content')
  
<div id="Solar" class="void x-bg / margin top" style="--oX: 0; --oY: 0;">

    @include('zJJ.zJS.lego.sapfir.Grid')
    @include('zJJ.zJS.lego.sapfir.css')

    
    
 
    
    
    
<script>
        

        // Array.from(
        //   document.querySelectorAll('.Solar'),
        //   function(el){
        
        // 	el.addEventListener('mousemove',function(e){
        // 	  el.style.setProperty('--oX', e.clientX);
        // 	  el.style.setProperty('--oY', e.clientY);
        // 	//   el.style.setProperty('--oX', e.clientX - el.offsetLeft);
        // 	//   el.style.setProperty('--oY', e.clientY - el.offsetTop);
        // 	});
        
        //   });
        
        //   window.requestAnimationFrame(function() {
        //      scrolling(e);
        //      isScrolling = false;
        //     });
    
    // function kkkkk(e) {
    //    if (isScrolling == false) {
    //       window.requestAnimationFrame(function() {
    //          scrolling(e);
    //          isScrolling = false;
    //         });
    //     }
    //     isScrolling = true;
    // };
    
    
</script>
     
     
@endsection