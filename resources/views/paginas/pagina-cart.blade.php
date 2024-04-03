@extends('main')

@section('pagina-cart')
<div class="container-view-cart">
    <h1>O meu carrinho</h1>
    <br>
    <div class="row container-view-info">
        <div class="col-8">
            <div class="row">
                <div class="col-7 d-flex">
                    <div class="img-item"><img src="{{ asset('./assets/images/product01.png') }}" alt=""></div>
                    <div class="info-item">
                            <h5>Kettlebell de Competição</h5>
                            <p>Referência: CK020</p>
                            <p>Peso: 20KG</p>
                        </div>
                </div>
                <div class="col-5 d-flex justify-content-between">
                    <div class="camp-qtd">
                        <div class="d-flex">
                            <button onclick="decrement(1)">-</button>
                            <input type="text" id="counter1" value="1">
                            <button onclick="increment(1)">+</button>
                        </div>
                        <a href="#">Remover</a>                   
                    </div>

                    <div>
                        <p>1X62.30€</p>
                        <h4>62.30€</h4>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-7 d-flex">
                  
                        <div class="img-item"><img src="{{ asset('./assets/images/product01.png') }}" alt=""></div>
                        <div class="info-item">
                            <h5>Kettlebell de Competição</h5>
                            <p>Referência: CK020</p>
                            <p>Peso: 20KG</p>
                        </div>
                   
                </div>
                <div class="col-5 d-flex justify-content-between">
                    <div class="camp-qtd">
                        <div class="d-flex">
                            <button onclick="decrement(2)">-</button>
                            <input type="text" id="counter2" value="1">
                            <button onclick="increment(2)">+</button>
                        </div>
                        <a href="#">Remover</a>                   
                    </div>
                    <div>
                        <p>1X62.30€</p>
                        <h4>62.30€</h4>
                    </div>
                </div>
            </div>
            <hr>
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
            <br>
            <div class="d-flex camp-cupao">
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
