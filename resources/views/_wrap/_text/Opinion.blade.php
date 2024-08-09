<div id="{{$id_09081655 ?? ''}}" class="Opinion">
    <div class="paragraphX2"></div>
    <div class="h">{{$title ?? 'Мнение эксперта'}}</div>
    <div class="paragraph"></div>
    <div class="Preamble -row">
        <div class="Ava">
            <img src="/images/ava/hello.jpg" alt="">
        </div>
        <div>
            <div class="Grey">
                <span class="content-xs / Ellipsis">
                    author
                </span>
            </div>
            <div class="content">заказывала торжественную церемонию</div>
        </div>
    </div>
    <div class="paragraph"></div>
    <div class="_wrap text / {{$css_wrap_09081655 ?? ''}}">
        {!!$slot!!}
    </div>
</div>  