<?php

include_once '../Utils/database.php';
include_once '../Model/Product.php';
include_once '../Model/OrderDetail.php';
// include_once '../Model/Order.php';

session_start();
$_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

$productID = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$productQuantity = isset($_REQUEST['quantity']) ? $_REQUEST['quantity'] : '';
$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : '';
$indexPoint = isset($_REQUEST['index']) ? $_REQUEST['index'] : 'none';


function addToCart($productID, $productQuantity) {
    $product = getProductByID($productID);
    $name = $product->getName();
    $price = $product->getPrice();
    if(empty($_SESSION['cart'])) {
        array_push($_SESSION['cart'], ["id" => $productID, "name" => $name, "quantity" => $productQuantity, "price" => $price * $productQuantity]);
    } else {
        $isContain = in_array($productID, array_column($_SESSION['cart'], 'id')) ? 1 : 0;
        if($isContain != 0) {
            $key = array_search($productID, array_column($_SESSION['cart'], 'id'));
            $_SESSION['cart'][$key]['quantity'] += $productQuantity;
            $_SESSION['cart'][$key]['price'] += getProductByID($productID)->getPrice() * $productQuantity;
        } else {
            array_push($_SESSION['cart'], ["id" => $productID, "name" => $name, "quantity" => $productQuantity, "price" => $price * $productQuantity]);
        }
    }
}
function remove($index) {
    if($index !== 'none')
        array_splice($_SESSION['cart'], $index, 1);
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
function saveToOrder($userID) {
    /*
     *  tạo 1 Order
     */
    // $order = new Order($userID);
    // $cart = $_SESSION['cart'];

    // foreach ($cart as $item => $value) {

    // }
    
}
switch ($method) {
    case 'add':
        addToCart($productID, $productQuantity);
        header("location: http://localhost/pakage-store/sources/View/");
        break;
    case 'buy':
        buyNow();
        break;
    case 'remind':
        remind();
        break;
    case 'delete':
        remove($indexPoint);
        header("location: http://localhost/pakage-store/sources/View/");
        break;
    default:
        break;
}