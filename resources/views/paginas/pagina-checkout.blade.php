@extends('main')
<style>
    .input-radio, .input-checkbox {
  position: relative;
  display: block;
}

.input-radio input[type="radio"]:not(:checked), .input-radio input[type="radio"]:checked, .input-checkbox input[type="checkbox"]:not(:checked), .input-checkbox input[type="checkbox"]:checked {
  position: absolute;
  margin-left: -9999px;
  visibility: hidden;
}

.input-radio label, .input-checkbox label {
  font-weight: 500;
  min-height: 20px;
  padding-left: 20px;
  margin-bottom: 5px;
  cursor: pointer;
}

.input-radio input[type="radio"]+label span, .input-checkbox input[type="checkbox"]+label span {
  position: absolute;
  left: 0px;
  top: 4px;
  width: 14px;
  height: 14px;
  border: 2px solid #E4E7ED;
  background: #FFF;
}

.input-radio input[type="radio"]+label span {
  border-radius: 50%;
}

.input-radio input[type="radio"]+label span:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) scale(0);
  -ms-transform: translate(-50%, -50%) scale(0);
  transform: translate(-50%, -50%) scale(0);
  background-color: #FFF;
  width: 4px;
  height: 4px;
  border-radius: 50%;
  opacity: 0;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.input-checkbox input[type="checkbox"]+label span:after {
  content: '✔';
  position: absolute;
  top: -2px;
  left: 1px;
  font-size: 10px;
  color: #FFF;
  opacity: 0;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}

.input-radio input[type="radio"]:checked+label span, .input-checkbox input[type="checkbox"]:checked+label span {
  background-color: var(--ColorPrimaria);
  border-color: var(--ColorPrimaria);
}

.input-radio input[type="radio"]:checked+label span:after {
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(1);
  -ms-transform: translate(-50%, -50%) scale(1);
  transform: translate(-50%, -50%) scale(1);
}

.input-checkbox input[type="checkbox"]:checked+label span:after {
  opacity: 1;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.input-radio .caption, .input-checkbox .caption {
  margin-top: 5px;
  max-height: 0;
  overflow: hidden;
  -webkit-transition: 0.3s max-height;
  transition: 0.3s max-height;
}

.input-radio input[type="radio"]:checked~.caption, .input-checkbox input[type="checkbox"]:checked~.caption {
  max-height: 800px;
}

    .billing-details {
        margin-bottom: 30px;
    }

    .shiping-details {
        margin-bottom: 30px;
    }

    .order-details {
        position: relative;
        padding: 0px 30px 30px;
        border-right: 1px solid #E4E7ED;
        border-left: 1px solid #E4E7ED;
        border-bottom: 1px solid #E4E7ED;
    }

    .order-details:before {
        content: "";
        position: absolute;
        left: -1px;
        right: -1px;
        top: -15px;
        height: 30px;
        border-top: 1px solid #E4E7ED;
        border-left: 1px solid #E4E7ED;
        border-right: 1px solid #E4E7ED;
    }

    .order-summary {
        margin: 15px 0px;
    }

    .order-summary .order-col {
        display: table;
        width: 100%;
    }

    .order-summary .order-col:after {
        content: "";
        display: block;
        clear: both;
    }

    .order-summary .order-col>div {
        display: table-cell;
        padding: 10px 0px;
    }

    .order-summary .order-col>div:first-child {
        width: calc(100% - 150px);
    }

    .order-summary .order-col>div:last-child {
        width: 150px;
        text-align: right;
    }

    .order-summary .order-col .order-total {
        font-size: 24px;
        color: var(--ColorPrimaria);
    }

    .order-details .payment-method {
        margin: 30px 0px;
    }

    .order-details .order-submit {
        display: block;
        margin-top: 30px;
    }
</style>
@section('pagina-checkout')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <h3 class="title">Billing address</h3>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="first-name" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="last-name" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="country" placeholder="Country">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                        </div>
                        <div class="form-group">
                            <input class="input" type="tel" name="tel" placeholder="Telephone">
                        </div>
                        <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" id="create-account">
                                <label for="create-account">
                                    <span></span>
                                    Create Account?
                                </label>
                                <div class="caption">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt.</p>
                                    <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Billing Details -->

                    <!-- Shiping Details -->
                    <div class="shiping-details">
                        <div class="section-title">
                            <h3 class="title">Shiping address</h3>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="shiping-address">
                            <label for="shiping-address">
                                <span></span>
                                Ship to a diffrent address?
                            </label>
                            <div class="caption">
                                <div class="form-group">
                                    <input class="input" type="text" name="first-name" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="last-name" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="address" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="city" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="country" placeholder="Country">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="tel" name="tel" placeholder="Telephone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Shiping Details -->

                    <!-- Order notes -->
                    <div class="order-notes">
                        <textarea class="input" placeholder="Order Notes"></textarea>
                    </div>
                    <!-- /Order notes -->
                </div>

                <!-- Order Details -->
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Order</h3>
                    </div>
                    <div class="order-summary">
                        <div class="order-col">
                            <div><strong>PRODUCT</strong></div>
                            <div><strong>TOTAL</strong></div>
                        </div>
                        <div class="order-products">
                            <div class="order-col">
                                <div>1x Product Name Goes Here</div>
                                <div>$980.00</div>
                            </div>
                            <div class="order-col">
                                <div>2x Product Name Goes Here</div>
                                <div>$980.00</div>
                            </div>
                        </div>
                        <div class="order-col">
                            <div>Shiping</div>
                            <div><strong>FREE</strong></div>
                        </div>
                        <div class="order-col">
                            <div><strong>TOTAL</strong></div>
                            <div><strong class="order-total">$2940.00</strong></div>
                        </div>
                    </div>
                    <div class="payment-method">
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-1">
                            <label for="payment-1">
                                <span></span>
                                Direct Bank Transfer
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-2">
                            <label for="payment-2">
                                <span></span>
                                Cheque Payment
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="payment" id="payment-3">
                            <label for="payment-3">
                                <span></span>
                                Paypal System
                            </label>
                            <div class="caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="input-checkbox">
                        <input type="checkbox" id="terms">
                        <label for="terms">
                            <span></span>
                            I've read and accept the <a href="#">terms & conditions</a>
                        </label>
                    </div>
                    <a href="#" class="primary-btn order-submit">Place order</a>
                </div>
                <!-- /Order Details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection
