<div class="container-fluid navbar-top">
    <div class="container">
        <div class="row" style="justify-content: space-between;align-items: center;justify-content: center;">
            <div class="col-12 col-lg-4 logo-img">
                <a href="{{ route('/') }}">
                    <img src="{{ asset('assets/images/logo.png')}}" alt="">
                </a>
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
                    <p class="number"><span>2</span></p>
                </div>
                <div class="dropdown icon">
                    <span id="dropdown-cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p class="number d-none" id="container-total-itens"><span id="total-itens"></span></p>
                    </span>
                    <div class="dropdown-content" id="dropdown-content-container">
                        <div class="cart-list">
                            <div id="cart-container"></div>
                        </div>
                        <div class="cart-summary">
                            <small><span id="total-itens"></span> Item(s) selected</small>
                            <h5>SUBTOTAL:<span id="total-price"></span></h5>
                        </div>
                        <div class="cart-btns">
                            <a class="view-cart" href="{{ route('cart') }}">View Cart</a>
                            <a class="checkout" href="{{ route('checkout') }}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
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
                    <li class="{{ Str::contains(request()->route()->getName(), '/') ? 'active' : '' }}"><a href="{{ route('/') }}">Home</a></li>
                    <li class="paste-button">
                        <button class="button"><a>Categories</a></button>
                        <div class="dropdown-contente ">
                            @foreach($categories as $category)
                                <a href="#">{{ $category->title }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li><a href="#">Oferta do dia</a></li>
                    <li><a href="#">Histórico</a></li>
                    <li class="{{ Str::contains(request()->route()->getName(), 'filtro-products') ? 'active' : '' }}"><a href="{{ route('filtro-products') }}">Produtos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </div>
