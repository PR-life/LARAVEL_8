@component('_wrap.step.Tochka.line')
    @slot('step', '1')
    {{-- <div class="content b600">шаг 1</div> --}}
    <div class="paragraph"></div>
    <div class="content">В какую группу?</div>
    <div class="paragraph"></div>
    @include('zADMIN.PAGE.Face.lego.create.check_crm')
    <div class="paragraphX2"></div>
@endcomponent

@component('_wrap.step.Tochka.line')
    @slot('step', '2')
    <div class="paragraph"></div>
    <div class="_shell _h  @error('surname') Error @enderror / vol-Abs label-insideInput">
        <input id="inputSurname" type="text" name="surname" value="{{old('surname')}}" placeholder="." @error('surname') autofocus @enderror>
        <label class="Abs" for="inputSurname"><span class="_svg / round-s contentBox">@svg('plus')</span>Фамилия...</label>
    </div>
    @error('surname')
        <div class="content-s / Error -text">{{ $errors->first('surname')}}</div>
    @enderror
    <div class="paragraph"></div>

    {{-- <div class="paragraph"></div> --}}
    <div class="_shell _h  @error('name') Error @enderror / vol-Abs label-insideInput">
        <input id="inputName" type="text" name="name" value="{{old('name')}}" placeholder="." @error('name') autofocus @enderror>
        <label class="Abs" for="inputName"><span class="_svg / round-s contentBox">@svg('plus')</span>Имя...</label>
    </div>
    @error('name')
        <div class="content-s / Error -text">{{ $errors->first('name')}}</div>
    @enderror
    <div class="paragraph"></div>


    <div class="_shell _h  @error('patronymic') Error @enderror / vol-Abs label-insideInput">
        <input id="inputPatronymic" type="text" name="patronymic" value="{{old('patronymic')}}" placeholder="." @error('patronymic') autofocus @enderror>
        <label class="Abs" for="inputPatronymic"><span class="_svg / round-s contentBox">@svg('plus')</span>Отчество...</label>
    </div>
    @error('patronymic')
        <div class="content-s / Error -text">{{ $errors->first('patronymic')}}</div>
    @enderror
    <div class="paragraphX2"></div>



@endcomponent

{{-- @component('_wrap.step.Tochka.line')
    @slot('step', '3')
    <div class="paragraph"></div>
    <div class="_shell @error('name') Error @enderror / vol-Abs">
        <input id="inputName" type="text" name="name" value="{{old('name')}}" placeholder="." @error('name') autofocus @enderror>
        <label class="Abs" for="inputName"><span class="_svg / round-s contentBox">@svg('plus')</span>шаг 3: укажите Имя</label>
    </div>
    @error('name')
        <div class="content-s / Error -text">{{ $errors->first('name')}}</div>
    @enderror
    <div class="paragraphX2"></div>
@endcomponent --}}

@component('_wrap.step.Tochka.line')
    @slot('step', '3')
    {{-- <div class="content b600">шаг 1</div> --}}
    <div class="paragraph"></div>

    <div class="flex cross">
        <div class="content">пол</div>
        {{-- <div class="paragraph"></div> --}}
        @include('zADMIN.PAGE.Face.lego.create.check_gender')
    </div>
    <div class="paragraphX2"></div>
@endcomponent

@component('_wrap.step.Tochka.line')
    @slot('step', '4')
    {{-- <div class="content b600">шаг 4</div> --}}
    <div class="paragraph"></div>
    <button class="content-m / transparent a" type="submit">Сохранить и продолжить</button>
    {{-- <div class="content">Сохранить и продолжить</div> --}}
    <div class="paragraph"></div>
@endcomponent