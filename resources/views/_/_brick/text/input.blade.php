<input 
    id="input{{ ucfirst($Var) }}_{{$Form ?? 'Demo'}}"
    class="{{ $css ?? '' }}"
    type="{{ $type ?? 'text' }}"
    name="{{ $Var }}"
    placeholder="{{ $placeholder ?? '' }}"
    value="{{ $value ?? '' }}"
    @isset($required) required @endisset
    @isset($autofocus) autofocus @endisset
    {!! $data ?? '' !!}
    data-jsvalidate="{{ $jsvalidate ?? $Var }}"
>

{{-- <input 
    id="input{{ucfirst($Var)}}_{{$formIdName}}"
    {!!isset($css) ? "class=\"$css\"" : ''!!}
    type="{{$type ?? 'text'}}"
    name="{{$Var}}"
    {!!isset($placeholder) ? 'placeholder="'.$placeholder.'"' : ''!!}
    {!!isset($value) ? 'value="'.$value.'"' : ''!!}
    {!!isset($required) ? 'required' : ''!!}
    {!!$data ?? ''!!}
    {!!isset($autofocus) ? 'autofocus' : ''!!}
    data-jsvalidate="{{$jsvalidate ?? $Var}}"
    {!!isset($jsvalidate) ? "data-jsvalidate=\"$jsvalidate\"" : ''!!}
> --}}