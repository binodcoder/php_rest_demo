<?php
class Category{
    //db stuff
    private $conn;
    private $table='categories';

    //properties
    public $id;
    public $name;
    public $created_at;

    //constructor widh DB
    public function __construct($db){
        $this->conn=$db;
    }
    //get categories
}