<?php

class HomeController {
    public function ViewHome() {
        require_once ('models/tour/Tour.php');
        require_once ('models/tour/TourModel.php');
        require_once ('models/post/Post.php');
        require_once ('models/post/PostModel.php');
        $tourModel = new TourModel();
        $postModel = new PostModel();
        $tours = $tourModel->GetListTour();
        $posts = $postModel->GetListPost();
        require_once('views/home/Homepage.php');
    } 
}
