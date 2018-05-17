<?php
class User {
    public $id;
    public $username;
    public $password;
    public $phone;
    public $address;
    public $email;
    public function __construct($id, $username ,$password, $phone, $address, $email){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->phone = $phone;
        $this->address = $address;
    }
    
}