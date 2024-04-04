@extends('main')

@section('pagina-cart')
<div class="container-view-cart">
    <h1>O meu carrinho</h1>
    <br>
    <div class="row container-view-info">
        <div class="col-8">
            <div id="cart-container-line"></div>
           
            <div class="d-flex justify-content-between">
                <a href="{{ route('/') }}">Voltar à loja</a>
                <span class="btn_checkout">
                    <button type="submit" class="btn">Checkout</button>
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
                <h5>143.30€</h5>
            </div>
            <hr>
            <div class="d-flex justify-content-between camp-total">
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



    <button id="clear-localstorage-btn">Limpar LocalStorage</button>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        if (key.startsWith('cartProduct_')) {
            var productId = key.replace('cartProduct_', '');
            var productDetails = JSON.parse(localStorage.getItem(key));
            renderProductInCartPage(productId, productDetails);
            updateTotalItemsPage();
        }
    }

});
function updateTotalItemsPage() {
    var totalItemsSpanPage = document.getElementById('total-itens-page');
    var totalItems = localStorage.length;
    
    totalItemsSpanPage.textContent = totalItems;
}

function renderProductInCartPage(productId, productDetails) {
    var cartContainerLine = document.getElementById('cart-container-line');

    // Criar elementos HTML
    var rowDiv = document.createElement("div");
    rowDiv.classList.add("row");

    var col7Div = document.createElement("div");
    col7Div.classList.add("col-7", "d-flex");

    var imgItemDiv = document.createElement("div");
    imgItemDiv.classList.add("img-item");
    var img = document.createElement("img");
    img.setAttribute("src", productDetails.image_name);
    img.setAttribute("alt", "");
    imgItemDiv.appendChild(img);

    var infoItemDiv = document.createElement("div");
    infoItemDiv.classList.add("info-item");
    var h5 = document.createElement("h5");
    h5.textContent = productDetails.product_name;
    var p1 = document.createElement("p");
    p1.textContent = "Referência: " + productDetails.id;
    var p2 = document.createElement("p");
    p2.textContent = "Peso: " + productDetails.weight;
    infoItemDiv.appendChild(h5);
    infoItemDiv.appendChild(p1);
    infoItemDiv.appendChild(p2);

    col7Div.appendChild(imgItemDiv);
    col7Div.appendChild(infoItemDiv);

    var col5Div = document.createElement("div");
    col5Div.classList.add("col-5", "d-flex", "justify-content-between");

    var campQtdDiv = document.createElement("div");
    campQtdDiv.classList.add("camp-qtd");
    var innerDiv = document.createElement("div");
    innerDiv.classList.add("d-flex");
    var decrementButton = document.createElement("button");
    decrementButton.textContent = "-";
    decrementButton.setAttribute("onclick", "decrement(" + productId + ")");
    var input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("id", "counter" + productId);
    input.setAttribute("value", "1");
    var incrementButton = document.createElement("button");
    incrementButton.textContent = "+";
    incrementButton.setAttribute("onclick", "increment(" + productId + ")");
    innerDiv.appendChild(decrementButton);
    innerDiv.appendChild(input);
    innerDiv.appendChild(incrementButton);
    var removeLink = document.createElement("a");
    removeLink.setAttribute("href", "#");
    removeLink.textContent = "Remover";
    campQtdDiv.appendChild(innerDiv);
    campQtdDiv.appendChild(removeLink);

    var priceDiv = document.createElement("div");
    var p3 = document.createElement("p");
    p3.textContent = "1X" + productDetails.price + "€";
    var h4 = document.createElement("h4");
    h4.textContent = productDetails.price + "€";
    priceDiv.appendChild(p3);
    priceDiv.appendChild(h4);

    col5Div.appendChild(campQtdDiv);
    col5Div.appendChild(priceDiv);

    rowDiv.appendChild(col7Div);
    rowDiv.appendChild(col5Div);

    cartContainerLine.appendChild(rowDiv);
}

function increment(id) {
    var counter = document.getElementById('counter'+ id);
    var value = parseInt(counter.value);
    counter.value = value + 1;
}

function decrement(id) {
    var counter = document.getElementById('counter'+ id);
    var value = parseInt(counter.value);
    if (value > 1) {
        counter.value = value - 1;
    }
}
</script>
@endsection
