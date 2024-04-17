@component('_.component.Message', ['css' => 'eC -error'])
    @slot('heading')
    ой!
    @endslot
    <ol class="-S">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach 
    </ol>
@endcomponent