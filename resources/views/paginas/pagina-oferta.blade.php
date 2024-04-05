@extends('main')
<style>
    .swiper {
        width: 100%;
        height: 35rem;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
        background-clip: padding-box;
        object-fit: cover;
        padding-right: 0rem 1rem;
    }

    .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: 'next';
        color: rgba(255, 255, 255, 0.603);
        font-size: 2.5rem !important;
    }

    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after {
        content: 'prev';
        color: rgba(255, 255, 255, 0.603);
        font-size: 2.5rem !important;
    }

    .swiper-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-bullets.swiper-pagination-horizontal,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        display: none;
    }

    .swiper-scrollbar-drag {
        background: rgba(255, 255, 255, 0.267) !important;
    }

    .slider-heading__item-text-wrapper {
        color: #ffffff;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        justify-content: center;
        padding-left: 5rem;
        width: 50%;
    }

    .slider-heading__label {
        font-weight: 700;
    }

    .slider-heading__item-title {
        color: #ffffff
    }

    .slider-heading__item-description {
        font-weight: 500;
    }

    .slider-text-wrapper {
        color: #ffffff;
        text-align: left;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-end;
    }

    .slider-heading__item-button.button--primary.button--white[data-v-336d9fe3] {
        background-color: #fff;
        border-radius: 15px;
        padding: 0.8rem;
        width: 14rem;
        border: #fff;
        color: #141414;
        font-weight: 600;
        text-align: center;
        text-transform: uppercase;
        font-size: 13px;
        transition: 0.3s ease;
    }

    .slider-heading__item-button.button--primary.button--white[data-v-336d9fe3]:hover {
        transform: scale(1.1);
    }



    /*Products*/
    div.products-tabs {
        margin-top: 2rem;
        margin-bottom: 7rem
    }

    .slick-slide {
        height: 93.8% !important;
    }
</style>
@section('pagina-oferta')
    <div class="container-swiper">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"
                    style="background-image: url('{{ asset('assets/images/slide1.png') }}'); display: flex; align-items: center;">
                    <div class="slider-text-wrapper" style="flex: 1; padding: 0 2rem;">
                        <div class="slider-heading__item-text-wrapper swiper-no-swiping" data-v-336d9fe3="">
                            <span class="slider-heading__label bold uppercase font-1xs" data-v-336d9fe3="">Promoção nos
                                produtos assinalados de 2 a 8 abr</span>
                            <h2 class="slider-heading__item-title font-4xl bold" data-v-336d9fe3="">Até 50% desconto direto
                            </h2>
                            <p class="slider-heading__item-description font-m" data-v-336d9fe3=""> numa seleção de
                                Telemóveis, Portáteis, TVs, Eletrodomésticos, Gaming, Bebé e muito mais</p>
                            <span class="button--white slider-heading__item-button button button--primary button--sm"
                                data-v-336d9fe3="">Ver Produtos</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url('{{ asset('assets/images/slide2.png') }}'); display: flex; align-items: center;">
                    <div class="slider-text-wrapper" style="flex: 1; padding: 0 2rem;">
                        <div class="slider-heading__item-text-wrapper swiper-no-swiping" data-v-336d9fe3="">
                            <span class="slider-heading__label bold uppercase font-1xs" data-v-336d9fe3="">Promoção nos
                                produtos assinalados de 2 a 8 abr</span>
                            <h2 class="slider-heading__item-title font-4xl bold" data-v-336d9fe3="">Até 50% desconto direto
                            </h2>
                            <p class="slider-heading__item-description font-m" data-v-336d9fe3=""> numa seleção de
                                Telemóveis, Portáteis, TVs, Eletrodomésticos, Gaming, Bebé e muito mais</p>
                            <span class="button--white slider-heading__item-button button button--primary button--sm"
                                data-v-336d9fe3="">Ver Produtos</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url('{{ asset('assets/images/slide3.webp') }}');display: flex; align-items: center;">
                    <div class="slider-text-wrapper" style="flex: 1; padding: 0 2rem;">
                        <div class="slider-heading__item-text-wrapper swiper-no-swiping" data-v-336d9fe3="">
                            <span class="slider-heading__label bold uppercase font-1xs" data-v-336d9fe3="">Promoção nos
                                produtos assinalados de 2 a 8 abr</span>
                            <h2 class="slider-heading__item-title font-4xl bold" data-v-336d9fe3="">Até 50% desconto direto
                            </h2>
                            <p class="slider-heading__item-description font-m" data-v-336d9fe3=""> numa seleção de
                                Telemóveis, Portáteis, TVs, Eletrodomésticos, Gaming, Bebé e muito mais</p>
                            <span class="button--white slider-heading__item-button button button--primary button--sm"
                                data-v-336d9fe3="">Ver Produtos</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"
                    style="background-image: url('{{ asset('assets/images/slide4.png') }}');display: flex; align-items: center;">
                    <div class="slider-text-wrapper" style="flex: 1; padding: 0 2rem;">
                        <div class="slider-heading__item-text-wrapper swiper-no-swiping" data-v-336d9fe3="">
                            <span class="slider-heading__label bold uppercase font-1xs" data-v-336d9fe3="">Promoção nos
                                produtos assinalados de 2 a 8 abr</span>
                            <h2 class="slider-heading__item-title font-4xl bold" data-v-336d9fe3="">Até 50% desconto direto
                            </h2>
                            <p class="slider-heading__item-description font-m" data-v-336d9fe3=""> numa seleção de
                                Telemóveis, Portáteis, TVs, Eletrodomésticos, Gaming, Bebé e muito mais</p>
                            <span class="button--white slider-heading__item-button button button--primary button--sm"
                                data-v-336d9fe3="">Ver Produtos</span>
                        </div>
                    </div>
                </div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>

    @include('layouts.card-promo')

    <div class="col-md-12">
        <div class="row">
            <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane fade in active">
                    <div class="products-slick" data-nav="#slick-nav-1">
                        <!-- product -->
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('product', $product->id) }}"></a>
                                <div class="product-img">
                                    <img src="{{ asset($product->image_name) }}" alt="{{ $product->product_name }}">
                                    <div class="product-label">
                                        @if ($product->sale != 0 && !is_null($product->sale))
                                            <span class="sale" wire:ignore>-{{ $product->sale }}%</span>
                                        @endif
                                        @php
                                            $lastUpdated = \Carbon\Carbon::parse($product->updated_at);
                                            $difference = $lastUpdated->diffInDays(\Carbon\Carbon::now());
                                            $isNewProduct = $difference < 7;
                                        @endphp
                                        @if ($isNewProduct)
                                            <span class="new">NEW</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">
                                        @foreach ($categories as $category)
                                            @if ($category->id === $product->idcategory)
                                                <a href="#">{{ $category->title }}</a>
                                            @endif
                                        @endforeach

                                    </p>
                                    <h3 class="product-name"><a href="#">{{ $product->product_name }}</a></h3>
                                    <h4 class="product-price">
                                        {{ $product->price }}
                                        <del class="product-old-price">
                                            @if ($product->old_price !== null && $product->old_price != 0.0)
                                                {{ $product->old_price }}
                                            @endif

                                        </del>
                                    </h4>
                                    <div class="product-rating">

                                        @php

                                            $averageRating = 0;
                                            $totalReviews = 0;

                                            foreach ($reviews as $review) {
                                                if ($review->product_id == $product->id) {
                                                    $averageRating += $review->product_rating;
                                                    $totalReviews++;
                                                }
                                            }

                                            if ($totalReviews > 0) {
                                                $averageRating = $averageRating / $totalReviews;
                                            }
                                            $averageRating = intval($averageRating);
                                        @endphp

                                        @if ($totalReviews == 0)
                                        @else
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $averageRating)
                                                    <i class="fa fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        @endif
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><a href="{{ route('product', $product->id) }}"><i
                                                    class="fa fa-eye"></i><span class="tooltipp">quick
                                                    view</span></a></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn" data-product="{{ $product->id }}" data-quantity="1">
                                        <i class="fa fa-shopping-cart"></i> add to cart
                                    </button>

                                </div>
                            </div>
                        @endforeach
                        <!-- /product -->
                    </div>
                    <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
                <!-- /tab -->
            </div>
        </div>
    </div>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
@endsection
