<div class="{{$css ?? 'x-btn -Btn pointer round-xs'}} / none {{$class_contol}} -on" data-click data-node='body' data-css data-remove='{{$param}}' data-loop data-localstorage localstorage-name='body'>
    @isset($ico)
        <div class="Ico -S">@svg({{$ico}})</div>
    @endisset
    @isset($name)
        <span class="content-xs / noEvents">{{$name}}</span>
    @endisset
</div>