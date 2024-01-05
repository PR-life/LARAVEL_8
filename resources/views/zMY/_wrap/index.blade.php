<div class="I aura / Edge -SPC / {{$css ?? ''}}">
    <div class="Wings">
        <div class="_win -t">
            @include('zMY._lego.preamble')
        </div>
    </div>
    <div class="Reg -beyond x-feedback">

        <div class="_S / Goo_mbl -Bee -Z3">
            <div class="Goo -header">
                <div class="paragraphX2"></div>
                <ul class="menu -block -tagBeyond -roundS x-feedback / flexBeyond cross">
                    @include('zMY.menu.main')
                </ul>

                {{-- <div class="paragraphX2"></div>
                <div class="content b600 / family-2">{{__('MY/local.reviews_and_questions')}}</div>
                <div class="paragraph"></div>

                <ul class="menu -block -tagBeyond -roundS x-feedback / flexBeyond cross">
                    @include('zMY.menu.reviews')
                </ul> --}}

                <div class="paragraphX2"></div>
                <div class="content b600 / family-2">{{__('MY/local.author')}}</div>
                <div class="paragraph"></div>

                <ul class="menu -block -tagBeyond -roundS x-feedback / flexBeyond cross">
                    @include('zMY.menu.author')
                </ul>


                <div class="paragraphX2"></div>
                <div class="content b600 / family-2">{{__('MY/local.orders')}}</div>
                <div class="paragraph"></div>

                <ul class="menu -block -tagBeyond -roundS x-feedback / flexBeyond cross">
                    @include('zMY.menu.orders')
                </ul>


                <div class="paragraph"></div>
                <form action="{{route('logout')}}" method='POST'>
                    @csrf
                    <input class="none" type="submit">
                    <button class="x-btn-exit flex cI / -Grey / transparent orb-s pointer round-s">                        
                        <span class="Ico -XS / mr-1">@svg('exit')</span>
                        <span class="content-xs">выйти</span>
                    </button>
                </form>	



            </div>
        </div>
        <div class="_edge none_beyond"></div>
        <div class="W-100">
            <div class="void Edge">
                {{$slot}}
            </div>
        </div>

    </div>
</div>