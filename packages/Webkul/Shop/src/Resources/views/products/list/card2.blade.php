{!! view_render_event('bagisto.shop.products.list.card.before', ['product' => $product]) !!}
@inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')
<?php $productBaseImage = $productImageHelper->getProductBaseImage($product); ?>

 <li class="col-md-6 col-lg-4 gallery" data-groups='["framed"]'>
    <figure class="gallery-item effect-bubba">
        <img style="height: 383px;" src="{{ $productBaseImage['medium_image_url'] }}" onerror="this.src='{{ asset('vendor/webkul/ui/assets/images/product/meduim-product-placeholder.png') }}'"/>
        <figcaption>
            <div class="hover-content">
                @if ($product->new)
                    <div class="sticker new">
                        {{ __('shop::app.products.new') }}
                    </div>
                @endif

                <h2 class="hover-title text-center text-white">
                    <a href="{{ url()->to('/').'/products/' . $product->url_key }}" title="{{ $product->name }}">
                        <span>
                            {{ $product->name }}
                        </span>
                    </a>
                </h2><!-- / hover-title -->
                <div class="gallery-info text-center text-white">{!!$product->short_description!!} {{$product->price}} 
                    <span class="gallery-icons">
                        <a href="{{ route('shop.products.index', $product->url_key) }}" title="{{ $product->name }}" class="gallery-button" data-toggle="modal" data-target=".framed-product"><i class="fas fa-plus"></i></a>
                        <a href="shopping-cart.html" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                    </span>
                </div>

                {{-- @include ('shop::products.price', ['product' => $product]) --}}
                @include('shop::products.add-buttons', ['product' => $product])
            </div>
        </figcaption>
    </figure>
</li>
{!! view_render_event('bagisto.shop.products.list.card.after', ['product' => $product]) !!}

@push('scripts')
    <script>
        $(document).ready(function(){
            $(".gallery-info.text-center.text-white>p").addClass("gallery-info text-center text-white");
        });
    </script>

@endpush