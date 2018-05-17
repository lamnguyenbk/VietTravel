<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("views/template/config.html");
        include("views/template/header1.php");
        ?>
        <div class="container bg-grey text-center">
            <h1>Tin tức du lịch mới nhất</h1>
            <?php
            $i = 0;
            foreach ($posts as $post) :
                $i++;
                if ($i < 5) {
                    ?>
                    <div class="col-sm-3">
                        <div class="thumbnail news">
                            <a href="index.php?controllers=Post&action=ViewPostDetail&id=<?php echo($post->post_id) ?>"><img src="img/upload/post_img/<?php echo($post->post_image) ?>"></a>
                            <a href="index.php?controllers=Post&action=ViewPostDetail&id=<?php echo($post->post_id) ?>"><p><strong><?php echo($post->title) ?></strong></p></a>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col-sm-3">
                        <div class="thumbnail news">
                            <a href="index.php?controllers=Post&action=ViewPostDetail&id=<?php echo($post->post_id) ?>"><img src="img/upload/post_img/<?php echo($post->post_image) ?>"></a>
                            <a href="index.php?controllers=Post&action=ViewPostDetail&id=<?php echo($post->post_id) ?>"><p><strong><?php echo($post->title) ?></strong></p></a>
                        </div>
                    </div>

                    <?php
                }
            endforeach;
            ?>
        </div>
        <?php
        include("views/template/footer.html");
        ?>
    </body>
</html>
