<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
        <?php
        include ("views/template/config.html");
        include ("views/template/header1.php");
        echo ("<div class='container'>");
        echo ("<div class='row'>");
        include ("views/template/search.html");
        echo ("<div class='col-sm-8'>");
        foreach ($tours as $tour) :
            {
                
                ?>
        		<div class="tour_detail">
                    <a href="">
                        <img src="img/upload/tour_img/<?php echo($tour->image) ?>">
                        <p><?php echo ($tour->tour_name) ?></p>
                    </a>
                        <p>Giá: <?php echo (number_format($tour->tour_price)) ?> VND</p>
                        <p>Thời gian: <?php echo ($tour->tour_time) ?></p>
                        <p>Ngày khởi hành: <?php echo ($tour->tour_begin) ?></p>
                        <p>Phương tiện: <?php echo ($tour->vehicle) ?></p>
                        <form>
         					<input id ="buy" type="button" value="Mua Tour" onclick="window.location='index.php?controllers=Tour&action=ViewFormBookTour&id=<?php echo($tour->id)?>'" />
         					<input id ="buy" type="button" value="Xem chi tiết" onclick="window.location='index.php?controllers=Tour&action=ViewTourDetail&id=<?php echo($tour->id)?>'" />
     					</form>
                </div>
                <hr/>
        <?php
            }
        endforeach
        ;
        echo ("</div>");
        echo ("</div>");
        echo ("</div>");
        include ("views/template/footer.html");
        ?>
    </body>
</html>
