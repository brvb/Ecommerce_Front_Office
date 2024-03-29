@extends('main')
<style>
    .col-md-4.col-xs-6 {
        padding-bottom: 30px;
    }

    .aside+.aside {
        margin-top: 30px;
    }

    .aside>.aside-title {
        text-transform: uppercase;
        font-size: 18px;
        margin: 15px 0px 30px;
    }

    /*-- checkbox Filter --*/

    .checkbox-filter>div+div {
        margin-top: 10px;
    }

    .checkbox-filter .input-radio label,
    .checkbox-filter .input-checkbox label {
        font-size: 12px;
    }

    .checkbox-filter .input-radio label small,
    .checkbox-filter .input-checkbox label small {
        color: #8D99AE;
    }

    /*-- Price Filter --*/

    #price-slider {
        margin-bottom: 15px;
    }

    .noUi-target {
        background-color: #FFF;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid #E4E7ED;
        border-radius: 0px;
    }

    .noUi-connect {
        background-color: var(--ColorPrimaria);
    }

    .noUi-horizontal {
        height: 6px;
    }

    .noUi-horizontal .noUi-handle {
        width: 12px;
        height: 12px;
        left: -6px;
        top: -4px;
        border: none;
        background: var(--ColorPrimaria);
        -webkit-box-shadow: none;
        box-shadow: none;
        border-radius: 50%;
    }

    .noUi-handle:before,
    .noUi-handle:after {
        display: none;
    }

    .price-filter .input-number {
        display: inline-block;
        width: calc(50% - 7px);
    }

    /*----------------------------*\
 Store
\*----------------------------*/

    .store-filter {
        margin-bottom: 15px;
        margin-top: 15px;
    }

    /*-- Store Sort --*/

    .store-sort {
        display: inline-block;
    }

    .store-sort label {
        font-weight: 500;
        font-size: 12px;
        text-transform: uppercase;
        margin-right: 15px;
    }

    /*-- Store Grid --*/

    .store-grid {
        float: right;
    }

    .store-grid li {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        background-color: #FFF;
        border: 1px solid #E4E7ED;
        text-align: center;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .store-grid li+li {
        margin-left: 5px;
    }

    .store-grid li:hover {
        background-color: #E4E7ED;
        color: var(--ColorPrimaria);
    }

    .store-grid li.active {
        background-color: var(--ColorPrimaria);
        border-color: var(--ColorPrimaria);
        color: #FFF;
        cursor: default;
    }

    .store-grid li a {
        display: block;
    }

    /*-- Store Pagination --*/

    .store-pagination {
        float: right;
    }

    .store-pagination li {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background-color: #FFF;
        border: 1px solid #E4E7ED;
        -webkit-transition: 0.2s all;
        transition: 0.2s all;
    }

    .store-pagination li+li {
        margin-left: 5px;
    }

    .store-pagination li:hover {
        background-color: #E4E7ED;
        color: var(--ColorPrimaria);
    }

    .store-pagination li.active {
        background-color: var(--ColorPrimaria);
        border-color: var(--ColorPrimaria);
        color: #FFF;
        font-weight: 500;
        cursor: default;
    }

    .store-pagination li a {
        display: block;
    }

    .store-qty {
        margin-right: 30px;
        font-weight: 500;
        text-transform: uppercase;
        font-size: 12px;
    }

    .input-checkbox {
    display: flex;
    align-items: center;
}

.checkbox-check {
    display: none;
}

.checkbox-label {
    position: relative;
    padding-left: 30px; /* Espaço para a marca de seleção */
    cursor: pointer;
    font-size: 12px;
    line-height: 20px;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 16px;
    width: 16px;
    background-color: #cccccc67;
    border-radius: 3px;
    border: #bac3d3 solid 1px;
}

/* Adicionando estilo quando o checkbox está marcado */
.checkbox-check:checked + .checkbox-label .checkmark {
    background-color: var(--ColorPrimaria); /* Altere para a cor desejada */
    border: #bac3d3 solid 1px;
}

.checkbox-check:checked + .checkbox-label .checkmark:after {
    content: "";
    position: absolute;
    display: block;
    left: 5px;
    top: 1px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

.checkbox-label:hover .checkmark {
    background-color: #e0e0e0;
}


</style>
@section('pagina-filtro-products')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-3">
                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Categorias</h3>
                        <div class="checkbox-filter">

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-1" class="checkbox-check">
                                <label for="category-1" class="checkbox-label">
                                    <span class="checkmark"></span>
                                    Laptops
                                    <small>(120)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-2" class="checkbox-check">
                                <label for="category-2" class="checkbox-label">
                                <span class="checkmark"></span>
                                Smartphones
                                <small>(740)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-3" class="checkbox-check">
                                <label for="category-3" class="checkbox-label">
                                <span class="checkmark"></span>
                                    Cameras
                                    <small>(1450)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-4" class="checkbox-check">
                                <label for="category-4" class="checkbox-label">
                                <span class="checkmark"></span>
                                    Accessories
                                    <small>(578)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-5" class="checkbox-check">
                                <label for="category-5" class="checkbox-label">
                                <span class="checkmark"></span>
                                    Laptops
                                    <small>(120)</small>
                                </label>
                            </div>

                            <div class="input-checkbox">
                                <input type="checkbox" id="category-6" class="checkbox-check">
                                <label for="category-6" class="checkbox-label">
                                <span class="checkmark"></span>
                                    Smartphones
                                    <small>(740)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Price</h3>
                        <div class="price-filter">
                            <div id="price-slider"></div>
                            <div class="input-number price-min">
                                <input id="price-min" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                            <span>-</span>
                            <div class="input-number price-max">
                                <input id="price-max" type="number">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Marca</h3>
                        <div class="checkbox-filter">
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-1" class="checkbox-check">
                                <label for="brand-1" class="checkbox-label">
                                    <span class="checkmark"></span>
                                    SAMSUNG
                                    <small>(578)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-2" class="checkbox-check">
                                <label for="brand-2" class="checkbox-label">
                                    <span class="checkmark"></span>
                                    LG
                                    <small>(125)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-3" class="checkbox-check">
                                <label for="brand-3" class="checkbox-label">
                                    <span class="checkmark"></span>
                                    SONY
                                    <small>(755)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-4" class="checkbox-check">
                                <label for="brand-4" class="checkbox-label">
                                    <span class="checkmark"></span>
                                    SAMSUNG
                                    <small>(578)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-5" class="checkbox-check">
                                <label for="brand-5" class="checkbox-label">
                                    <span class="checkmark"></span>
                                    LG
                                    <small>(125)</small>
                                </label>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="brand-6" class="checkbox-check">
                                <label for="brand-6" class="checkbox-label">
                                    <span class="checkmark"></span>
                                    SONY
                                    <small>(755)</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->

                    <!-- aside Widget -->
                    <div class="aside">
                        <h3 class="aside-title">Top selling</h3>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>

                        <div class="product-widget">
                            <div class="product-img">
                                <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            </div>
                        </div>
                    </div>
                    <!-- /aside Widget -->
                </div>
                <!-- /ASIDE -->

                <!-- STORE -->
                <div id="store" class="col-md-9">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sort By:
                                <select class="input-select">
                                    <option value="0">Popular</option>
                                    <option value="1">Position</option>
                                </select>
                            </label>

                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">20</option>
                                    <option value="1">50</option>
                                </select>
                            </label>
                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
                    <div class="row">
                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                    <div class="product-label">
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <div class="clearfix visible-sm visible-xs"></div>

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <div class="clearfix visible-lg visible-md"></div>

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <div class="clearfix visible-sm visible-xs"></div>

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->

                        <div class="clearfix visible-sm visible-xs"></div>

                        <!-- product -->
                        <div class="col-md-4 col-xs-6">
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{ asset('./assets/images/product01.png') }}" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                                    <div class="product-rating">
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick
                                                view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                        cart</button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                    </div>
                    <!-- /store products -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        <span class="store-qty">Showing 20-100 products</span>
                        <ul class="store-pagination">
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection

