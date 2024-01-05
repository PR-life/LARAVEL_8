
<div  class="space-leftM wrapTabs / flex cI / Goo -top / bgToBottom _indexMax">
    <ul id="tabsOogway" class="menu -tab / cross lie pointer" 
        data-click data-switch data-package='tabOogway'
        data-stop
        data-localstorage
        localstorage-id='switch'
        data-check='active'
        >
    
        @foreach($menu as $item)
        <?php
            $Var = (object)$item;
            $x = ++$loop->index
        ?>
        <li data-item='{{$x}}' data-packagetype='css' data-packagefoo='radio' package='Tabs -x{{$x}}'><span class="a / noEvents">{{$Var->name}}</span></li>
        
        @endforeach
    </ul>
    
</div>
 