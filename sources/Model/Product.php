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
                $products[] = $product;
            }
        }
    }

    return $products;
}
