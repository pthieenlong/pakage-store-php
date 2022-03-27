<?php
include_once '../Model/User.php';
include_once '../Model/Product.php';


$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : null;

// product section
$productID = isset($_REQUEST['product-id']) ? $_REQUEST['product-id'] : 'null';
$productName = isset($_REQUEST['product-name']) ? $_REQUEST['product-name'] : 'null';
$productPrice = isset($_REQUEST['product-price']) ? $_REQUEST['product-price'] : 'null';
$productSale = isset($_REQUEST['product-sale']) ? $_REQUEST['product-sale'] : 'null';
$productCate = isset($_REQUEST['product-category']) ? $_REQUEST['product-category'] : 'null';



// user section
$userID = isset($_REQUEST['user-id']) ? $_REQUEST['user-id'] : null;
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : null;
$userFullname = isset($_REQUEST['user-fullname']) ? $_REQUEST['user-fullname'] : null;
$userMail = isset($_REQUEST['user-mail']) ? $_REQUEST['user-mail'] : null;
$userPhone = isset($_REQUEST['user-phone']) ? $_REQUEST['user-phone'] : null;


switch ($method) {
    case 'user-add':
            $user = new User($username, $userFullname, $userMail, $username);
            addUser($user);
        break;
    case 'user-edit':
        echo $userID;
        // edit user
        break;
    case 'user-remove':
        removeUserByID($userID);
        // remove user
        break;
    case 'product-add':
        $product = new Product($productName, $productPrice);
        // Product cate & sale dang null ?
        $product->setSale(0);
        $product->setCateID(1);

        // echo $product;
        addProduct($product);
        
        break;
    case 'product-edit':
        // == null thi ko ad zo nha;
        if(isset($_FILES['product-image']))
            updateProductByID($productID, $productName, $productPrice, $productSale, uploadFile());
        else updateProductByID($productID, $productName, $productPrice, $productSale);
        break;
    case 'product-remove':
        removeProductByID($productID);  
        break;
    default:
        # code...
        break;
}
