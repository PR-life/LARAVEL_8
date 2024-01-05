@extends('zJJ.PAGE.text._shema.index')


@section('content')
    <div class="flex cross space-left [ margin top ]">
        <div class="Blog">
            @include('component.Form.index', ['id' => 'Demo', 'css' => 'Form'])
        </div>
        <div class="Blog">
            <div class="I aura / void Edge -SPC [ margin top S ]">
            
                <div class="margin top S"></div>
                <form id="Form" class="Form Max vol-1" action="">
                    <div class="_shell Void">
                        <label for="testInputBD_2">Name</label>
                        <div class="_shell">
                            {{-- @include('zLara.PAGE._brick.text.input', ['Var' => 'testInputBD_2', 'placeholder' => 'placeholder: required', 'required' => true]) --}}
                            <div class="Abs Valid / none"></div>
                        </div>		
                    </div>
                    <div class="_shell">
                        {{-- @include('zLara.PAGE._brick.text.input') --}}
                    </div>
                    <div class="_shell vol-Abs">
                        {{-- @include('zLara.PAGE._brick.text.input', ['Var' => 'testInputBD_1']) --}}
                        <label class="Abs" for="testInputBD_1">vol-Abs</label>
                    </div>
                    <div class="_shell vol-Abs pure-inside">
                        {{-- @include('zLara.PAGE._brick.text.input', ['Var' => 'testInputBD_3']) --}}
                        <label class="Abs" for="testInputBD_3">vol-Abs pure-inside</label>
                    </div>
            
            
                    {{-- 'data' => 'minlength="5"' --}}
            
                    <div class="_shell">
                        <div class="_shell">
                            <input type="url" placeholder="placeholder: required-url" required>
                        </div>
                        <div class="paragraph-s"></div>
                        <div class="_shell">
                            <input type="url" value="value: required-url" required>
                            <div class="Abs Valid / none"></div>
                        </div>
                    </div>
            
                    <div class="_shell">
                        <input type="url" placeholder="placeholder: disabled-url" disabled="disabled">
                        <div class="paragraph-s"></div>
                        <input type="url" value="value: disabled-url" disabled="disabled">
                    </div>
            
                    <div class="_shell">
                        <input type="text" readonly="readonly" placeholder="placeholder: Im a read-only field">
                        <div class="paragraph-s"></div>
                        <input type="text" readonly="readonly" value="value: Im a read-only field">
                    </div>
            
            
                    <div class="_shell">
                        <div class="content" contenteditable="true">You can edit this text!</div>
                    </div>
            
                    <div class="_shell">
                        {{-- @include('zLara.PAGE._brick.text.input', ['Var' => 'testInputBD_1', 'css' => '-slug', 'placeholder' => 'Im a css: -slug']) --}}
                    </div>
            
            
                    <div class="_shell">
                        <input type="number" placeholder="number">
                        <div class="Abs Valid / none"></div>
                    </div>
            
                    <div class="_shell Void">
                        <label>Приминаются значения между 1 и 10</label>
                        <div class="_shell">
                            <input id="x0711" name="x0711" type="number" placeholder="1 до 10" min="1" max="10" value="13">
                            <div class="Abs Valid / none"></div>
                        </div>
                        <div class="_range / content-s" >Ваше значение <span class="none -ok b600">в норме</span><span class="none -not b600">выходит за границы</span></div>
                    </div>
            
 
                </form>
            </div>
            
        </div>
    </div>
@endsection