<?php

class Category {
    private $id;
    private $title;

    public function __construct($title) {
        $this->id = getRandomID("cate");
        $this->title = $title;
    }

    public function getCateID() {
        return $this->id;
    }
    public function setCateTitle($newTitle) {
        $this->title = $newTitle;
    } 
    public function getCateTitle() {
        return $this->title;
    }
}   

function getAllCate() {
    
    return [];
}