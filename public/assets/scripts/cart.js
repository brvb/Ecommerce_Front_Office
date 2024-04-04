document.addEventListener('DOMContentLoaded', function() {
    const menuToggleBtn = document.getElementById('dropdown-cart');
    const sidebar = document.getElementById('dropdown-content-container');

    menuToggleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        if (sidebar.style.display === 'block') {
            sidebar.style.display = 'none';
        } else {
            sidebar.style.display = 'block';
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const menuToggleBtn = document.getElementById('menu-toggle-btn');
    const sidebar = document.getElementById('sidebar');

    menuToggleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        if (sidebar.style.display === 'block') {
            sidebar.style.display = 'none';
        } else {
            sidebar.style.display = 'block';
        }
    });
});

var addToCartButtons = document.querySelectorAll('.add-to-cart-btn');

addToCartButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
        var productId = button.getAttribute('data-product');

        $.ajax({
            url: '/product-details/' + productId,
            method: 'GET',
            success: function(response) {
                var productDetails = response;

                localStorage.setItem('cartProduct_' + productId, JSON.stringify(productDetails));
                renderProductInCart(productId, productDetails);
                updateTotalItems();
                calculateTotalPrice();
                alert('Produto adicionado ao carrinho!');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });

        event.preventDefault();

    });
});

document.addEventListener('DOMContentLoaded', function() {
    for (var i = 0; i < localStorage.length; i++) {
        var key = localStorage.key(i);
        if (key.startsWith('cartProduct_')) {
            var productId = key.replace('cartProduct_', '');
            var productDetails = JSON.parse(localStorage.getItem(key));
            renderProductInCart(productId, productDetails);
            updateTotalItems();
            calculateTotalPrice();
        }
    }

});

function renderProductInCart(productId, productDetails) {
    var cartContainer = document.getElementById('cart-container');
    var productWidget = document.createElement('div');
    productWidget.classList.add('product-widget');

    var productImg = document.createElement('div');
    productImg.classList.add('product-img');
    var img = document.createElement('img');
    img.setAttribute('src', productDetails.image_name);
    img.setAttribute('alt', productDetails.image_name);
    productImg.appendChild(img);

    var productBody = document.createElement('div');
    productBody.classList.add('product-body');
    var productName = document.createElement('h3');
    productName.classList.add('product-name');
    var productNameLink = document.createElement('a');
    productNameLink.setAttribute('href', '#');
    productNameLink.textContent = productDetails.product_name;
    productName.appendChild(productNameLink);
    var productPrice = document.createElement('h4');
    productPrice.classList.add('product-price');
    productPrice.innerHTML = '<span class="qty">1x</span>$' + productDetails.price;

    productBody.appendChild(productName);
    productBody.appendChild(productPrice);

    var deleteButton = document.createElement('button');
    deleteButton.classList.add('delete');
    deleteButton.innerHTML = '<i class="fa fa-close"></i>';
    deleteButton.addEventListener('click', function() {
        localStorage.removeItem('cartProduct_' + productId);
        productWidget.remove();
        updateTotalItems()
        calculateTotalPrice();
    });

    productWidget.appendChild(productImg);
    productWidget.appendChild(productBody);
    productWidget.appendChild(deleteButton);

    cartContainer.appendChild(productWidget);
    updateTotalItems()
}

function calculateTotalPrice() {
    var totalPrice = 0;
    var productWidgets = document.querySelectorAll('.product-widget');
    productWidgets.forEach(function(widget) {
        var priceElement = widget.querySelector('.product-price');
        var priceText = priceElement.textContent.trim().replace('$', '');
        var price = parseFloat(priceText);
        totalPrice += price;
    });

    var totalPriceElement = document.getElementById('total-price');
    totalPriceElement.textContent = '$' + totalPrice.toFixed(2);
}
document.getElementById('clear-localstorage-btn').addEventListener('click', function() {localStorage.clear();
    console.log('LocalStorage foi limpo.');
});
function updateTotalItems() {
    var totalItemsSpanCart = document.getElementById('total-itens-card');
    var totalItemsSpan = document.getElementById('total-itens');
    var totalItems = localStorage.length;
    
    totalItemsSpan.textContent = totalItems;
    totalItemsSpanCart.textContent = totalItems;

    var pElement = document.getElementById('total-itens');
    if (totalItems == 0) {
        pElement.classList.add('d-none');
        pElement.classList.remove('d-flex');
    } else {
        pElement.classList.remove('d-none');
        pElement.classList.add('d-flex');
    }
}
