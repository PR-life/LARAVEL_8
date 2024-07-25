<div class="void / Form -S">
    @component('_wrap.__.summary')
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'wrapLegoParam')
        @slot('name', 'param')

        <div class="_shell _h1 / vol-Abs / net">
            <input id="inputCss" type="text" name="css" value="{{$lego->css ?? old('css')}}" placeholder=".">
            <label class="Abs" for="inputCss">@svg('plus')css</label>
        </div>

    @endcomponent
</div>
