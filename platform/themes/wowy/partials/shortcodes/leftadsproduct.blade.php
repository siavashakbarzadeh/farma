<div class="col-lg-4">
    <div class="banner-img wow fadeIn animated ">
        <img class="border-radius-10" src="{{ RvMedia::getImageUrl($shortcode->icon) }}" alt="">
        <div class="banner-text">
            <span>{!! BaseHelper::clean($shortcode->{'title' . $i}) !!}</span>
            <h4>{!! BaseHelper::clean($shortcode->{'subtitle' . $i}) !!}</h4>
{{--            <a href="{{ route('public.ads-click', $ads->key) }}">--}}
{{--                {{ $ads->getMetaData('button_text', true) ?: __('Shop Now') }} <i class="fa fa-arrow-right"></i>--}}
{{--            </a>--}}
        </div>
    </div>
</div>
