<div class="footer-widgets">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="widget">
                    <img src="{{ bagisto_asset('images/logo.png') }}" alt="logo" class="footer-logo">
                    <p class="mb-3">Tessai Oteki's Persian Carpet Manila</p>
                </div><!-- / widget -->
            </div><!-- / column-->

            <div class="col-lg-3">
                <?php
                    $categories = [];

                    foreach (app('Webkul\Category\Repositories\CategoryRepository')->getVisibleCategoryTree(core()->getCurrentChannel()->root_category_id) as $category){
                        if ($category->slug)
                            array_push($categories, $category);
                    }
                ?>

                @if (count($categories))
                    <div class="widget">
                        <h3 class="widget-title text-center">CATEGORIES</h3>

                        <ul class="list-group text-center">
                            @foreach ($categories as $key => $category)
                                <li class="mb-3">
                                    <a href="{{ route('shop.categories.index', $category->slug) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div><!-- / column-->
            {!! DbView::make(core()->getCurrentChannel())->field('footer_content')->render() !!}
        </div><!-- / row -->
        <div class="list-container">
            @if(core()->getConfigData('customer.settings.newsletter.subscription'))
                <span class="list-heading">{{ __('shop::app.footer.subscribe-newsletter') }}</span>
                <div class="form-container">
                    <form action="{{ route('shop.subscribe') }}">
                        <div class="control-group" :class="[errors.has('subscriber_email') ? 'has-error' : '']">
                            <input type="email" class="control subscribe-field" name="subscriber_email" placeholder="Email Address" required><br/>

                            <button class="btn btn-md btn-primary">{{ __('shop::app.subscription.subscribe') }}</button>
                        </div>
                    </form>
                </div>
            @endif
            <?php
                $query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
                $searchTerm = explode("?", $query);

                foreach($searchTerm as $term){
                    if (strpos($term, 'term') !== false) {
                        $serachQuery = $term;
                    }
                }
            ?>
        </div>
    </div>
</div>
