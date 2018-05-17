<?php
require_once ("models/Dbconnect.php");
require_once ("models/post/Post.php");
class PostModel extends DbModel{
    
    public function GetListPost() {
        $connect = $this->connect();
        $query = "SELECT * FROM post";
        $result = mysqli_query($connect, $query);
        $listPost = array();
        if ($result->num_rows > 0) {
            while ($post = mysqli_fetch_assoc($result)) {
                $listPost[] = new Post($post['post_id'], $post['title'], $post["post_content"], $post["post_time"], $post["post_image"]);
            }
        }
        return $listPost;
    }
    
    //ham thuc hien viec chon mot bai post
    public function GetPost($id) {
        $connect = $this->connect();
        $query = "SELECT * FROM post WHERE (BINARY post_id = '$id')";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
        $post = new Post($row['post_id'], $row['title'], $row["post_content"], $row["post_time"], $row["post_image"]);
        return $post;
    }
}
