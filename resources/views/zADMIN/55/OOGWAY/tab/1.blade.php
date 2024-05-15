@component('_wrap.Flaber.admin.edit')

@slot('flaber')
    @include('zADMIN.OOGWAY._lego.itemInfo')
@endslot




<div class="paragraph"></div>
<div class="Details -S -line / x-margin x-ico_level_2">
    @if($oogway->text_tz)
    <details>
        <summary class="-S">           
            <svg viewBox="-1 -2 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.76562 2.4375H2.51562C1.5 2.4375 0.6875 3.27539 0.6875 4.26562V7.10938C0.6875 8.125 1.5 8.9375 2.51562 8.9375H3.9375V9.14062C3.9375 9.72461 3.48047 10.1562 2.92188 10.1562H2.71875C2.0332 10.1562 1.5 10.7148 1.5 11.375V12.5938C1.5 13.2793 2.0332 13.8125 2.71875 13.8125H2.92188C5.48633 13.8125 7.59375 11.7305 7.59375 9.14062V4.26562C7.59375 3.27539 6.75586 2.4375 5.76562 2.4375ZM6.375 9.14062C6.375 11.0449 4.82617 12.5938 2.92188 12.5938H2.71875V11.375H2.92188C4.14062 11.375 5.15625 10.3848 5.15625 9.14062V7.71875H2.51562C2.16016 7.71875 1.90625 7.46484 1.90625 7.10938V4.26562C1.90625 3.93555 2.16016 3.65625 2.51562 3.65625H5.76562C6.0957 3.65625 6.375 3.93555 6.375 4.26562V9.14062ZM13.4844 2.4375H10.2344C9.21875 2.4375 8.40625 3.27539 8.40625 4.26562V7.10938C8.40625 8.125 9.21875 8.9375 10.2344 8.9375H11.6562V9.14062C11.6562 9.72461 11.1992 10.1562 10.6406 10.1562H10.4375C9.75195 10.1562 9.21875 10.7148 9.21875 11.375V12.5938C9.21875 13.2793 9.75195 13.8125 10.4375 13.8125H10.6406C13.2051 13.8125 15.3125 11.7305 15.3125 9.14062V4.26562C15.3125 3.27539 14.4746 2.4375 13.4844 2.4375ZM14.0938 9.14062C14.0938 11.0449 12.5449 12.5938 10.6406 12.5938H10.4375V11.375H10.6406C11.8594 11.375 12.875 10.3848 12.875 9.14062V7.71875H10.2344C9.87891 7.71875 9.625 7.46484 9.625 7.10938V4.26562C9.625 3.93555 9.87891 3.65625 10.2344 3.65625H13.4844C13.8145 3.65625 14.0938 3.93555 14.0938 4.26562V9.14062Z" fill="currentColor"></path></svg>

            <span class="ml-2">Техническое задание</span><i></i>
        </summary>
        <div class="text x-Blog">
            {!!$oogway->text_tz!!}
        </div>
    </details>
    @endif
    @if($oogway->text_result)
    <details>
        <summary class="-S">
            <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.71875 10.9688C2.0332 10.9688 1.5 11.5273 1.5 12.1875C1.5 12.873 2.0332 13.4062 2.71875 13.4062C3.37891 13.4062 3.9375 12.873 3.9375 12.1875C3.9375 11.5273 3.37891 10.9688 2.71875 10.9688ZM2.71875 6.90625C2.0332 6.90625 1.5 7.46484 1.5 8.125C1.5 8.81055 2.0332 9.34375 2.71875 9.34375C3.37891 9.34375 3.9375 8.81055 3.9375 8.125C3.9375 7.46484 3.37891 6.90625 2.71875 6.90625ZM2.71875 2.84375C2.0332 2.84375 1.5 3.40234 1.5 4.0625C1.5 4.74805 2.0332 5.28125 2.71875 5.28125C3.37891 5.28125 3.9375 4.74805 3.9375 4.0625C3.9375 3.40234 3.37891 2.84375 2.71875 2.84375ZM14.0938 3.45312H5.96875C5.74023 3.45312 5.5625 3.65625 5.5625 3.85938V4.26562C5.5625 4.49414 5.74023 4.67188 5.96875 4.67188H14.0938C14.2969 4.67188 14.5 4.49414 14.5 4.26562V3.85938C14.5 3.65625 14.2969 3.45312 14.0938 3.45312ZM14.0938 7.51562H5.96875C5.74023 7.51562 5.5625 7.71875 5.5625 7.92188V8.32812C5.5625 8.55664 5.74023 8.73438 5.96875 8.73438H14.0938C14.2969 8.73438 14.5 8.55664 14.5 8.32812V7.92188C14.5 7.71875 14.2969 7.51562 14.0938 7.51562ZM14.0938 11.5781H5.96875C5.74023 11.5781 5.5625 11.7812 5.5625 11.9844V12.3906C5.5625 12.6191 5.74023 12.7969 5.96875 12.7969H14.0938C14.2969 12.7969 14.5 12.6191 14.5 12.3906V11.9844C14.5 11.7812 14.2969 11.5781 14.0938 11.5781Z" fill="currentColor"></path></svg><span class="ml-2">Итоги</span><i></i>
        </summary>
        <div class="text x-Blog">
            {!!$oogway->text_result!!}
        </div>
    </details>
    @endif
</div>
<div class="paragraphX2"></div>
 
<div class="Article">
    <div class="text">
        {!!$oogway->text!!}
    </div>
</div>

<div class="paragraphX2"></div>





@endcomponent