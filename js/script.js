let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');

    cart.classList.remove('active');
    navbar.classList.remove('active');
    login.classList.remove('active');
    aisle.classList.remove('active');
}

let cart = document.querySelector('.cart');

document.querySelector('#cart-btn').onclick = () => {
    cart.classList.toggle('active');

    searchForm.classList.remove('active');
    navbar.classList.remove('active');
    login.classList.remove('active');
    aisle.classList.remove('active');
}

let login = document.querySelector('.login-form');

document.querySelector('#log-btn').onclick = () => {
    login.classList.toggle('active');

    searchForm.classList.remove('active');
    cart.classList.remove('active');
    navbar.classList.remove('active');
    aisle.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');

    searchForm.classList.remove('active');
    cart.classList.remove('active');
    login.classList.remove('active');
    aisle.classList.remove('active');
}

let aisle = document.querySelector('.aisles-menu');

document.querySelector('#aisles-btn').onclick = () => {
    aisle.classList.toggle('active');

    searchForm.classList.remove('active');
    cart.classList.remove('active');
    login.classList.remove('active');
}

//testing stuffs for backstore

/*let checklist = document.querySelector('.backstore-forms');
document.querySelector('#product').onclick = () => {
    checklist.classList.toggle('checked');
}*/

function backstoreStyling() {
    var checkBox = document.getElementById("product");
    var box = document.getElementById("productBox");

    if (checkBox.checked == true) {
        box.classList.value = "backstore-forms checked";
    } else {
        box.classList.value = "backstore-forms";
    }
}

// Price
var type = document.querySelector('.product-price span').innerHTML;

function updatePrice() {
    var quantity = document.getElementById("quantity").value;
    var unitPrice = parseFloat(document.querySelector("#unitPrice").innerHTML);
    console.log(type);
    total = (quantity * unitPrice).toFixed(2);
    return document.querySelector(".product-price").innerHTML = '$' + total + ' for ' + quantity + ' ' + type + '(s)';
}
function updatePrice2(v) {
    var quantity = v;
    var unitPrice = parseFloat(document.querySelector("#unitPrice").innerHTML);
    console.log(type);
    total = (quantity * unitPrice).toFixed(2);
    return document.querySelector(".product-price").innerHTML = '$' + total + ' for ' + quantity + ' ' + type + '(s)';
}

// Cart

function updateCartPrice() {
    var quantity = document.getElementById("quantity").value;
    var unitPrice = parseFloat(document.querySelector("#unitPrice").innerHTML);
    total = (quantity * unitPrice).toFixed(2);
    document.querySelector("#product-price").innerHTML = total;
    update();
}
function updateCartPrice2() {
    var quantity = document.getElementById("quantity2").value;
    var unitPrice = parseFloat(document.querySelector("#unitPrice2").innerHTML);
    total = (quantity * unitPrice).toFixed(2);
    document.querySelector("#product-price2").innerHTML = total;
    update();
}
function updateCartPrice3() {
    var quantity = document.getElementById("quantity3").value;
    var unitPrice = parseFloat(document.querySelector("#unitPrice3").innerHTML);
    total = (quantity * unitPrice).toFixed(2);
    document.querySelector("#product-price3").innerHTML = total;
    update();
    
}
//function that start the main functions
function update()
{
    updateQuantities();
    updateSubTotalCart();
    updateGST();
    updateQST();
    updateTotalPriceCart();
}
//Total price Cart
function updateSubTotalCart()
{
    var tot = parseFloat(document.querySelector("#product-price").innerHTML);
    var tot2 = parseFloat(document.querySelector("#product-price2").innerHTML);
    var tot3 = parseFloat(document.querySelector("#product-price3").innerHTML);
    total = (tot + tot2 + tot3).toFixed(2);
    document.querySelector(".subTotal").innerHTML = total;
}
//Update quantities
function updateQuantities()
{
    var quant = parseFloat(document.getElementById("quantity").value);
    var quant2 = parseFloat(document.getElementById("quantity2").value);
    var quant3 = parseFloat(document.getElementById("quantity3").value);
    total = (quant + quant2 + quant3);
    document.querySelector(".nbItems").innerHTML = total;
}
function updateGST()
{
    var tot = parseFloat(document.querySelector("#product-price").innerHTML);
    var tot2 = parseFloat(document.querySelector("#product-price2").innerHTML);
    var tot3 = parseFloat(document.querySelector("#product-price3").innerHTML);
    total = (0.05*(tot + tot2 + tot3)).toFixed(2);
    document.querySelector(".GST").innerHTML = total;
}
function updateQST()
{
    var tot = parseFloat(document.querySelector("#product-price").innerHTML);
    var tot2 = parseFloat(document.querySelector("#product-price2").innerHTML);
    var tot3 = parseFloat(document.querySelector("#product-price3").innerHTML);
    total = (0.10*(tot + tot2 + tot3)).toFixed(2);
    document.querySelector(".QST").innerHTML = total;
}
function updateTotalPriceCart()
{
    var tot = parseFloat(document.querySelector("#product-price").innerHTML);
    var tot2 = parseFloat(document.querySelector("#product-price2").innerHTML);
    var tot3 = parseFloat(document.querySelector("#product-price3").innerHTML);
    total = (1.15*(tot + tot2 + tot3)).toFixed(2);
    document.querySelector(".totalPrice").innerHTML = total;
}
