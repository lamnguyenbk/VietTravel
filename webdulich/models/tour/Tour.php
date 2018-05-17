<?php
class Tour {
    public $id;
    public $loaitour_id;
    public $tour_name;
    public $tour_price;
    public $tour_time;
    public $tour_begin;
    public $vehicle;
    public $depature;
    public $image;
    public $tour_detail;
    
    
    public function __construct($id, $loaitour_id , $tour_name, $tour_price, $tour_time, $tour_begin, $vehicle, $depature, $image, $tour_detail) {
        $this->id = $id;
        $this->loaitour_id = $loaitour_id;
        $this->tour_name = $tour_name;
        $this->tour_price = $tour_price;
        $this->tour_time = $tour_time;
        $this->tour_begin = $tour_begin;
        $this->vehicle = $vehicle;
        $this->depature = $depature;
        $this->image = $image;
        $this->tour_detail = $tour_detail;
    }
}