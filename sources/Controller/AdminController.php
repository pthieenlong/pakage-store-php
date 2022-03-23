<?php
include '../Model/User.php';
include '../Model/Product.php';

$method = isset($_POST['method']) ? $_POST['method'] : null;

// product section
$productID = isset($_POST['product-id']) ? $_POST['product-id'] : null;
$productName = isset($_POST['product-name']) ? $_POST['product-name'] : null;
$productPrice = isset($_POST['product-price']) ? $_POST['product-price'] : null;
$productSale = isset($_POST['product-sale']) ? $_POST['product-sale'] : null;
$productImage = isset($_POST['product-image']) ? $_POST['product-image'] : null; 
$productCate = isset($_POST['product-category']) ? $_POST['product-category'] : null;


// user section
$userID = isset($_POST['user-id']) ? $_POST['user-id'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
$userFullname = isset($_POST['user-fullname']) ? $_POST['user-fullname'] : null;
$userMail = isset($_POST['user-mail']) ? $_POST['user-mail'] : null;
$userPhone = isset($_POST['user-phone']) ? $_POST['user-phone'] : null;



switch ($method) {
    case 'user-add':
            $user = new User($username, $userFullname, $userMail, $username);
            addUser($user);
        break;
    case 'user-edit':
        // edit user
        break;
    case 'user-remove':
        // remove user
        break;
    case 'product-add':
        $product = new Product($productName, $productPrice);
        $product->setSale($productSale > 1 ? 0 : $productSale);
        $product->setCateID($productCate == -1 ? 1 : $productCate);
        addProduct($product);
        break;
    case 'product-edit':
        // edit product
        break;
    case 'product-remove':
        // remove product
        break;
    default:
        # code...
        break;
}
