<?php

class OrderDetail {
    private $id;
    private $productID;
    private $productQuantity;
    private $totalPrice;

    public function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f = '__construct' . $i)) {
            call_user_func_array([$this, $f], $a);
        }
    }

    public function __construct1($id, $productID, $productQuantity, $totalPrice)
    {
        $this->id = $id;
        $this->productID = $productID;
        $this->productQuantity = $productQuantity;
        $this->price = $totalPrice;
    }

    public function getID() {
        return $this->id;
    }
    public function setProductID($id) {
        $this->productID = $id;
    }
    public function getProductID() {
        return $this->productID;
    }
    public function setProductQuantity($quantity) {
        $this->productQuantity = $quantity;
    }
    public function getProductQuantity() {
        return $this->productQuantity;
    }
    public function setTotalPrice($totalPrice) {
        $this->totalPrice = $totalPrice;
    }
    public function getTotalPrice() {
        return $this->totalPrice * $this->productQuantity;
    }


}