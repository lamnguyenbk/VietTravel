<?php

require_once('models/Dbconnect.php');
require_once ("models/tour/Tour.php");
class TourModel extends DbModel {
    
    // đưa ra danh sách tour
    public function GetListTour() {
        $connect = $this->connect();
        $query = "SELECT * FROM tour";
        $result = mysqli_query($connect, $query);
        $tours = array();
        while ($tour = mysqli_fetch_assoc($result)) {
            $tours[] = new Tour($tour['id'], $tour['loaitour_id'], $tour['tour_name'],
                $tour['tour_price'], $tour['tour_time'], $tour['tour_begin'],
                $tour['vehicle'], $tour['depature'],
                $tour['image'], $tour['tour_detail']);
        }

        return $tours;
    }
    
    // Đưa ra tour theo loại
    public function GetTourByType($type) {
        $connect = $this->connect();
        if (isset($_GET['loaitour'])) {
            $type = $_GET['loaitour'];
            $query = "SELECT * FROM tour WHERE (loaitour_id = '$type')";
            $result = mysqli_query($connect, $query);
            $tours = array();
            while ($tour = mysqli_fetch_assoc($result)) {
                $tours[] = new Tour($tour['id'], $tour['loaitour_id'], $tour['tour_name'],
                    $tour['tour_price'], $tour['tour_time'], $tour['tour_begin'],
                    $tour['vehicle'], $tour['depature'],
                    $tour['image'], $tour['tour_detail']);
            }
        }
        return $tours;
    }

    // Đưa ra tour theo loại
    public function GetTourById($id) {
        $connect = $this->connect();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM tour WHERE (id = '$id')";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_array($result);
            $tour = new Tour($row['id'], $row['loaitour_id'], $row['tour_name'],
                    $row['tour_price'], $row['tour_time'], $row['tour_begin'],
                    $row['vehicle'], $row['depature'],
                    $row['image'], $row['tour_detail']);
        }
        return $tour;
    }
    
    // Đưa ra giá
    public function Getprice($id) {
        $connect = $this->connect();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT child FROM price WHERE (tour_id = '$id')";
            $result = mysqli_query($connect, $query);
            $row = mysqli_fetch_array($result);
            $child = $row['child'];
        }
        return $child;
    }
    
    // đặt tour
    public function BookTour($id) {
        $connect = $this->connect();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $user_id = $_SESSION['id'];
            $adult = $_POST['adult'];
            $child = $_POST['child'];
            $pay = $_POST['pay'];
            $query = "Insert into book_tour(tour_id, user_id, adults_number, child_number, payid)value('$id', '$user_id', '$adult', '$child', '$pay')" ;
            mysqli_query($connect, $query);
        }
    }
    
    //tìm kiếm tour theo các điều kiện
    public function GetTourBySql() {
        $connect = $this->connect();
        if (isset($_POST['submit'])) {
            if(isset($_POST['diemden'])) {
                $location = $_POST['diemden'];
                if(isset($_POST['price'])) {
                    $price = $_POST['price'];
                    if($price == "1")
                        $query = "SELECT * FROM tour WHERE (tour_price < 2000000)and(tour_name like '%$location%')";
                    else if($price =="2")
                        $query = "SELECT * FROM tour WHERE (tour_price >= 2000000)and(tour_price < 5000000)and(tour_name like '%$location%')";
                    else 
                        $query = "SELECT * FROM tour WHERE (tour_price >= 5000000)and(tour_name like '%$location%')";
                }
                else {
                    $query = "SELECT * FROM tour WHERE (tour_name like '%$location%')";
                }
            }
            //$date = $_POST['date'];
            else if(isset($_POST['price'])) {
                $price = $_POST['price'];
                if($price == "1")
                    $query = "SELECT * FROM tour WHERE (tour_price < 2000000)";
                else if($price =="2")
                    $query = "SELECT * FROM tour WHERE (tour_price >= 2000000)";
                else
                    $query = "SELECT * FROM tour WHERE (tour_price >= 5000000)";
            }
            $result = mysqli_query($connect, $query);
            $tours = array();
            while ($tour = mysqli_fetch_array($result)) {
                $tours[] = new Tour($tour['id'], $tour['loaitour_id'], $tour['tour_name'],
                    $tour['tour_price'], $tour['tour_time'], $tour['tour_begin'],
                    $tour['vehicle'], $tour['depature'],
                    $tour['image'], $tour['tour_detail']);
            }
        }
        return $tours;
    }

}
