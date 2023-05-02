@php
$producst=Botble\Ecommerce\Models\Product::all();
@endphp

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="banner-img wow fadeIn animated ">
                <img class="border-radius-10" src="{{ RvMedia::getImageUrl($shortcode->icon) }}" alt="">
                <div class="banner-text">
                    <span>{!! BaseHelper::clean($shortcode->{'title' }) !!}</span>
                    <h4>{!! BaseHelper::clean($shortcode->{'subtitle'}) !!}</h4>
                    {{--            <a href="{{ route('public.ads-click', $ads->key) }}">--}}
                    {{--                {{ $ads->getMetaData('button_text', true) ?: __('Shop Now') }} <i class="fa fa-arrow-right"></i>--}}
                    {{--            </a>--}}
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <section class="section-padding-60">
                @foreach($products as $product)
                    <div class="col-lg-4">
                        @include(Theme::getThemeNamespace() . '::views.ecommerce.includes.product-item', compact('product'))
                    </div>

                @endforeach

                <div class="container wow fadeIn animated">


                </div>
            </section>
        </div>
    </div>

</div>
