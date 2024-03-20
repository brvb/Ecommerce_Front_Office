<div class="container-fluid navbar-top">
    <div class="container">
        <div class="row" style="justify-content: space-between;align-items: center;justify-content: center;">
            <div class="col-12 col-lg-4 logo-img">
                <img src="{{ asset('assets/images/logo.png')}}" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <div class="input-group navbar-search" style="flex-wrap: inherit;display: flex;flex-direction: row;">
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="button" id="button-addon2">Search</button>
                </div>
            </div>
            <div class="col-12 col-lg-2  d-flex container-icons" style="justify-content: flex-end;">
                <div class="icon">
                    <i class="fa-regular fa-heart"></i>
                    <p class="number">3</p>
                </div>
                <div class="dropdown icon">
                    <span id="dropdown-cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p class="number">2</p>
                    </span>
                    <div class="dropdown-content" id="dropdown-content-container">
                        <div class="cart-list">

                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{ asset('assets/images/product01.png')}}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                                </div>
                                <button class="delete"><i class="fa fa-close"></i></button>
                            </div>

                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="{{ asset('assets/images/product02.png')}}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                                </div>
                                <button class="delete"><i class="fa fa-close"></i></button>
                            </div>

                        </div>
                        <div class="cart-summary">
                            <small>3 Item(s) selected</small>
                            <h5>SUBTOTAL: $2940.00</h5>
                        </div>
                        <div class="cart-btns">
                            <a class="view-cart" href="#">View Cart</a>
                            <a class="checkout" href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="menu-toggle icon">
                    <a href="#" id="menu-toggle-btn">
                        <i class="fa fa-bars"></i>
                        <span>Menu</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="navigation container-fluid" id="sidebar">
        <!-- container -->
        <div class="container" style="padding-left: 0;">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Hot Deals</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Laptops</a></li>
                    <li><a href="#">Smartphones</a></li>
                    <li><a href="#">Cameras</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </div>
