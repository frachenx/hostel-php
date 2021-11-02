<?php
class database{
    private $host="localhost",$user="root",$dbPassword="",$db="hostel2";
    public $connect;

    protected function connect(){
        $conn =  new mysqli($this->host,$this->user,$this->dbPassword,$this->db);
        return $conn;
    }
}