let searchForm = document.querySelector('.search-form');
let easter = document.querySelector('.easter a');

document.querySelector('#search-btn').onclick = () => {
    searchForm.classList.toggle('active');
    easter.classList.toggle('active');

    cart.classList.remove('active');
    navbar.classList.remove('active');
    login.classList.remove('active');
}

let cart = document.querySelector('.cart');

document.querySelector('#cart-btn').onclick = () => {
    cart.classList.toggle('active');

    searchForm.classList.remove('active');
    navbar.classList.remove('active');
    login.classList.remove('active');
}

let login = document.querySelector('.login-form');

document.querySelector('#log-btn').onclick = () => {
    login.classList.toggle('active');

    searchForm.classList.remove('active');
    cart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');

    searchForm.classList.remove('active');
    cart.classList.remove('active');
    login.classList.remove('active');
}
// 