<?php
    class DbModel { 
        public function connect() {
            $con = mysqli_connect('localhost', 'root', '');
            mysqli_set_charset($con, 'UTF8');
            if (mysqli_connect_errno()) {
                echo " Kết nối thất bại ";
            }
            mysqli_select_db($con, "db_viettravel");
            return $con;
        }
        public function close($con) {
            mysqli_close($con);
        }
    }
?>
