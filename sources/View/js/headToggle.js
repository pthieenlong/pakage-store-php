const user = $('#head-user');
const cart = $('#head-cart');

user.click(() => {
    user.children('.user-methods').slideToggle();
})

// cart.click(() => {
//     cart.children('.cart-tab').slideToggle();
// })