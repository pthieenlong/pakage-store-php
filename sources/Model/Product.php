<?php
include_once '../Utils/database.php';

class Product
{
    private $id;
    private $name;
    private $price;
    private $sale;
    private $cateID;
    private $producerID;
    private $quantity;
    private $img;

    public function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f='__construct'.$i)) {
            call_user_func_array(array($this, $f), $a);
        }
    }

    public function __construct2($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function __construct3($id, $name, $price, $sale, $quantity, $cateID, $producerID)
    {

        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->sale = $sale;
        $this->quantity = $quantity;
        $this->cateID = $cateID;
        $this->producerID = $producerID;
    }
    public function setID($id)
    {
        $this->id = $id;
    }
    public function getID()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setSale($sale)
    {
        $this->sale = $sale;
    }
    public function getSale()
    {
        return $this->sale;
    }
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setCateID($id)
    {
        $this->cateID = $id;
    }
    public function getCateID()
    {
        return $this->cateID;
    }
    public function setProducerID($id)
    {
        $this->producerID = $id;
    }
    public function getProducerID()
    {
        return $this->producerID;
    }
    public function setImg($img) {
        $this->img = $img;
    }
    public function getImg() {
        return $this->img;
    }
    public function __toString()
    {
        return $this->getName() . ', ' . $this->getPrice() . ', ' . $this->getSale() . ', ' . $this->getQuantity();
    }

    public function getSalePrice()
    {
        return $this->getSale() * $this->getPrice();
    }

    public function getTotalPrice()
    {
        return $this->getPrice() - $this->getSalePrice();
    }
}
function addProduct($product) {
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);

    $query = $db_connection->prepare("INSERT INTO Product VALUES (null, ?, ?, ?, ?, 1, 50, null)");

    $query->bind_param("ssss", $product->getName(), $product->getPrice(), $product->getSale(), $product->getCateID());

    if($query->execute() === true) {
        header("location: http://localhost/pakage-store/sources/View/admin.php");
    } else header("location: http://localhost/pakage-store/sources/View/404.php");
}
function updateProductByID($productID, $name, $price, $sale, $img = null,  $cate = 1, $producer = 1, $quantity = 50) {
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);

    $query = $db_connection->prepare('UPDATE `Product` SET `name`= ?, `price`= ? ,`sale_percent`= ?,`cate_id`= ?,`producer_id`= ?,`quantity`= ?,`IMG`= ? WHERE `id` = ?');

    $query->bind_param("ssssssss", $name, $price, $sale, $cate,
    $producer, $quantity, $img, $productID);

    if($query->execute() === true) {
        header("location: http://localhost/pakage-store/sources/View/admin.php");
    } else header("location: http://localhost/pakage-store/sources/View/404.php");
}
function getProductByID($id)
{
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);

    $query = $db_connection->prepare("select * from Product where id = ?");
    $query->bind_param('s', $id);

    if ($query->execute()) {
        $res = $query->get_result();
        if ($res->num_rows > 0) {
            $res = $res->fetch_assoc();
            $product = new Product($res['name'], $res['price']);
            $product->setID($res['id']);
            $product->setSale($res['sale_percent']);
            $product->setQuantity($res['quantity']);
            $product->setCateID($res['cate_id']);
            $product->setProducerID($res['producer_id']);
            $product->setImg($res['IMG']);
            // $product = new Product($res['id'], $res['name'], $res['price'], $res['sale_percent'], $res['quantity'], $res['cate_id'], $res['producer_id']);
            return $product;
        } else return null;
    } else return null;
}
function getAllProduct()
{
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);
    $query = $db_connection->prepare("select * from Product");

    $products = [];
    if ($query->execute()) {
        $res = $query->get_result();
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $product = new Product($row['name'], $row['price']);
                // $product = new Product($id, $name, $price, $sale, $quantity, $cateID, $producerID);
                $product->setID($row['id']);
                $product->setSale($row['sale_percent']);
                $product->setQuantity($row['quantity']);
                $product->setCateID($row['cate_id']);
                $product->setProducerID($row['producer_id']);
                $product->setImg($row['IMG']);
                $products[] = $product;
            }
        }
    }

    return $products;
}

function getNumbersOfProduct($numbers)
{
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);
    $query = $db_connection->prepare("select * from Product order by id desc limit ?");
    $query->bind_param('s', $numbers);
    $products = [];
    if ($query->execute()) {
        $res = $query->get_result();
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $product = new Product($row['name'], $row['price']);
                $product->setID($row['id']);
                $product->setSale($row['sale_percent']);
                $product->setQuantity($row['quantity']);
                $product->setCateID($row['cate_id']);
                $product->setProducerID($row['producer_id']);
                $product->setImg($row['IMG']);
                $products[] = $product;
            }
        }
    }

    return $products;
}
function getNumbersOfProductOnSale($numbers)
{
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);
    $query = $db_connection->prepare("select * from Product where sale_percent > 0 order by id desc limit ?");
    $query->bind_param('s', $numbers);
    $products = [];
    if ($query->execute()) {
        $res = $query->get_result();
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $product = new Product($row['name'], $row['price']);
                $product->setID($row['id']);
                $product->setSale($row['sale_percent']);
                $product->setQuantity($row['quantity']);
                $product->setCateID($row['cate_id']);
                $product->setProducerID($row['producer_id']);
                $product->setImg($row['IMG']);
                $products[] = $product;
            }
        }
    }

    return $products;
}
function removeProductByID($id) {
    $db_connection = null;
    $db_connection = ConnectDB($db_connection);
    $sql = "DELETE FROM Product WHERE id = $id";
    if($db_connection->query($sql) === true) {
        header("location: http://localhost/pakage-store/sources/View/admin.php");
    } else header("location: http://localhost/pakage-store/sources/View/404.php");
}

function uploadFile() {
    $targetFolder = '../View/img/product-img/';
    $filePath = $targetFolder.$_FILES['product-image']['name'];
    if(move_uploaded_file($_FILES['product-image']['tmp_name'], $filePath)) {
        return $filePath;
    } else return 'null';
}