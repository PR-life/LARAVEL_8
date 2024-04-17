<div class="{{$css ?? 'x-btn -Btn pointer round-xs'}} / {{$class_contol}} -off" data-click data-node='body' data-css data-add='{{$param}}' data-loop data-localstorage localstorage-name='body'>
    @isset($ico)
        <div class="Ico -S">@svg({{$ico}})</div>
    @endisset
    @isset($name)
    <span class="content-xxs / noEvents">{{$name}}</span>
    @endisset
</div>