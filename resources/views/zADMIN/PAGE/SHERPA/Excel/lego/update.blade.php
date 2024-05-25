<h4>Update</h4>
<div class="paragraph"></div>
<div class="flex">
    <form class="Form / flex w-100" method="POST" action="{{ route('admin.sherpa.excel.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="_shell w-100 / net">
            <input type="file" name="update_file" />
        </div>
        <button class="orb-s content" type="submit">Go</button>
    </form>
    <div class="Pente-paint"></div>
    <div class="Pente-cross"></div>
</div>
