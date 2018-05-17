<?php
class TourController {
    public function ShowTourByType() {
        require_once ('models/tour/TourModel.php');
        if(isset($_GET["loaitour"])) {
            $type = $_GET["loaitour"];
            $tourModel = new TourModel();
            $tours = $tourModel->GetTourByType($type);
            require_once('views/tour/ListTourDetail.php');
        } 
    }
    
    public function ViewFormBookTour($id) {
        require_once ('models/tour/TourModel.php');
            if(isset($_GET["id"])) {
                $id = $_GET["id"];
                $tourModel = new TourModel();
                $tour = $tourModel->GetTourById($id);
                $tourModel1 = new TourModel();
                $child_price = $tourModel1->Getprice($id);
                require_once('views/tour/BookTour.php');
            }
    }
    
    public function ViewTourDetail($id) {
        require_once ('models/tour/TourModel.php');
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $tourModel = new TourModel();
            $tour = $tourModel->GetTourById($id);
            $tourModel1 = new TourModel();
            $child_price = $tourModel1->Getprice($id);
            require_once('views/tour/ViewTour.php');
        }
    }
    
    public function SearchTour() {
        require_once ('models/tour/TourModel.php');
        if(isset($_POST["submit"])) {
            $tourModel = new TourModel();
            $tours = $tourModel->GetTourBySql();
            require_once('views/tour/ListTourDetail.php');
        }
        else {
            header("location:index.php?controllers=Tour&action=ShowTourByType&loaitour=1");
        }
    }
}
