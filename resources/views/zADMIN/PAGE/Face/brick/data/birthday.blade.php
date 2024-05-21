<div class="flex cross">
    <div class="Min -w2">
        <div class="content">День:</div>
        <div class="paragraph-s"></div>
        <select name="day" id="day" class="form-control">
            <option value="">—</option>
            @foreach ($days as $day)
                <option value="{{ $day }}" {{ $selectedDay == $day ? 'selected' : '' }}>{{ $day }}</option>
            @endforeach
        </select>
    </div>
    <div class="Min -w2">
        <div class="content">Месяц:</div>
        <div class="paragraph-s"></div>
        <select name="month" id="month" class="form-control">
            <option value="">—</option>
            @foreach ($months as $number => $name)
                <option value="{{ $number }}" {{ $selectedMonth == $number ? 'selected' : '' }}>{{ $name }}</option>
            @endforeach
        </select>
    </div>
    <div class="Min -w2">
        <div class="content">Год:</div>
        <div class="paragraph-s"></div>
        <select name="year" id="year" class="form-control">
            <option value="">—</option>
            @foreach ($years as $year)
                <option value="{{ $year }}" {{ $selectedYear == $year ? 'selected' : '' }}>{{ $year }}</option>
            @endforeach
        </select>
    </div>
</div> 

