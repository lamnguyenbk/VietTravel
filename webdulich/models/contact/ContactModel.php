<?php
class ContactModel {
    public function showContact() {
        require_once ('models/post/Post.php');
        require_once ('models/post/PostModel.php');
        $postModel = new PostModel();
        $posts = $postModel->GetListPost();
        require_once('views/post/Contact.php');
    }
}
