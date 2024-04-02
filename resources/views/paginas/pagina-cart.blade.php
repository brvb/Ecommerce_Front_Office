@extends('main')

@section('pagina-cart')
<div class="container-view-cart">
    <h1>O meu carrinho</h1>
    <br>
    <div class="row container-view-info">
        <div class="col-8">
            <div class="row">
                <div class="col-7">Foto text</div>
                <div class="col-5 d-flex justify-content-between">
                    <div>value 1</div>
                    <div>value 2</div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">Foto text</div>
                <div class="col-5 d-flex justify-content-between">
                    <div>value 1</div>
                    <div>value 2</div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="#">Voltar à loja</a>
                <span>
                    <button type="submit" class="btn btn-success">Checkout</button>
                    <p>Li e aceito os <a href="#">Termos e condições</a></p>
                </span>
            </div>
        </div>
        <div class="col-4 container-values-cart">
            <h3>2 Itens</h3>
            <div class="d-flex">
                <input type="text" placeholder="Cupão de desconto">
                <button class="btn btn-primary">Aplicar</button>
            </div>
            <br>
            <div class="d-flex justify-content-between">
                <p>Sub-Total</p>
                <h5>143.30€</h5>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <span class="d-flex">
                    <h4>Total</h4>
                    <small>taxas incluídas</small>
                </span>
                <h4>143.30€</h4>
            </div>
            <br>
            <textarea name="observacao_cart" id="observacao_cart" placeholder="Observações"></textarea>
        </div>
    </div>



  {{-- <button id="clear-localstorage-btn">Limpar LocalStorage</button> --}}
</div>

@endsection
