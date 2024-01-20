<div class="flex">
<div class="flex / OnOff" check-localstorage='filter_tags_1' data-check='active' param='on'>
    <div class="_open / pointer" data-click data-css data-node='parent' data-toggle='on'>
        <div data-click data-css data-node='filter_tags_1' data-toggle='Block'>
            <div class="Ico / flex cI cC" data-click data-remove="active" data-localstorage localstorage-name='filter_tags_1'>
                <div class="Ico -XS / noEvents">
                    @svg('filterStatus')
                </div>
            </div>
        </div>
    </div>
    <div class="_off / notActive pointer" data-click data-css data-node='parent' data-toggle='on'>
        <div data-click data-css data-node='filter_tags_1' data-toggle='Block'>
            <div class="Ico / flex cI cC" data-click data-add="active" data-localstorage localstorage-name='filter_tags_1'>
                <div class="Ico -XS / noEvents">
                    @svg('filterStatus')
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex / OnOff" check-localstorage='Filter' data-check='active' param='on'>
    
    <div class="_open / pointer" data-click data-css data-node='parent' data-toggle='on'>
        <div data-click data-css data-node='Filter' data-toggle='Block'>
            <div class="Ico / flex cI cC" data-click data-remove="active" data-localstorage localstorage-name='Filter'>
                <div class="Ico -XS / noEvents">
                    @svg('filter')
                </div>
            </div>
        </div>
    </div>

    <div class="_off / notActive pointer" data-click data-css data-node='parent' data-toggle='on'>
        <div data-click data-css data-node='Filter' data-toggle='Block'>
            <div class="Ico / flex cI cC" data-click data-add="active" data-localstorage localstorage-name='Filter'>
                <div class="Ico -XS / noEvents">
                    @svg('filter')
                </div>
            </div>
        </div>
    </div>    

</div>

</div>
{{-- <div class="flex cross-xxs">



    <div class="-Btn pointer / space-s round-xs" data-click data-css data-add='active' data-loop data-localstorage localstorage-name='Filter'>
        <div class="Ico -XS / noEvents">

            
        </div>
    </div>
    <div class="-Btn pointer / space-s round-xs" data-click data-css data-add='active' data-loop data-localstorage localstorage-name='Filter'>
        <div class="Ico -XS / noEvents">

            
        </div>
    </div>


</div> --}}

<div class="flex cI">
    <div class="-Btn pointer / space-xs round-xs / v-EN -off" data-click data-node='body' data-css data-add='EN' data-loop data-localstorage localstorage-name='body'>
        <span class="content-xs / noEvents">En</span>
    </div>
    <div class="-Btn -active pointer / space-xs round-xs / v-EN -on" data-click data-node='body' data-css data-remove='EN' data-loop data-localstorage localstorage-name='body'>
        <span class="content-xs / noEvents">En</span>
    </div>
</div>