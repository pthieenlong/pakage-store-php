const productContent = $('#product-controller');
const productBtn = $('#product-btn');
const userContent = $('#user-controller');
const userBtn = $('#user-btn');

userContent.hide();

productBtn.click(() => {
    userContent.hide();
    productContent.show();
})
userBtn.click(() => {
    userContent.show();
    productContent.hide();
})