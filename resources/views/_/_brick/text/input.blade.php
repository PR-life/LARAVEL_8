<input 
    id="input{{ucfirst($Var)}}_{{$Form}}"
    {!!isset($css) ? "class=\"$css\"" : ''!!}
    type="{{$type ?? 'text'}}"
    name="{{$Var}}"
    {!!isset($placeholder) ? 'placeholder="'.$placeholder.'"' : ''!!}
    {!!isset($value) ? 'value="'.$value.'"' : ''!!}
    {!!isset($required) ? 'required' : ''!!}
    {!!$data ?? ''!!}
    data-jsvalidate="{{$jsvalidate ?? $Var}}"
    {{-- {!!isset($jsvalidate) ? "data-jsvalidate=\"$jsvalidate\"" : ''!!} --}}
>