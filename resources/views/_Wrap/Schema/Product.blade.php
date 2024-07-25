<section  class="{{$css23072032 ?? ''}}" itemscope itemtype="https://schema.org/Product">
    <link itemprop="image" href="{{Request::root()}}{{$image_link ?? '/images/OG/ava.jpg'}}" />
    <div itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
        <meta itemprop="name" content="ТОРНАДО" />
    </div>
    {{-- <meta itemprop="mpn" content="m{{$Var->id}}" /> --}}
    {{-- <meta itemprop="sku" content="s{{$Var->id}}" /> --}}
    {{-- <meta itemprop="itemCondition" content="https://schema.org/UsedCondition" /> --}}

    {!!$slot!!}
</section>


