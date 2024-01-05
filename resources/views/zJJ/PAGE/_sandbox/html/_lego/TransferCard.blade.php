<div class="TransferCard / Wagon -w -wM / Bone">

    <div class="_head / space">
        <div class="void">
            <div class="content">Transfer</div>
            <div>
                <div class="h b600">$241.00</div>
                <div class="content Grey">Personal checking - 2919</div>
            </div>
        </div>
        <div class="paragraph"></div>
    </div>

    <div class="_footer / space-m void-m">
        @include('zJJ.PAGE._sandbox.html._brick.transfercard._wrap',['name' => 'Created'])
        @include('zJJ.PAGE._sandbox.html._brick.transfercard._wrap',['name' => 'Initiated'])
        @include('zJJ.PAGE._sandbox.html._brick.transfercard._wrap',['name' => 'Submitted'])
        @include('zJJ.PAGE._sandbox.html._brick.transfercard._wrap',['name' => 'Settled'])
        @include('zJJ.PAGE._sandbox.html._brick.transfercard._wrap',['name' => 'Completed'])
    </div>
</div>

<style>
    .TransferCard {
        box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgba(0, 0, 0, 0.02) 0px 40px 32px 0px, rgba(0, 0, 0, 0.03) 0px 22px 18px 0px, rgba(0, 0, 0, 0.03) 0px 12px 10px 0px, rgba(0, 0, 0, 0.04) 0px 7px 5px 0px, rgba(0, 0, 0, 0.07) 0px 3px 2px 0px;
    }

    .TransferCard ._head {
        border-bottom:1px solid #e3e4e8;
    }

    .TransferCard ._footer {
        background-color: #fbfbfb;
    } 

    .TransferCard ._ico {
        --c-text: #4575cd;
    }
</style>
