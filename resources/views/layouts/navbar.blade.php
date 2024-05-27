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
                    <input type="text" class="form-control" placeholder="{{ __('Search here') }}">
                    <button class="btn" type="button" id="button-addon2">{{ __('Search') }}</button>
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
                        <p class="number d-none" id="total-itens"></p>
                    </span>
                    <div class="dropdown-content" id="dropdown-content-container">
                        <div class="cart-list">
                            <div id="cart-container"></div>
                        </div>
                        <div class="cart-summary">
                            <small><span id="total-itens-card"></span> {{ __('Item(s) selected') }}</small>
                            <h5>SUBTOTAL:<span id="total-price"></span></h5>
                        </div>
                        <div class="cart-btns">
                            <a class="view-cart" href="{{ route('cart') }}">{{ __('View Cart') }}</a>
                            <a class="checkout" href="{{ route('checkout') }}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- vincius -->
                <div class="flag-switch icon theme" style="top: 20px;width: 25px;height: 25px;">
                    <input type="checkbox" id="check1" class="input" onchange="window.location.href = this.checked ? '{{ route('language.switch', 'en') }}' : '{{ route('language.switch', 'pt') }}'" {{ app()->getLocale() === 'en' ? 'checked' : '' }}>
                    <div class="icon2 icon-sun" width="24">en</div>
                    <div class="icon2 icon-moon">pt</div>
                </div>
                <!-- vincius -->
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
<div class="navigation container-fluid" id="sidebar" style="z-index: 999;">
        <!-- container -->
        <div class="container" style="padding-left: 0;">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav navbar-nav">
                    <li class="{{ Str::contains(request()->route()->getName(), '/') ? 'active' : '' }}"><a href="{{ route('/') }}">{{ __('Home') }}</a></li>
                    <li class="paste-button" style="z-index: 998;">
                        <button class="button"><a>{{ __('Categories') }}</a></button>
                        <div class="dropdown-contente">
                            @foreach($categories as $category)
                                <a href="#">{{ $category->title }}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="{{ Str::contains(request()->route()->getName(), 'oferta') ? 'active' : '' }}"><a href="{{ route('oferta') }}">Ofertas do dia</a></li>
                    <li><a href="#">Histórico</a></li>
                    <li class="{{ Str::contains(request()->route()->getName(), 'filtro-products') ? 'active' : '' }}"><a href="{{ route('filtro-products') }}">Produtos</a></li>
                    <li class="{{ Str::contains(request()->route()->getName(), 'contacto') ? 'active' : '' }}"><a href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </div>
