@extends('main')

@section('pagina-cart')
<div class="container-view-cart">
    <div id="container-If-conteudo-on" style="display: none;">
        <h1>O meu carrinho</h1>
        <br>
        <div class="row container-view-info">
            <div class="col-8">
                <div id="cart-container-line"></div>
            
                <div class="d-flex justify-content-between">
                    <a href="{{ route('/') }}"><i class="fa-solid fa-arrow-left"></i> Voltar à loja</a>
                    <span class="btn_checkout">
                        <a href="{{ route('checkout') }}"><button type="submit" class="btn">Checkout</button></a>
                        <p>Li e aceito os <a href="#">Termos e condições</a></p>
                    </span>
                </div>
            </div>
            <div class="col-4 container-values-cart">
                <h3><span id="total-itens-page"></span> Itens</h3>
                <br>
                <div class="d-flex camp-cupao">
                    <input type="text" placeholder="Cupão de desconto">
                    <button class="btn btn-primary">Aplicar</button>
                </div>
                <br>
                <div class="d-flex justify-content-between">
                    <p>Sub-Total</p>
                    <h5 id="value-cart-subTotal"></h5>
                </div>
                <hr>
                <div class="d-flex justify-content-between camp-total">
                    <span class="d-flex">
                        <h4>Total</h4>
                        <small>taxas incluídas</small>
                    </span>
                    <h4 id="value-cart-Total"></h4>
                </div>
                <br>
                <textarea name="observacao_cart" id="observacao_cart" placeholder="Observações"></textarea>
            </div>
        </div>
    </div>
    <div id="container-If-conteudo-off" style="display: none;">
        <h2>O seu carrinho está vazio.</h2>    
        <a href="{{ route('/') }}"><i class="fa-solid fa-arrow-left"></i> Voltar à loja</a>
    </div>
</div>
<script src="{{ asset('assets/scripts/cartPage.js') }}"></script>
@endsection
