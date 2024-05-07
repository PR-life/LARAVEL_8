<div class="_wrap / flex cross-xs">
    <div class="_ico {{$cssIco ?? ''}}">
        <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M7.03662 10.2824L8.84245 12.0883L8.83079 12.0766L12.905 8.00244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
    <div class="_item">
        <div class="content-xs / {{$cssName ?? 'b600'}}">{{$name}}</div>
        <div class="paragraph-s"></div>
        <div class="content-xxs Grey / nowrap">{{$date ?? ''}}</div>
    </div>
</div>