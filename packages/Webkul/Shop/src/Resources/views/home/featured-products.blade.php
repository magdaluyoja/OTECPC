@if (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts()->count())
    <div class="featured-products card">
        <div class="card-body">
            <div class=" text-center">
                <h1 class="section-title"  style="font-family:'Amiri' !important; text-transform: uppercase;">{{ __('shop::app.home.featured-products') }}</h1>
                <img src="{{ bagisto_asset('images/border.png') }}" alt="" style="width: 160px">
            </div>
            <div class="featured-grid product-grid-4 mt-3">

                @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)

                    @include ('shop::products.list.card', ['product' => $productFlat])

                @endforeach

            </div>
        </div><!-- / card-body -->
    </div>
@endif