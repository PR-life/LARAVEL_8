<div id="Message_save" class="Message On / flex dC / space void / index noEvents {{$css ?? ''}}">
    <div class="Sms -w wM / Jolt -anime / round yesEvents">
        <div class="_wrap / round space">
            <div class="space relative">
                <div class="Abs -rt / Close {{$cssClose ?? '-white -an'}}" data-click data-css data-node='Message_save' data-remove='On'></div>
                <div class="void">
                    @isset($heading)
                    <div class="h4 b600">{{ $heading }}</div>
                    @endisset
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let Message_save = document.getElementById('Message_save')
Message_save.addEventListener("animationend", (event) => {
    Message_save.classList.remove('On')
})
</script>