<?php

require_once('models/Dbconnect.php');
require_once('models/user/E_User.php');
class UserModel extends DbModel {   
    
    public function login($username, $password) {
        $connect = $this->connect();
        $query = "select * from user where (BINARY username = '$username') and (BINARY password = '$password')";
        $result = mysqli_query($connect, $query);
        $num = mysqli_num_rows($result);
        mysqli_close($connect);
        return $num;
    }
    
    public function register($username, $password, $phone, $address, $email) {
        $connect = $this->connect();
        $query = "insert into user(username, password, phone, address, email) values ('$username', '$password', '$phone', '$address', '$email')";
        $result = mysqli_query($connect, $query);
    }

    public function setSession($username, $password) {
        $connect = $this->connect();
        $query = "SELECT * FROM user WHERE (username = '$username') and (password = '$password')";
        $result = mysqli_query($connect, $query);
        $rows = mysqli_fetch_array($result);
        mysqli_close($connect);
        return $rows;
    }
}
?>

