<?php
class ContactController {
    public function ShowContact() {
        require_once ('models/post/PostModel.php');
        require_once ('models/post/Post.php');
        $postModel = new PostModel();
        $posts = $postModel->GetListPost();
        require_once('views/contact/Contact.php');
    }
}
