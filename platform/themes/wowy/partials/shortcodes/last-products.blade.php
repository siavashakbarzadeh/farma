{{--<section class="product-tabs pt-40 pb-30 wow fadeIn animated">--}}
{{--    --}}
{{--    <product-collections-component title="{!! BaseHelper::clean($title) !!}" :product_collections="{{ json_encode($productCollections) }}" url="{{ route('public.ajax.products') }}"></product-collections-component>--}}

{{--</section>--}}
@php
    $products=Botble\Ecommerce\Models\Product::all();
@endphp
<div class="container">
    <div class="row">

        @foreach($products as $product)
            <div class="col-4">
                @include(Theme::getThemeNamespace() . '::views.ecommerce.includes.product-item', compact('product'))
            </div>
        @endforeach

    </div>
</div>

{{--<section class="section-padding-60">--}}
{{--    <div class="container">--}}
{{--        <h3 class="section-title style-1 mb-30 wow fadeIn animated">{!! BaseHelper::clean($title) !!}</h3>--}}
{{--        <div class=" owl-carousel owl-theme featured-brands-carousel ">--}}

{{--            <product-collections-component title="{!! BaseHelper::clean($title) !!}" :product_collections="{{ json_encode($productCollections) }}" url="{{ route('public.ajax.products') }}"></product-collections-component>--}}

{{--        </div>--}}
{{--        --}}{{-- <featured-brands-component url="{{ route('public.ajax.featured-brands') }}"></featured-brands-component> --}}
{{--    </div>--}}
{{--</section>--}}
