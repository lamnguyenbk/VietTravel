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
            include("views/template/config.html");
            include("views/template/header1.php");       
            echo ("<div class='container'>");
            echo ("<div class='row'>");
            include ("views/template/booktour.html");
        ?>

                    <div class="col-sm-3 br-grey">
                        <div class="thumbnail">
                            <a href="index.php?controllers=Tour&action=BookTour&id=<?php echo($tour->id) ?>">
                                <div class="zoomin">
                                    <img src="img/upload/tour_img/<?php echo($tour->image) ?>">
                                </div>
                            </a>
                            <hr/>
                            <a href="index.php?controllers=Tour&action=BookTour&id=<?php echo($tour->id) ?>">
                                <p><strong><?php echo($tour->tour_name) ?></strong></p>
                            </a>
                            <hr/>
                            <p>Giá: <?php echo(number_format($tour->tour_price)) ?> VND</p>
                            <hr/>
                            <p>Ngày bắt đầu: <?php echo($tour->tour_begin) ?> VND</p>
                            <hr/>
                            <p>Thời gian: <?php echo($tour->tour_time) ?> VND</p>
                            <hr/>
                            <p>Giá người lớn: <?php echo(number_format($tour->tour_price)) ?> VND</p>
                            <hr/>
                            <p>Giá trẻ em: <?php echo(number_format($child_price)) ?> VND</p>
                            <hr/>
                            
                        </div>
                    </div>
               	</div>
           	</div>
        <?php
            include("views/template/footer.html");
        ?>
    </body>
</html>
