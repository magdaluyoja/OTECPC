@if (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts()->count())
    <div class="featured-products card">
        <div class="card-body">
            <div class=" text-center">
                <i class="md-icon dp36 text-danger">{{ __('shop::app.home.featured-products') }}</i><br>
                <span class="featured-seperator" style="color:#e41b1b ;">_____</span>
            </div>
            <div class="featured-grid product-grid-4 mt-3">

                @foreach (app('Webkul\Product\Repositories\ProductRepository')->getFeaturedProducts() as $productFlat)

                    @include ('shop::products.list.card', ['product' => $productFlat])

                @endforeach

            </div>
        </div><!-- / card-body -->
    </div>
@endif