<?php

class PostController {
    //hien thi danh sach post
    public function ShowListPost() {
        require_once ('models/post/PostModel.php');
        $postModel = new PostModel();
        $posts = $postModel->GetListPost();
        require_once('views/post/ViewListPost.php');
    }
    //hien thi chi tiet cu mot post
    public function ViewPostDetail() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            require_once('models/post/PostModel.php');
            require_once('models/post/Post.php');
            $postModel = new PostModel();
            $listPost = $postModel->GetListPost();
            $postModel1 = new PostModel();
            $post = $postModel1->GetPost($id);
            require_once('views/post/ViewPost.php');
        }
    }
}