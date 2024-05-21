<div class="_shell _name @error('surname') Error @enderror / vol-Abs label-insideInput">
    <input id="inputSurname" type="text" name="surname" value="{{$face->surname ?? old('surname')}}" {!!$readonly ?? 'placeholder="."' !!}>
    <label class="Abs" for="inputSurname">@svg('plus')Фамилия</label>
    @error('surname')
        <div class="Abs / Nameplate -rt">{{ $errors->first('surname') }}</div>
    @enderror
</div>

<div class="_shell _name @error('name') Error @enderror / vol-Abs label-insideInput / net">
    <input id="inputName" type="text" name="name" value="{{$face->name ?? old('name')}}" {!!$readonly ?? 'placeholder="."' !!}>
    <label class="Abs" for="inputName">@svg('plus')Имя</label>
    @error('name')
        <div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
    @enderror
</div>

<div class="_shell _name @error('patronymic') Error @enderror / vol-Abs label-insideInput">
    <input id="inputPatronymic" type="text" name="patronymic" value="{{$face->patronymic ?? old('patronymic')}}" {!!$readonly ?? 'placeholder="."' !!}>
    <label class="Abs" for="inputPatronymic">@svg('plus')Отчество</label>
    @error('patronymic')
        <div class="Abs / Nameplate -rt">{{ $errors->first('patronymic') }}</div>
    @enderror
</div>