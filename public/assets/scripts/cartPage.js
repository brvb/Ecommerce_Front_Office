document.addEventListener('DOMContentLoaded', function() {
    for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        if (key.startsWith('cartProduct_')) {
            var productId = key.replace('cartProduct_', '');
            var productDetails = JSON.parse(localStorage.getItem(key));
            renderProductInCartPage(productId, productDetails);
        }
    }
    hasItemsInCart() 
});

function hasItemsInCart() {
var hasItemsInCart = localStorage.length;

if (hasItemsInCart) {
    document.getElementById('container-If-conteudo-on').style.display = 'block';
    document.getElementById('container-If-conteudo-off').style.display = 'none';

} else {
    document.getElementById('container-If-conteudo-on').style.display = 'none';
    document.getElementById('container-If-conteudo-off').style.display = 'block';
}
}

function updateTotalPrice(id, quantity) {
var productData = JSON.parse(localStorage.getItem('cartProduct_' + id));
var totalPrice = parseFloat(productData.productDetails.price) * quantity;
var priceElement = document.getElementById('total-price-' + id);
priceElement.textContent = totalPrice.toFixed(2) + "€";
}

function renderProductInCartPage(productId, productDetails) {
var productData = JSON.parse(localStorage.getItem('cartProduct_' + productId));
var quantity = productData.quantity;
var cartContainerLine = document.getElementById('cart-container-line');

var rowDiv = document.createElement("div");
rowDiv.classList.add("row");
rowDiv.id = 'cart-item-page-' + productId;

var col7Div = document.createElement("div");
col7Div.classList.add("col-7", "d-flex");

var imgItemDiv = document.createElement("div");
imgItemDiv.classList.add("img-item");
var img = document.createElement("img");
img.setAttribute("src", productDetails.productDetails.image_name);
img.setAttribute("alt", "");
imgItemDiv.appendChild(img);

var infoItemDiv = document.createElement("div");
infoItemDiv.classList.add("info-item");
var h5 = document.createElement("h5");
h5.textContent = productDetails.productDetails.product_name;
var p1 = document.createElement("p");
p1.textContent = "Referência: " + productDetails.productDetails.id;
var p2 = document.createElement("p");
p2.textContent = "Peso: " + productDetails.productDetails.weight;
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
input.setAttribute("value", quantity);
var incrementButton = document.createElement("button");
incrementButton.textContent = "+";
incrementButton.setAttribute("onclick", "increment(" + productId + ")");
innerDiv.appendChild(decrementButton);
innerDiv.appendChild(input);
innerDiv.appendChild(incrementButton);
var removeLink = document.createElement("a");
removeLink.setAttribute("href", "#");
removeLink.setAttribute("onclick", "removeItemCart(" + productId + ")");
removeLink.textContent = "Remover";
campQtdDiv.appendChild(innerDiv);
campQtdDiv.appendChild(removeLink);

var priceDiv = document.createElement("div");
var p3 = document.createElement("p");
p3.id = "quantity-text-" + productId;
p3.textContent = quantity + "X" + productDetails.productDetails.price + "€";

var h4 = document.createElement("h4");
h4.id = "total-price-" + productId;
var totalPrice = parseFloat(productDetails.productDetails.price) * quantity;
h4.textContent = totalPrice.toFixed(2) + "€";
priceDiv.appendChild(p3);
priceDiv.appendChild(h4);


col5Div.appendChild(campQtdDiv);
col5Div.appendChild(priceDiv);

rowDiv.appendChild(col7Div);
rowDiv.appendChild(col5Div);

cartContainerLine.appendChild(rowDiv);
recalcularSomatotal();
}
function increment(id) {
var counter = document.getElementById('counter'+ id);
var value = parseInt(counter.value);
counter.value = value + 1;

var productData = JSON.parse(localStorage.getItem('cartProduct_' + id));
productData.quantity = value + 1;
localStorage.setItem('cartProduct_' + id, JSON.stringify(productData));

updateTotalPrice(id, value + 1);
updateProductQuantityAndPrice(id, value + 1);

}

function decrement(id) {
var counter = document.getElementById('counter'+ id);
var value = parseInt(counter.value);
if (value > 1) {
    counter.value = value - 1;

    var productData = JSON.parse(localStorage.getItem('cartProduct_' + id));
    productData.quantity = value - 1;
    localStorage.setItem('cartProduct_' + id, JSON.stringify(productData));

    updateTotalPrice(id, value - 1);
    updateProductQuantityAndPrice(id, value - 1);
}

}

function updateProductQuantityAndPrice(id, quantity) {
var p3 = document.getElementById('quantity-text-' + id);
var qty = document.getElementById('qty-' + id);

var totalPriceElement = document.getElementById('total-price-' + id);
var productData = JSON.parse(localStorage.getItem('cartProduct_' + id));
var price = parseFloat(productData.productDetails.price);
var totalPrice = price * quantity;

recalcularSomatotal();
qty.textContent = quantity + "x";
p3.textContent = quantity + "X" + price.toFixed(2) + "€";
totalPriceElement.textContent = totalPrice.toFixed(2) + "€";
}

function recalcularSomatotal() {
var subTotal = document.getElementById('value-cart-subTotal');
var Total = document.getElementById('value-cart-Total');
var totalItemsSpanPage = document.getElementById('total-itens-page');
var totalItemsSpan = document.getElementById('total-itens');
var totalItemsSpanCard = document.getElementById('total-itens-card');
var totalPriceElement = document.getElementById('total-price');


var totalQuantityJuntos = 0;
var totalPriceJuntos = 0;
for (var i = 0; i < localStorage.length; i++) {
    var key = localStorage.key(i);
    if (key.startsWith('cartProduct_')) {
        var productId = key.replace('cartProduct_', '');
        var productDetails = JSON.parse(localStorage.getItem(key));

        var quantity = productDetails.quantity;
        var price = productDetails.productDetails.price;

        var totalPrice = price * quantity;
        totalPriceJuntos += totalPrice;
        totalQuantityJuntos = totalQuantityJuntos + Number(quantity)
    }
}

totalItemsSpanCard.textContent = totalQuantityJuntos;
totalItemsSpan.textContent = totalQuantityJuntos;
totalItemsSpanPage.textContent = totalQuantityJuntos;
totalPriceElement.textContent = totalPriceJuntos.toFixed(2) + "€";
subTotal.textContent = totalPriceJuntos.toFixed(2) + "€";
Total.textContent = totalPriceJuntos.toFixed(2) + "€";
}
function removeItemCart(id) {

for (var i = 0; i < localStorage.length; i++) {
    var key = localStorage.key(i);
    if (key.startsWith('cartProduct_')) {
        var productId = key.replace('cartProduct_', '');
        var productDetails = JSON.parse(localStorage.getItem(key));

        var idToDelete = id.toString();

        if (productDetails.productDetails.id.toString() === idToDelete) {
            localStorage.removeItem(key);
            var removedElement = document.getElementById('cart-item-' + idToDelete);
            if (removedElement) {
                removedElement.parentNode.removeChild(removedElement);
            }
  
            recalcularSomatotal();
            updateTotalItems()
            
        }
        if (productDetails.productDetails.id.toString() === idToDelete) {
            localStorage.removeItem(key);
            var removedElement = document.getElementById('cart-item-page-' + idToDelete);
            if (removedElement) {
                removedElement.parentNode.removeChild(removedElement);
            }

            recalcularSomatotal();
            updateTotalItems()
        }
    }
}
hasItemsInCart() 
}