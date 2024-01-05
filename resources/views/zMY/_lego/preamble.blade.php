<div class="Preamble -row">
    <div class="Ava">
        <img src="{{auth()->user()->avatar ?? '/images-0/ava_face.png'}}" alt="">
    </div>
    <div class="flex dC">
        <div class="hMin b600">{{auth()->user()->name}}</div>
        <div class="content"><a class="Grey" href="">изменить профиль</a></div>
    </div>
</div>