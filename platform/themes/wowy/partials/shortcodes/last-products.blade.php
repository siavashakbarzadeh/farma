{{--<section class="product-tabs pt-40 pb-30 wow fadeIn animated">--}}
{{--    --}}
{{--    <product-collections-component title="{!! BaseHelper::clean($title) !!}" :product_collections="{{ json_encode($productCollections) }}" url="{{ route('public.ajax.products') }}"></product-collections-component>--}}

{{--</section>--}}
@php
    $products=Botble\Ecommerce\Models\Product::latest()->take(6)->get();
@endphp

<style>
    .card-title {
        color: #db0075;
    }
    .card-text {
        color: #17E6E6;
    }
    .list-inline-item {
        color: #ffd700
    }
    .price {
        color: #9B1B30;
    }
    .btn-pink {
        background-color: #fcb2b2 !important;
    }
</style>
<div class="container mt-5">
    <h3 class="ps-section__title" style="
    font-size: 30px;
    text-align: center;
    margin-bottom: 26px;
    margin-top: 92px;
    font-weight: 600;">Gli ultimi prodotti</h3>
</div>
<div class="multi-carousel" data-mdb-interval="3000" data-mdb-items="5">
    <div class="d-flex justify-content-center m-2 mb-3">
        <button class="carousel-control-prev btn btn-pink btn-floating mx-3" type="button" tabindex="0" data-mdb-slide="prev">
            <i class="fas fa-angle-left fa-lg"></i>
        </button>
        <button class="carousel-control-next btn btn-pink btn-floating mx-3" type="button" tabindex="0" data-mdb-slide="next">
            <i class="fas fa-angle-right fa-lg"></i>
        </button>
    </div>
    <div class="multi-carousel-inner">
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(4).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Moda</h5>
                    <p class="card-text">Plan B</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="price mb-0">9,99 $</p>
                </div>
            </div>
        </div>
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(1).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Indie City</h5>
                    <p class="card-text">Pixies</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="far fa-star"></i></li>
                    </ul>
                    <p class="price mb-0">14,99 $</p>
                </div>
            </div>
        </div>
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(7).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Year</h5>
                    <p class="card-text">Indielectru</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                    </ul>
                    <p class="price mb-0">12,99 $</p>
                </div>
            </div>
        </div>
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(8).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">L'Hiver Indien</h5>
                    <p class="card-text">Baloji</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="price mb-0">10,99 $</p>
                </div>
            </div>
        </div>
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(6).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Indie Funk</h5>
                    <p class="card-text">Generation Funk</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                    </ul>
                    <p class="price mb-0">19,99 $</p>
                </div>
            </div>
        </div>
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(2).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Rockferry</h5>
                    <p class="card-text">Duffy</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="price mb-0">17,99 $</p>
                </div>
            </div>
        </div>
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(3).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Indie Pop</h5>
                    <p class="card-text">Various artists</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="far fa-star"></i></li>
                    </ul>
                    <p class="price mb-0">9,99 $</p>
                </div>
            </div>
        </div>
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(5).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">Rock 'N' Roll</h5>
                    <p class="card-text">Chuck Berry</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star-half-alt"></i></li>
                    </ul>
                    <p class="price mb-0">29,99 $</p>
                </div>
            </div>
        </div>
        <div class="multi-carousel-item">
            <div class="card m-2">
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Square/img(9).jpg" alt="Card image cap" />
                <div class="card-body">
                    <h5 class="card-title">High Voltage</h5>
                    <p class="card-text">AC/DC</p>
                    <ul class="list-unstyled list-inline my-2">
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                        <li class="list-inline-item mx-0"><i class="fas fa-star"></i></li>
                    </ul>
                    <p class="price mb-0">24,99 $</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        @foreach($products as $product)
            <div class="col-2">
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
