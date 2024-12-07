<input class="none" type="text" name="from_page" value="{{url()->current()}}" placeholder='.'>
@auth()
<input class="none" type="text" name="user_id" value="{{auth()->user()->id}}" placeholder='.'>
@endauth