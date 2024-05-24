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

    .btn-card-promotion{
        position: relative;
        border: 2px solid transparent;
        height: 40px;
        padding: 0 30px;
        background-color: var(--ColorPrimaria);
        color: #FFF;
        font-weight: 700;
        border-radius: 40px;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }
    .promotion-img{
        background: var(--ColorPrimaria);
        border-radius: 10px 10px 0 0;
    }
    .promotions-card{
        border-radius:10px;
    }

    /*Products*/
    div.products-tabs {
        margin-top: 2rem;
        margin-bottom: 7rem
    }

    .slick-slide {
        height: 93.8% !important;
    }
    
  .dropdown-filter {
    position: relative;
    display: inline-block;
  }

  .dropdown-filter-btn {
    background-color: #fafafa;
    border: 1px solid #797979 !important;
    border-radius: 5px;
    color: rgb(0, 0, 0);
    width: 250px; 
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    position: relative;
    z-index: 10;
  }
  .dropdown-filter-btn p{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin:0;
  }

  .dropdown-filter-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    border: 1px solid #797979 !important;
    border-top: 0px  !important;
    border-radius: 0 0 5px 5px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    animation: slideDown 0.5s ease;
    z-index: 1;
    height: 150px;
    width: 250px;
    overflow-y: auto;
  }
  .dropdown-filter-btn span{
    color: black;
    position: absolute;
    top: -8px;
    font-size: 11px;
    padding: 0 4px;
    background-color: #f9f9f9;
  }

  .dropdown-filter-content a {
    color: black;
    padding: 10px 20px;
    text-decoration: none;
    display: block;
  }

  .dropdown-filter-content a:hover {
    background-color: #ddd;
  }

  .dropdown-filter-content ::-webkit-scrollbar {
    width: 9px;
    height: 9px;
  }

  .dropdown-filter-content ::-webkit-scrollbar-button:start:decrement,
  .dropdown-filter-content ::-webkit-scrollbar-button:end:increment {
    display: block;
    height: 0;
    background-color: #ffffff;
  }

  .dropdown-filter-content ::-webkit-scrollbar-track-piece {
    background-color: #ffffff;
    opacity: 1;
  }

    /* border-bottom: 0px !important;
    border-radius:  5px 5px 0 0; */

  @keyframes slideDown {
    from {
      height: 0;
    }
    to {
      height: 150px;
    }
  }
</style>
@section('pagina-oferta')

    
    <!-- <div class="container-swiper">
        <div class="swiper">
           
            <div class="swiper-wrapper">
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
            <div class="swiper-pagination"></div>
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-scrollbar"></div>
        </div>
    </div> -->

    @include('layouts.card-promo')
    <!-- <div class="col-md-12"> carrossel para mostrar as categorias com promoçoes
        <div class="row">
            <div class="products-tabs">
                <div id="tab2" class="tab-pane fade in active">
                    <div class="products-slick" data-nav="#slick-nav-2">
                    @foreach ($promotions as $promotion)
                            <div class="product promotions-card">
                                <div class="product-img promotion-img">
                                    <img src="{{ asset($promotion->image_card) }}" alt="{{$promotion->image_card}}">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">{{$promotion->title}}</a></h3>

                                    <p>
                                    {{$promotion->description}}
                                    </p>
                                    <br>
                                    <button class="btn-card-promotion">
                                        Ver Produtos
                                    </button>
                                </div>
                            
                            </div>
                    @endforeach
                    </div>
                    <div id="slick-nav-2" class="products-slick-nav"></div>
                </div>
            </div>
        </div>
    </div> -->
    <br>
    <hr style="border: 1px solid #797979;">
    <div class="col-md-12">
        
        <div class="container-fluid d-flex justify-content-end">
            <div class="dropdown-filter">
                <div class="dropdown-filter-btn" id="dropdown-filter-btn">
                    <span>Ordenar por</span>
                    <p>Relevância<i class="fa-solid fa-chevron-down" id="dropdown-icon-filter"></i></p>
                </div>
                <div class="dropdown-filter-content" id="dropdown-filter-content">
                <a href="#">Relevância</a>
                <a href="#">Preço (mais baixo)</a>
                <a href="#">Preço (mais alto)</a>
                <a href="#">Melhor desconto</a>
                <a href="#">Melhor avaliação</a>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            @foreach ($products as $product)
                @if ($product->sale != 0 && !is_null($product->sale))
                    <div class="col-md-3 col-xs-4">
                        <div class="product">
                            <div class="product-img">
                                <img src="{{ asset($product->image_name) }}" alt="{{ $product->product_name }}">
                                @if ($product->sale != 0 && !is_null($product->sale))
                                    <div class="product-label">
                                        <span class="sale">-{{ $product->sale }}%</span>
                                    </div>
                                @endif
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
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <script>

        function toggledropdownfilter() {
        var dropdownfilterContent = document.getElementById("dropdown-filter-content");
        var dropdownfilterIcon = document.getElementById("dropdown-icon-filter");


        if (dropdownfilterContent.style.display === "block") {
            dropdownfilterContent.style.display = "none";
            dropdownfilterIcon.style.transform =  "rotate(0deg)"

        } else {
            dropdownfilterContent.style.display = "block";
            dropdownfilterIcon.style.transform =  "rotate(180deg)"
        }
        }
            document.getElementById("dropdown-filter-btn").addEventListener("click", function() {
            toggledropdownfilter();
        });
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
