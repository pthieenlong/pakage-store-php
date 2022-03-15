const active = 'function-active';
const user = document.querySelector('#user');
const cart = document.querySelector('#cart');

const userInfo = document.querySelector('#user-info');
const cartInfo = document.querySelector('#cart-info');
const infoFunctions = [user, cart];
const infoContents = [userInfo, cartInfo];


user.onclick = () => {
    infoContents.map(content => content.style.display = 'none');
    infoFunctions.map(func => func.classList.remove(active));
    userInfo.style.display = 'block';
    user.classList.add(active);
}
cart.onclick = () => {
    infoContents.map(content => content.style.display = 'none');
    infoFunctions.map(func => func.classList.remove(active));
    cartInfo.style.display = 'block';
    cart.classList.add(active);
}