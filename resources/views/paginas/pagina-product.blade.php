@extends('main')

@section('pagina-product')
<div>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="{{ asset('./assets/images/product01.png') }}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{ asset('./assets/images/product03.png') }}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{ asset('./assets/images/product06.png') }}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{ asset('./assets/images/product08.png') }}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="{{ asset('./assets/images/product01.png') }}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{ asset('./assets/images/product03.png') }}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{ asset('./assets/images/product06.png') }}" alt="">
							</div>

							<div class="product-preview">
								<img src="{{ asset('./assets/images/product08.png') }}" alt="">
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{ $product->product_name }}</h2>
							<div>
								<div class="product-rating">
                                @php
                                    $averageRating = 0;
                                    $totalReviews = 0;

                                    $star1 = 0;
                                    $star2 = 0;
                                    $star3 = 0;
                                    $star4 = 0;
                                    $star5 = 0;


                                    foreach($reviews as $review) {
                                        if($review->product_id == $product->id) {
                                            
                                            $averageRating += $review->product_rating;
                                            $totalReviews++;
                                            if($review->product_rating == 1){
                                                $star1++;
                                            }elseif($review->product_rating == 2){
                                                $star2++;
                                            }elseif($review->product_rating == 3){
                                                $star3++;
                                            }elseif($review->product_rating == 4){
                                                $star4++;
                                            }elseif($review->product_rating == 5){
                                                $star5++;
                                            }
                                        }
                                    }
                                    $totalComments = $star1 + $star2 + $star3 + $star4 + $star5;
                                    $percentStar1 = $totalComments > 0 ? ($star1 / $totalComments) * 100 : 0;
                                    $percentStar2 = $totalComments > 0 ? ($star2 / $totalComments) * 100 : 0;
                                    $percentStar3 = $totalComments > 0 ? ($star3 / $totalComments) * 100 : 0;
                                    $percentStar4 = $totalComments > 0 ? ($star4 / $totalComments) * 100 : 0;
                                    $percentStar5 = $totalComments > 0 ? ($star5 / $totalComments) * 100 : 0;

                                    if($totalReviews > 0) {
                                        $averageRating = $averageRating / $totalReviews;
                                    } 
                                    $averageRatinge = intval($averageRating);
                                @endphp
                                
                                @if($totalReviews == 0)
                                    
                                @else
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $averageRatinge )
                                            <i class="fa fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                @endif
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price">
                                    {{ $product->price }}
                                    <del class="product-old-price">
                                        @if($product->old_price !== null && $product->old_price != 0.0)
                                            {{ $product->old_price }}
                                        @endif
                                    </del>
                                </h3>
                                @if($product->stock > 0)
								    <span class="product-available">In Stock</span>
                                @else
                                    <span class="product-available-red">Not in Stock</span>
                                @endif
							</div>
							<p>{{ $product->Description }}</p>

							<div class="product-options">
								<label>
									Size
									<select class="input-select">
										<option value="0">X</option>
									</select>
								</label>
								<label>
									Color
									<select class="input-select">
										<option value="0">Red</option>
									</select>
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">Headphones</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews ({{$totalReviews}})</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-3">
											<div id="rating">
												<div class="rating-avg">
													<span>{{$averageRating}}</span>
													<div class="rating-stars">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        @if($i <= $averageRatinge )
                                                            <i class="fa fa-star"></i>
                                                        @else
                                                            <i class="fa fa-star-o"></i>
                                                        @endif
                                                    @endfor
												
													</div>
												</div>
												<ul class="rating">
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-progress">
															<div style="width: {{$percentStar5}}%;"></div>
														</div>
														<span class="sum">{{$star5}}</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: {{$percentStar4}}%;"></div>
														</div>
														<span class="sum">{{$star4}}</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: {{$percentStar3}}%;"></div>
														</div>
														<span class="sum">{{$star3}}</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: {{$percentStar2}}%;"></div>
														</div>
														<span class="sum">{{$star2}}</span>
													</li>
													<li>
														<div class="rating-stars">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<div class="rating-progress">
															<div style="width: {{$percentStar1}}%;"></div>
														</div>
														<span class="sum">{{$star1}}</span>
													</li>
												</ul>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-6">
											<div id="reviews">
												<ul class="reviews">
                                                
                                                @foreach($reviews as $review) 
                                                    @if($review->product_id == $product->id) 
                                                        <li>
                                                            <div class="review-heading">
                                                                <h5 class="name">{{$review->user_name}}</h5>
                                                                <p class="date">27 DEC 2018, 8:0 PM</p>
                                                                <div class="review-rating">
                                                                @for($i = 1; $i <= 5; $i++)
                                                                    @if($i <= $review->product_rating )
                                                                        <i class="fa fa-star"></i>
                                                                    @else
                                                                        <i class="far fa-star"></i>
                                                                    @endif
                                                                @endfor
                                                                </div>
                                                            </div>
                                                            <div class="review-body">
                                                                <p>{{$review->comentario}}</p>
                                                            </div>
                                                        </li>
                                                    
                                                        
                                                    @endif
                                                    
                                                @endforeach
												</ul>
												
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-3">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Your Name">
													<input class="input" type="email" placeholder="Your Email">
													<textarea class="input" placeholder="Your Review"></textarea>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
															<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
															<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
															<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
															<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
														</div>
													</div>
													<button class="primary-btn">Submit</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>

					<!-- product -->
					
                    @foreach($products as $product)
                      <div class="col-md-3 col-xs-6">             
                            <div class="product">
                            <a href="{{route('product',$product->id)}}"></a>
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                    <div class="product-label">
                                    @if($product->sale != 0 && !is_null($product->sale))
                                        <span class="sale" wire:ignore>-{{ $product->sale }}%</span>
                                    @endif
                                    @php
                                        $lastUpdated = \Carbon\Carbon::parse($product->updated_at);
                                        $difference = $lastUpdated->diffInDays(\Carbon\Carbon::now());
                                        $isNewProduct = $difference < 7;
                                    @endphp
                                    @if($isNewProduct)
                                        <span class="new">NEW</span>
                                    @endif
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">
                                    @foreach($categories as $category)
                                        @if($category->id === $product->idcategory)
                                            <a href="#">{{ $category->title }}</a>
                                        @endif
                                    @endforeach

                                    </p>
                                    <h3 class="product-name"><a href="#">{{ $product->product_name }}</a></h3>
                                    <h4 class="product-price">
                                        {{ $product->price }}
                                        <del class="product-old-price">
                                        @if($product->old_price !== null && $product->old_price != 0.0)
                                            {{ $product->old_price }}
                                        @endif

                                        </del>
                                    </h4>
                                    <div class="product-rating">
                                    @php

                                    $averageRating = 0;
                                    $totalReviews = 0;

                                    foreach($reviews as $review) {
                                        if($review->product_id == $product->id) {
                                            
                                            $averageRating += $review->product_rating;
                                            $totalReviews++;
                                        }
                                    }

                                    if($totalReviews > 0) {
                                        $averageRating = $averageRating / $totalReviews;
                                    } 
                                    $averageRating = intval($averageRating);
                                    @endphp

                                    @if($totalReviews == 0)

                                    @else
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $averageRating )
                                            <i class="fa fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                    @endif
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><a href="{{route('product',$product->id)}}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
					<!-- /product -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->
	</body>
</html>

</div>
@endsection
