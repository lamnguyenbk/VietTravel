<?php
class Post {
    public $post_id;
    public $title;
    public $post_content;
    public $post_time;
    public $post_image;
    
    public function __construct($post_id, $title ,$post_content, $post_time, $post_image) {
        $this->post_id = $post_id;
        $this->title = $title;
        $this->post_content = $post_content;
        $this->post_time = $post_time;
        $this->post_image = $post_image;
    }
}
