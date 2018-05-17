<?php

class AboutController {
    public function ViewAbout() {
        require_once ('models/tour/Tour.php');
        require_once ('models/tour/TourModel.php');
        $tourModel = new TourModel();
        $tours = $tourModel->GetListTour();
        require_once 'views/about/About.php';
    }
}
