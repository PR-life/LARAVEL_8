<div class="_shell / space">


    <div class="flex eC">
        <div class="flex cI / cross-xs">
            <label class="content-xs Grey" for="deleteImage">очистить все фото</label>
            <div class="flex cI">
                <div class="CheckTrigger vol-beregovoy ">
                    <div class="_che">
                        <input id="deleteImage" type="checkbox" name="delete_image" value="1">
                        <div class="check-bg"></div>
                        <div class="check-knob"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($Var->image_original)
    <div class="paragraph"></div>
    <em class="content-min Grey">{{Request::root()}}/storage/category_images/bd/{{$Var->image_original}}</em>
    @endif

    <div class="paragraphX2"></div>
    <input id="inputImage" type="file" name="image" value="{{$Var->image}}" placeholder="image">

    @if($Var->image)
        <div class="_shell / void-s space">
            <div class="content">Текущее изображение:</div>
            <img src="{{ asset('storage/' . $Var->image) }}" alt="Category Image" style="max-width: 200px;">
        </div>
    @endif
</div>