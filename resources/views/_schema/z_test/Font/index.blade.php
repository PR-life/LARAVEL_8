<?
isset($Var) ? $text = $Var : $text = 'The quick brown fox jumps over the lazy dog'
?>

<div class="void">

    <div class="flex / bC">
        <div class="{{$css ?? 'h1'}} / b100">{{$text}}</div>
        <div class="content-s">100</div>
    </div>
    <div class="flex / bC">
        <div class="{{$css ?? 'h1'}} / b200">{{$text}}</div>
        <div class="content-s">200</div>
    </div>
    <div class="flex / bC">
        <div class="{{$css ?? 'h1'}} / b300">{{$text}}</div>
        <div class="content-s">300</div>
    </div>
    <div class="flex / bC">
        <div class="{{$css ?? 'h1'}} / b400">{{$text}}</div>
        <div class="content-s">400</div>
    </div>
    <div class="flex / bC">
        <div class="{{$css ?? 'h1'}} / b500">{{$text}}</div>
        <div class="content-s">500</div>
    </div>
    <div class="flex / bC">
        <div class="{{$css ?? 'h1'}} / b600">{{$text}}</div>
        <div class="content-s">600</div>
    </div>
    <div class="flex / bC">
        <div class="{{$css ?? 'h1'}} / b700">{{$text}}</div>
        <div class="content-s">700</div>
    </div>
    <div class="flex / bC">
        <div class="{{$css ?? 'h1'}} / b800">{{$text}}</div>
        <div class="content-s">800</div>
    </div>
    <div class="flex / bC">
        <div class="{{$css ?? 'h1'}} / b900">{{$text}}</div>
        <div class="content-s">900</div>
    </div>
</div>