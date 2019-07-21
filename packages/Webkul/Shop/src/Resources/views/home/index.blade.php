@extends('shop::layouts.master')

@section('page_title')
    Home
@endsection

@section('content-wrapper')

    {!! view_render_event('bagisto.shop.home.content.before') !!}

    <header class="home-header parallax" style="display: none;">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0" id="parallaxTitle">TO Persian Carpets - Manila</h1>
            <p class="inner-space mb-0" id="parallaxDesc">Original &amp; Elegant Persian Carpets</p>
        </div><!-- / header-content -->
    </header>
    {!! DbView::make(core()->getCurrentChannel())->field('home_page_content')->with(['sliderData' => $sliderData])->render() !!}

    {{ view_render_event('bagisto.shop.home.content.after') }}

@endsection
@push('scripts')
	<script>
		$(document).ready(function(){
			var sliderLength = $("ul.slider-images>li").length;
			if(sliderLength  > 1){
				$("section.slider-block").show();
				$("header.home-header").hide();
			}else{
				$("section.slider-block").hide();
				$("header.home-header").show();
				var imgsrc = $("#app > div.main-container-wrapper > div.content-container.container > section.slider-block > div > ul > li.show > img").attr("src");
				var parallaxTitle = $("#app > div.main-container-wrapper > div.content-container.container > section.slider-block > div > ul > li.show > img").attr("alt");
				var parallaxDesc = $("#app > div.main-container-wrapper > div.content-container.container > section.slider-block > div > ul > li.show > div > p").text();

				$("#parallaxTitle").text(parallaxTitle);
				$("#parallaxDesc").text(parallaxDesc);
				$("header.home-header").css("background-image","url('"+imgsrc+"')");
			}
		});
	</script>

@endpush