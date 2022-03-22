<?php

include_once '../Utils/database.php';
include_once '../Model/OrderDetail.php';

session_start();
$cart = $_SESSION['cart'];
$productID = isset($_POST['id']) ? $_POST['id'] : '';
$productQuantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$method = isset($_POST['method']) ? $_POST['method'] : '';




function addToCart($productID, $productQuantity) {
    /*
        Session Cart = mảng chứa những OrderDetail;    
        loop giỏ hàng
            kiểm tra OrderDetail đã tồn tại ? số lượng++ : 
                trả về OrderDetail mới;
        thêm OrderDetail vào Session Cart
    */
    $cart = $_SESSION['cart'];
    if(in_array($productID, $cart)) {
        // $cart['productQuantity']++;
    } else {
        array_push($cart, $productID);
        // $cart['productQuantity'] = 1;

    }
}


function buyNow() {
    /*
     *  tạo 1 Order
     *  lấy id Order
     *  set OrderID cho OrderDetail
     *  
     */
}
function remind() {
    /*
     *  tạo 1 Order
     *  lấy id Order
     *  set OrderID cho OrderDetail
     *  
     */

}
function saveToOrder() {
    /*
     *  tạo 1 Order
     *  lấy id Order trong Session Cart
     *  set OrderID cho OrderDetail
     */
}
// function lấy Product từ Session Cart
switch ($method) {
    case 'add':
        addToCart($productID, $productQuantity);
        break;
    case 'buy':
        buyNow();
        break;
    case 'remind':
        remind();
        break;
    default:
        break;
}
echo $productID.' - '.$productQuantity;
