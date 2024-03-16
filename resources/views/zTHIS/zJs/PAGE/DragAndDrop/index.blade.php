@extends('zTHIS.zJs._shema.INDEX')

@push('js-bottom-link')
	<script src="{{ mix('/js/skill/Grab.js') }}"></script>
@endpush

@push('js-bottom-solo')
<script>

</script>
@endpush


@push('milk')
 
@endpush



@section('content')

 
<div class="Space -v">
	<div class="Blog aura margin bottom">
		<h1>DragAndDrop</h1>
		<div class="padding top bottom">

			
			<div id="src_copy" class="content [ padding top bottom XS ]" draggable="true">Copy</div>
			<div id="dest_copy" class="content [ padding top bottom XS ]">Copy Drop Zone</div>
			
			<div id="src_move" class="content [ padding top bottom XS ]" draggable="true">Move</div>
			<div id="dest_move" class="content [ padding top bottom XS ]">Move Drop Zone</div>
			
			
			
			 
			
			<script>
			
				const src_copy = document.getElementById('src_copy');
				src_copy.ondragstart = dragstart_handler;
				src_copy.ondragend = dragend_handler;
				const dest_copy = document.getElementById('dest_copy');
				dest_copy.ondrop = drop_handler;
				dest_copy.ondragover = dragover_handler;
			
				const src_move = document.getElementById('src_move');
				src_move.ondragstart = dragstart_handler;
				src_move.ondragend = dragend_handler;
				const dest_move = document.getElementById('dest_move');
				dest_move.ondrop = drop_handler;
				dest_move.ondragover = dragover_handler;
			
			
			
				function dragstart_handler(ev) {
					console.log("dragStart");
					// Change the source element's background color to signify drag has started
					ev.currentTarget.style.border = "dashed";
					// Добавить id целевого элемента в объект передачи данных
					ev.dataTransfer.setData("text", ev.target.id);
					// Tell the browser both copy and move are possible
					ev.effectAllowed = "copyMove";
				}
			
			
				function dragover_handler(ev) {
					console.log("dragOver");
					// Change the target element's border to signify a drag over event
					// has occurred
					ev.currentTarget.style.background = "lightblue";
					ev.preventDefault();
				}
			
				function drop_handler(ev) {
					console.log("Drop");
					ev.preventDefault();
					// Get the id of drag source element (that was added to the drag data
					// payload by the dragstart event handler)
					var id = ev.dataTransfer.getData("text");
					// Only Move the element if the source and destination ids are both "move"
					if (id == "src_move" && ev.target.id == "dest_move")
						ev.target.appendChild(document.getElementById(id));
					// Copy the element if the source and destination ids are both "copy"
					if (id == "src_copy" && ev.target.id == "dest_copy") {
						var nodeCopy = document.getElementById(id).cloneNode(true);
						nodeCopy.id = "newId";
						ev.target.appendChild(nodeCopy);
					}
				}
			
			
				function dragend_handler(ev) {
					console.log("dragEnd");
					// Restore source's border
					ev.target.style.border = "solid black";
					// Remove all of the drag data
					ev.dataTransfer.clearData();
				}
			</script>
			
			
			
			<style>
			  div {
				/* margin: 0rem;
				padding: 2rem; */
			  }
			  #src_copy, #src_move  {
				color: blue;
				border: 5px solid black;
				width: 300px;
				height: 50;
			  }
			  #dest_copy, #dest_move {
				border: 5px solid blue;
				width: 300px;
				height: 50;
			  }
			</style>
			
			
			
			
			
			
			
			
			
			
			
			{{-- 
			
			<div id="Drag"  draggable="true"
							ondragstart="dragStart()"
							ondrag="drag()"
							ondragend="dragEnd()"
			></div>
			
			<img src="https://avatars.mds.yandex.net/get-marketpic/1692414/pic39b08086e8fb226dc530824f73059b98/orig" width="100" height="100"
			
				draggable="true"
				ondragstart="dragStart()"
				ondrag="drag()"
				ondragend="dragEnd()"
			>
			
			
			<div id="Box"></div>
			
			<div id="Area" class="margin top"
				ondragenter="dragEnter()"
				ondragover="return dragOver()"
				ondragleave="return dragLeave()"
				ondrop="drop()"
			></div>
			
			
			<script>
				
				const box = document.getElementById('Box');
				box.ondragenter = dragEnter;
				box.ondgarover = dragEnter;
				box.ondrop = drop;
			
			
				////
			
				function dragEnter(e){
					console.log('enter');
					console.log(e);
			
					e.stopPropagation(); // отмена всплытия - это требование данного метода
					e.preventDefault();
				}
				
				function drop(e){
					console.log('drop');
					console.log(e);
			
					e.stopPropagation(); // отмена всплытия - это требование данного метода
					e.preventDefault();
			
					let file = e.dataTransfer.files[0];
					let reader = new FileReader();
					reader.onload = function(e){
						let img = new Image();
						img.src = e.target.result;
						box.appendChild(img);
					};
			
			
					reader.readAsDataURL(file);
			
					// box.textContent = e.dataTransfer.getData('Text');
			
				}
			
			
			
				function dragOver(e){
					console.log('over');
					// console.log(e);
					return false;
				}
				function dragLeave(e){
					console.log('leave');
					// console.log(e);
					return false;
				}
			
			
				///
			
				function dragStart(){
					// console.log('start')
				}
				function drag(){
					// console.log('drag')
				}
				function dragEnd(){
					// console.log('end')
				}
			
			
			const Drag = document.getElementById('Drag')
			</script>
			
			
			
			
			
			
			
			
			
			
			
			
			<style>
			
				#Drag {
					width: 50px;
					height: 50px;
					border: 3px dotted grey;
				}
			
				#Box,
				#Area2,
				#Area {
					width: 200px;
					height: 200px;
					border: 3px dotted green;
				}
			</style>
			
			
			
			
			
			<div id="Area" class="margin top"
							ondragenter="dragEnter()"
							ondragover="return dragOver()"
							ondragleave="return dragLeave()"
							ondrop="drop()"
			></div>
			
			
			<div id="Area2" class="margin top"
							ondragenter="dragEnter()"
							ondragover="dragOver()"
							ondragleave="dragLeave()"
			></div> --}}
			



		</div>
	</div>
</div>


<div class="Plot -h"></div>

@endsection