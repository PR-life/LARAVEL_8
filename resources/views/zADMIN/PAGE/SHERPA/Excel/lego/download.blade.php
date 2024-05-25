<h4>Скачать</h4>
<div class="paragraph"></div>
<div class="text">
    <ul class="-S slim-s / -Grey">
        @foreach($arrModel as $param)
            <li><a class="a" href="{{ route('admin.sherpa.excel.download', $param) }}">{{$param}}</a></li>
        @endforeach
    </ul>
</div>