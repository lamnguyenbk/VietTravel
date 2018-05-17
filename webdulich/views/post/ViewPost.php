<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
        <?php
            include ("views/template/config.html");
            include ("views/template/header1.php");
        ?>
        <div class='container'>
        <div class='row slideanim'>
            <div class="col-sm-8">
			<div class="thumbnail">
				<div>
					<img src="img/upload/post_img/<?php echo($post->post_image) ?>" alt="" />
				</div>
				<h2 style="margin-bottom:50px;"><?php echo($post->title) ?></h2>
				<p>Ngày đăng: <?php echo($post->post_time)?></p>
                <p><?php echo(nl2br($post->post_content))?></p>
    		</div>
			</div>
    		<div class="col-sm-4 bg-grey">
                <div class=""><h2>Tin mới nhất</h2></div>
                <?php
                foreach ($listPost as $post) :
                    ?>
                    <div class="news_detail">
                        <a href="index.php?controllers=Post&action=ViewPostDetail&id=<?php echo($post->post_id) ?>">
                            <img src="img/upload/post_img/<?php echo($post->post_image) ?>">
                            <p><?php echo ($post->title) ?></p>
                            <p><?php echo ($post->post_time) ?></p>
                        </a>
                    </div>
                    <hr/>
                    <?php
                endforeach;
                ?>
    		</div>
    	</div>
    </div>
	<?php include("views/template/footer.html"); ?>
</body>
</html>
