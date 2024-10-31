@component('zADMIN._wrap.Relationships.index')
    @component('zADMIN._wrap.Relationships.line')
        @slot('id','22071757')
        @slot('name22071756','Главные связи')
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Категория'])
            @component('zADMIN._wrap.select.category.main', ['id' => 'category'])
                @include('_._brick.select.category.edit.main',[
                    'Categories' => $categories,
                    'Var' => class_basename($product) == 'Telegram' ? 
                    ($product->category_id ? $product->category_id : $categories->firstWhere('slug', 'news')->id)
                    : $product->category_id
                    ])
            @endcomponent
        </div>
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Тег'])
            @component('zADMIN._wrap.select.tag.index')
                @include('_._brick.select.tag.edit.index',['Tags' => $tags ?? [], 'Var' => $product->tag_id])
            @endcomponent
        </div>
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Группа'])
            @component('zADMIN._wrap.select.group.main')
                @include('_._brick.select.group.edit.index',['Groups' => $groups, 'Var' => $product->group_id])
            @endcomponent
        </div>
    @endcomponent

    {{-- @component('zADMIN._wrap.Relationships.line')
        @slot('id','22071758')
        @slot('name22071756','Многие связи')
        <div class="flex cross">
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Теги'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.tags.index')
                        @include('_._brick.select.tags.edit.index',['Tags' => $tags, 'arr' => $product->tags->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>
            <div class="Min -w5">
                @include('zADMIN._wrap.select.name',['Var' => 'Категории'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.categories.index')
                        @include('_._brick.select.categories.edit.index',['Categories' => $categories,'arr' => $product->categories->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>
        </div>
    @endcomponent --}}

    {{-- Solo связи --}}
    @component('zADMIN._wrap.Relationships.line')
        @slot('id','22071700')
        @slot('name22071756','Solo связи')
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Родитель'])
            @component('zADMIN._wrap.select.product.main', ['id' => 'product'])
                @include('_._brick.select.product.edit.main',['Products' => $products, 'Var' => $product->product_id])
            @endcomponent
        </div>
        
        <div class="Min -w5 / wrap-relationship -solo / round">
            @include('zADMIN._wrap.select.name',['Var' => 'Surrogate'])
            @component('zADMIN._wrap.select.product.surrogate', ['id' => 'surrogate'])
                @include('_._brick.select.product.edit.surrogate',['Products' => $products, 'Var' => $product->product_surrogate_id])
            @endcomponent
        </div>

    @endcomponent


    {{-- Дополнительные связи --}}
    @component('zADMIN._wrap.Relationships.line')
        @slot('id','22071759')
        @slot('name22071756','Дополнительные связи')
        <div class="W-100 / Grid x3 -gap">
            <div>
                @include('zADMIN._wrap.select.name',['Var' => 'Lego'])
                <div class="wrap-relationship -multiple">
                    @component('zADMIN._wrap.select.lego.index', ['id' => 'lego'])
                        @include('_._brick.select.lego.edit.index',['Lego' => $Lego, 'arr' => $product->lego->pluck('id')->toArray()])
                    @endcomponent
                </div>
            </div>
            <div class="void">
                <div class="content">Услуги</div>
                <div class="wrap-relationship -solo / round">
                    @include('zADMIN._wrap.select.name',['Var' => 'Доставка'])
                    @component('zADMIN._wrap.select.service.delivery', ['id' => 'delivery_service'])
                        @include('_._brick.select.service.edit.delivery',['Services' => $services, 'Var' => $product->service_delivery_id])
                    @endcomponent
                </div>
                <div class="wrap-relationship -solo / round">
                    @include('zADMIN._wrap.select.name',['Var' => 'Category services'])
                    @component('zADMIN._wrap.select.category.services', ['id' => 'category_service'])
                        @include('_._brick.select.category.edit.services',['Categories' => $categories, 'Var' => $product->category_services_id])
                    @endcomponent
                </div>
            </div>
            <div class="void">
                <div class="content">Paper</div>
                <div class="wrap-relationship -solo / round">
                    @include('zADMIN._wrap.select.name',['Var' => 'Условия оплаты'])
                    @component('zADMIN._wrap.select.paper.index', ['id' => 'paper_payment_id','name'=>'paper_payment_id'])
                        @include('_._brick.select.paper.edit.index',['Papers' => $papers, 'Var' => $product->paper_payment_id])
                    @endcomponent
                </div>
                <div class="wrap-relationship -solo / round">
                    @include('zADMIN._wrap.select.name',['Var' => 'Про гарантии'])
                    @component('zADMIN._wrap.select.paper.index', ['id' => 'paper_warranty_id','name'=>'paper_warranty_id'])
                        @include('_._brick.select.paper.edit.index',['Papers' => $papers, 'Var' => $product->paper_warranty_id])
                    @endcomponent
                </div>
                <div class="wrap-relationship -solo / round">
                    @include('zADMIN._wrap.select.name',['Var' => 'свободный paper 1'])
                    @component('zADMIN._wrap.select.paper.index', ['id' => 'paper_one_id','name'=>'paper_one_id'])
                        @include('_._brick.select.paper.edit.index',['Papers' => $papers, 'Var' => $product->paper_one_id])
                    @endcomponent
                </div>
                <div class="wrap-relationship -solo / round">
                    @include('zADMIN._wrap.select.name',['Var' => 'свободный paper 2'])
                    @component('zADMIN._wrap.select.paper.index', ['id' => 'paper_two_id','name'=>'paper_two_id'])
                        @include('_._brick.select.paper.edit.index',['Papers' => $papers, 'Var' => $product->paper_two_id])
                    @endcomponent
                </div>
            </div>
        </div>
    @endcomponent


    {{-- @component('zADMIN._wrap.Relationships.line')
        @slot('id','25071348')
        @slot('name22071756','Items')
        <div class="W-100">
            @include('zADMIN._wrap.select.name',['Var' => 'Items'])
            <div class="wrap-relationship -multiple">
                @component('zADMIN._wrap.select.products.index', ['id' => 'products'])
                    @include('_._brick.select.products.edit.index',['Items' => $products, 'arr' => $product->products->pluck('id')->toArray()])
                @endcomponent
            </div>
        </div>
    @endcomponent --}}


    {{-- @component('zADMIN._wrap.Relationships.line')
        @slot('id','25071349')
        @slot('name22071756','Faqs')
        <div class="W-100">
            @include('zADMIN._wrap.select.name',['Var' => 'Faqs'])
            <div class="wrap-relationship -multiple">
                @component('zADMIN._wrap.select.faqs.index', ['id' => 'faqs'])
                    @include('_._brick.select.faqs.edit.index',['Faqs' => $faqs, 'arr' => $product->faqs->pluck('id')->toArray(), 'currentId' => $product->id])
                @endcomponent
            </div>
        </div>
    @endcomponent --}}


@endcomponent