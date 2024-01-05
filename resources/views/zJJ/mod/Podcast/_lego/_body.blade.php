<div class="_wrap / space-m highlight">
    <div id="Opportunities_skill">
        <div class="Bee / flex cI">
            @include('zJJ.mod.Opportunities._brick.filter')
        </div>
        {{-- <div class="paragraphX2"></div> --}}
        {{-- <div class="paragraphX2"></div> --}}
        <div id="Opportunities_list" class="">
            <div class="Ef -list -first555 -border / x-opportunities">
                @include('zJJ.mod.Opportunities.demo.mod_Tempolab', ['param' => 'p-tempolab'])
                @include('zJJ.mod.Opportunities.demo.mod_Tempoheart', ['param' => 'p-tempoheart'])
                @include('zJJ.mod.Opportunities.demo.mod_Neurostim', ['param' => 'p-neurostim'])
                @include('zJJ.mod.Opportunities.demo.mod_DynamicbIA', ['param' => 'p-dynamicbia'])
                @include('zJJ.mod.Opportunities.demo.mod_LinebIA', ['param' => 'p-linebia'])

                @include('zJJ.mod.Opportunities.demo.podberet', ['param' => 'p-podberet'])
                @include('zJJ.mod.Opportunities.demo.mozhet', ['param' => 'p-mozhet'])
                @include('zJJ.mod.Opportunities.demo.opredelyaet', ['param' => 'p-opredelyaet'])
            </div>
        </div>
        <div class="hill-l"></div>
        <div class="hill-l"></div>

    </div>
</div>