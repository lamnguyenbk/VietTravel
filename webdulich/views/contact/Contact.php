<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("views/template/config.html");
        include("views/template/header1.php");
        echo("<div class='container'>");
        include("views/template/contact.html");
        ?>
        <div class="col-sm-4 bg-grey tab-pane">
            <div class=""><h2>Tin mới nhất</h2></div>
            <?php
            foreach ($posts as $post) :
                ?>
                <div class="news_detail">
                    <a href="">
                        <img src="img/upload/post_img/<?php echo($post->post_image) ?>">
                        <p><?php echo ($post->title) ?></p>
                        <p>Ngày đăng: <?php echo ($post->post_time) ?></p>
                    </a>
                </div>
                <hr/>
                <?php
            endforeach;
            ?>
        </div>
        <?php
        echo("</div>");
        include("views/template/footer.html");
        ?>
    </body>
</html>
