<div class="flex / OnOff / mr-1" check-localstorage='{{$id_node}}' data-check='active' param='on'>
    <div class="_open / pointer" data-click data-css data-node='parent' data-toggle='on'>
        <div data-click data-css data-node='{{$id_node}}' data-toggle='Block'>
            <div class="Ico / flex cI cC" data-click data-remove="active" data-localstorage localstorage-name='{{$id_node}}'>
                <div class="Ico -XS / noEvents">
                    @svg({{$ico}})
                </div>
            </div>
        </div>
    </div>
    <div class="_off / notActive pointer" data-click data-css data-node='parent' data-toggle='on'>
        <div data-click data-css data-node='{{$id_node}}' data-toggle='Block'>
            <div class="Ico / flex cI cC" data-click data-add="active" data-localstorage localstorage-name='{{$id_node}}'>
                <div class="Ico -XS / noEvents">
                    @svg({{$ico}})
                </div>
            </div>
        </div>
    </div>
</div>