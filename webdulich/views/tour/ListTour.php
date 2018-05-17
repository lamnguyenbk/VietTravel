<div class="col-sm-3 bg-grey text-center">
<div class=""><h1>Tour nổi bật</h1></div>
<?php
$i = 0;
foreach ($tours as $tour) :
    $i++;
    if ($i <= 4) {
    ?>
        <div class="thumbnail">
            <a href="index.php?controllers=Tour&action=ViewTourDetail&id=<?php echo($tour->id) ?>">
                <div class="zoomin">
                    <img src="img/upload/tour_img/<?php echo($tour->image)?>">
                </div>
            </a>
            <a href="index.php?controllers=Tour&action=ViewTourDetail&id=<?php echo($tour->id) ?>">
            	<p><strong><?php echo($tour->tour_name) ?></strong></p>
           	</a>
           	<a href="index.php?controllers=Tour&action=ViewTourDetail&id=<?php echo($tour->id) ?>">
            	<p>Giá: <?php echo (number_format($tour->tour_price)) ?> VND</p>
           	</a>
           	<hr/>
        </div>
        
    <?php
    }
    else {
        
    }
endforeach;
?>
</div>


