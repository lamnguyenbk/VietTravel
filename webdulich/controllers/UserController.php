<?php

class UserController {
    // ham thuc hien viec dieu khien dang nhap vao he thong
    public function Login() {
        require_once('models/user/User.php');
        if (isset($_POST['username']) && isset($_POST['password'])) {
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userModel = new UserModel();
            $user = $userModel->login($username, $password);
            $rows = $userModel->setSession($username, $password);
            
            if ($user > 0) {
                $_SESSION["username"] = $username;
                $_SESSION["id"] = $rows["id"];
                header("location: index.php?controller=Home&action=ViewHome");
            } 
            else {
                require_once('views/user/Login.php');
            }
        } 
        else {
            require_once('views/user/Login.php');
        }
    }
    
    public function Register() {
        require_once('models/user/User.php');
        if(isset($_POST["submit"])) {          
            if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['email'])) {
                
                $username = $_POST['username'];
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $userModel = new UserModel();
                $userModel->register($username, $password, $phone, $address, $email);
                require_once('views/user/register.php');
                echo("Đăng ký thành công");
             }
        }
        else {
            require_once('views/user/register.php');
        }
    }

    //ham dieu khien viec thoat dang nhap he thong
    public function Logout() {
        //huy cac bien session
        unset($_SESSION["username"]);
        unset($_SESSION["position"]);
        header("location: index.php");
    }
    
}
?>
