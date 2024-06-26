@extends('main')
@section('pagina-main')
    <div>
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- shop -->
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="{{ asset('./assets/images/shop01.png') }}" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>{{ __('IT') }}<br>{{ __('and More') }} +</h3>
                                <a href="#" class="cta-btn">{{ __('View Products') }} <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->

                    <!-- shop -->
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="{{ asset('./assets/images/shop03.png') }}" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>{{ __('Accessories') }}<br>{{ __('and More') }} +</h3>
                                <a href="#" class="cta-btn">{{ __('View Products') }} <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->

                    <!-- shop -->
                    <div class="col-md-4 col-xs-6">
                        <div class="shop">
                            <div class="shop-img">
                                <img src="{{ asset('./assets/images/shop02.png') }}" alt="">
                            </div>
                            <div class="shop-body">
                                <h3>Cameras<br>{{ __('and More') }} +</h3>
                                <a href="#" class="cta-btn">{{ __('View Products') }} <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">

                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">{{ __('NEW PRODUCTS') }}
                            </h3>
                            <div class="section-nav">
                                <ul class="section-tab-nav tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                                    <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                                    <li><a data-toggle="tab" href="#tab1">{{ __('Accessories') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /section title -->

                    <!-- Products tab & slick -->
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
                                                            $difference = $lastUpdated->diffInDays(
                                                                \Carbon\Carbon::now(),
                                                            );
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
                                                    <h3 class="product-name"><a
                                                            href="#">{{ $product->product_name }}</a></h3>
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
                                                                class="tooltipp">{{ __('add to wishlist') }}</span></button>
                                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">{{ __('add to compare') }}</span></button>
                                                        <button class="quick-view"><a
                                                                href="{{ route('product', $product->id) }}"><i
                                                                    class="fa fa-eye"></i><span class="tooltipp">{{ __('quick view') }}</span></a></button>
                                                    </div>
                                                </div>
                                                <div class="add-to-cart">
                                                    <button class="add-to-cart-btn" data-product="{{ $product->id }}" data-quantity="1">
                                                        <i class="fa fa-shopping-cart"></i> {{ __('add to cart') }}
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
                    <!-- Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->

        <!-- HOT DEAL SECTION -->
        <div id="hot-deal" class="section" style="background-image: url('{{$promotions[0]->image_banner}}');">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="hot-deal">
                            <ul id="countdown" class="hot-deal-countdown">
                                <li>
                                    <div>
                                        <h3 class="days">0</h3>
                                        <span>{{ __('Days') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3 class="hours">0</h3>
                                        <span>{{ __('Hours') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3 class="minutes">0</h3>
                                        <span>{{ __('Mins') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3 class="seconds">0</h3>
                                        <span>{{ __('Secs') }}</span>
                                    </div>
                                </li>
                            </ul>
                            <h2 class="text-uppercase">{{$promotions[0]->title}}</h2>
                            <p>{{$promotions[0]->description}}</p>
                            <a class="primary-btn cta-btn" href="#">{{ __('Shop Now') }}</a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /HOT DEAL SECTION -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">

                    <!-- section title -->
                    <div class="col-md-12">
                        <div class="section-title">
                            <h3 class="title">{{ __('Top selling') }}</h3>
                            <div class="section-nav">
                                <ul class="section-tab-nav tab-nav">
                                    <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Cameras</a></li>
                                    <li><a data-toggle="tab" href="#tab2">{{ __('Accessories') }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /section title -->

                    <!-- Products tab & slick -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="products-tabs">
                                <!-- tab -->
                                <div id="tab1" class="tab-pane fade in active">
                                    <div class="products-slick" data-nav="#slick-nav-2">
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
                                                            $difference = $lastUpdated->diffInDays(
                                                                \Carbon\Carbon::now(),
                                                            );
                                                            $isNewProduct = $difference < 7;
                                                        @endphp
                                                        @if ($isNewProduct)
                                                            <span class="new">{{ __('New') }}</span>
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
                                                    <h3 class="product-name"><a
                                                            href="#">{{ $product->product_name }}</a></h3>
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
                                                                class="tooltipp">{{ __('add to wishlist') }}</span></button>
                                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                                class="tooltipp">{{ __('add to compare') }}</span></button>
                                                        <button class="quick-view"><a
                                                                href="{{ route('product', $product->id) }}"><i
                                                                    class="fa fa-eye"></i><span class="tooltipp">{{ __('quick view') }}view</span></a></button>
                                                    </div>
                                                </div>
                                                <div class="add-to-cart">
                                                    <button class="add-to-cart-btn" data-product="{{ $product->id }}" data-quantity="1">
                                                        <i class="fa fa-shopping-cart"></i> {{ __('add to cart') }}
                                                    </button>

                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- /product -->
                                    </div>
                                    <div id="slick-nav-2" class="products-slick-nav"></div>
                                </div>
                                <!-- /tab -->
                            </div>
                        </div>
                    </div>
                    <!-- /Products tab & slick -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
    </div>
    <script>
        function updateCountdown(endDate) {
            var now = new Date().getTime();
            var distance = endDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.querySelector('#countdown .days').innerText = days;
            document.querySelector('#countdown .hours').innerText = hours;
            document.querySelector('#countdown .minutes').innerText = minutes;
            document.querySelector('#countdown .seconds').innerText = seconds;
        }
        var endDate = new Date("{{ $promotions[0]->date }}").getTime();

        setInterval(function() {
            updateCountdown(endDate);
        }, 1000);
    </script>
@endsection
