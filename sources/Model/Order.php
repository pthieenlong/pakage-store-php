<?php 

class Order {
    private $id;
    private $userID;
    private $orderDetails;
    private $date;

    public function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f = '__construct' . $i)) {
            call_user_func_array([$this, $f], $a);
        }
    }
    public function __construct1($userID)
    {
        $this->userID = $userID;
    }

    public function getID() {
        return $this->id;
    }
    public function setUserID($id) {
        $this->userID = $id;
    }
    public function getUserID() {
        return $this->userID;
    }
    public function getOrderList() {
        return $this->orderDetails;
    }
    public function addOrderDetail($orderDetail) {
        $this->orderDetails.array_push($orderDetail);
    }
    public function getDate() {
        return $this->date;
    }
    public function setDate($date) {
        $this->date = $date;
    }
}

