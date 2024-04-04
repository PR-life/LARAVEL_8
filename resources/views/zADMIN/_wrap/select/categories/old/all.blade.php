<div class="_shell / flex cross">
    <div>
        <div class="flex cross-xxs">
            <div class="flex dC">
                <span class="content-xxs / noEvents slctn">уровень 1</span>
                <div class="paragraph-s"></div>
                <div class="Select x-js / Form -S">
                    {{$slot_1}}
                </div>
            </div>

            <div class="flex dC">
                <span class="content-xxs / noEvents slctn">уровень 2</span>
                <div class="paragraph-s"></div>
                <div class="Select x-js / Form -S">
                    {{$slot_2}}
                </div>
            </div>
        </div>

        <div class="paragraph"></div>
        <div class="flex cI / cross-xxs / Form -S">
            <label class="nowrap" for='category_id'>Родительская категория:</label>
            <input id="category_id" type="text" name="category_id" value="{{$id}}" placeholder='нету'>
        </div>
    </div>
</div>