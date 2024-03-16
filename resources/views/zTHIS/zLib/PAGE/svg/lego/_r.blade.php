<div class="net">
    <div class="content b600">DEF</div>
    <div class="paragraph"></div>
 </div>

 @component('zTHIS/zLib/PAGE/svg/wrap/shell', ['css' => 'net'])
    @slot('name','svg_min')
    {!!$svg['svg_min']!!}
 @endcomponent
 @component('zTHIS/zLib/PAGE/svg/wrap/shell')
    @slot('name','svg_lvl_1')
    {!!$svg['svg_lvl_1']!!}
 @endcomponent
 @component('zTHIS/zLib/PAGE/svg/wrap/shell')
    @slot('name','svg_market')
    {!!$svg['svg_market']!!}
 @endcomponent
 @component('zTHIS/zLib/PAGE/svg/wrap/shell')
    @slot('name','svg_social')
    {!!$svg['svg_social']!!}
 @endcomponent
 @component('zTHIS/zLib/PAGE/svg/wrap/shell')
    @slot('name','svg_messenger')
    {!!$svg['svg_messenger']!!}
 @endcomponent
 @component('zTHIS/zLib/PAGE/svg/wrap/shell')
    @slot('name','svg_manager')
    {!!$svg['svg_manager']!!}
 @endcomponent
 @component('zTHIS/zLib/PAGE/svg/wrap/shell')
    @slot('name','svg_chat')
    {!!$svg['svg_chat']!!}
 @endcomponent



 <div class="paragraphX2"></div>
 <div class="net">
    <div class="content b600">Admin</div>
    <div class="paragraph"></div>
 </div>
 @component('zTHIS/zLib/PAGE/svg/wrap/shell', ['css' => 'net'])
 @slot('name','svg_admin')
 {!!$svg['svg_admin']!!}
@endcomponent