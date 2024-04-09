<div class="space"> 
    <dl class="-dot -rightS Void">
        <dt class="content-xs Grey"><label for="param_price">цена</label></dt>
        <dd>
            <input id="param_price" type="text" name="param_price" value="{{$item->param_price}}" placeholder="...">
        </dd>
        <dt class="content-xs Grey"><label for="param_duration">сроки</label></dt>
        <dd>
            <input id="param_duration" type="text" name="param_duration" value="{{$item->param_duration}}" placeholder="...">
        </dd>
        <dt class="content-xs Grey"><label for="param_report">отчет</label></dt>
        <dd>
            <input id="param_report" type="text" name="param_report" value="{{$item->param_report}}" placeholder="...">
        </dd>
        <dt class="content-xs Grey"><label for="param_geo">география</label></dt>
        <dd>
            <input id="param_geo" type="text" name="param_geo" value="{{$item->param_geo}}" placeholder="...">
        </dd>
    </dl>
</div>