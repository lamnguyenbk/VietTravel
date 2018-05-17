<?php ob_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
        <?php
        include("views/template/config.html");
        include("views/template/header.php");
        ?>
        <div class="container text-center ">
            <div class="row slideanim " id="about">
                <h1>Giới thiệu chung</h1>
                <hr/>
                <p>VietTravel là một trong những đơn vị cung cấp tour du lịch hàng đầu Vịnh Bắc Bộ với các tour du lịch Chất - Rẻ - 
                    Uy tín. Chúng tôi đang hứa hẹn trở thành đơn vị cung cấp các tour du lịch tầm vũ cmn trụ. Hãy đến với VietTravel để tận hưởng những giây phút tuyệt vời bên gia đình và người thân tại những thiên đường du lịch hàng đầu. Còn chần chờ gì nữa mà không book ngay cho mình một tour :))) </p>
            </div>
            <div class="row bg-grey">
                <h1>Tour nổi bật</h1>
                <h3>Tận hưởng bản sắc dân tộc</h3>
                <?php
                $i = 0;
                foreach ($tours as $tour) :
                $i++;
                    if ($i <= 4) {
                    ?>
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <a href="index.php?controllers=Tour&action=ViewTourDetail&id=<?php echo($tour->id) ?>">
                                <div class="zoomin">
                                    <img src="img/upload/tour_img/<?php echo($tour->image) ?>">
                                </div>
                            </a>
                            <a href="index.php?controllers=Tour&action=ViewTourDetail&id=<?php echo($tour->id) ?>">
                                <p><strong><?php echo($tour->tour_name) ?></strong></p>
                            </a>
                            <a href="index.php?controllers=Tour&action=ViewTourDetail&id=<?php echo($tour->id) ?>">
                                <p>Giá: <?php echo(number_format($tour->tour_price)) ?> VND</p>
                            </a>
                            
                        </div>
                    </div>
                    <?php
                    }
                    else {
                        
                    }
                endforeach;
                ?>
            </div>
            <div class="row" id="tour_event">
                <div class="col-sm-12">
                    <span>TẬN HƯỞNG BẢN SẮC VIỆT </span>
                    <h2>DU LỊCH LỄ HỘI</h2>
                    <p>Đa dạng tour đường bay, đường bộ với giá hấp dẫn!</p>
                    <a href="index.php?controllers=Tour&action=ShowTourByType&loaitour=4">Xem thêm</a>
                </div>
            </div>
            <div class="row bg-grey">
                <h1>Tin tức du lịch mới nhất</h1>
                <?php
                $i = 0;
                foreach ($posts as $post) :
                    $i++;
                    if ($i < 4) {
                        ?>
                        <div class="col-sm-4">
                            <div class="thumbnail news">
                                <a href="index.php?controllers=Post&action=ViewPostDetail&id=<?php echo($post->post_id) ?>"><img src="img/upload/post_img/<?php echo($post->post_image) ?>"></a>
                                <a href="index.php?controllers=Post&action=ViewPostDetail&id=<?php echo($post->post_id) ?>"><p><strong><?php echo($post->title) ?></strong></p></a>
                            </div>
                        </div>
                        <?php
                    } else {
                       
                    }
                endforeach;
                ?>
            </div>
        </div>   
        <?php
        include("views/template/footer.html");
        ?>
    </body>
</html>
<?php
ob_flush();
?>