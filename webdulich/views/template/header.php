<div id="header">  
    <nav class="navbar navbar-fixed-top" id="navbar1">
        <div>
            <div class="top">
                <div class="hotline">
                    <a href="">Hotline: 0123456789</a>
                </div>
                <div class="dangnhap">
                        <?php
                            if (isset($_SESSION['username'])) {
                                echo("<a href='index.php?controllers=User&action=Logout'>");
                                echo($_SESSION['username']."/Đăng xuất");
                                echo("</a>");
                            } else {
                                echo("<a href='index.php?controllers=User&action=Login'>");
                                echo("Đăng nhập");
                                echo("</a>");
                            }
                        ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <a href="index.php?controllers=Home&action=ViewHome"><img src="img/banner/logo5.png"></a>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php?controllers=Home&action=ViewHome">TRANG CHỦ</a></li>
                    <li><a href="index.php?controllers=About&action=ViewAbout">GIỚI THIỆU</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TOURS<b class="caret"></b></a>
                        <ul class="dropdown-menu" style="color:">
                            <li><a href="index.php?controllers=Tour&action=ShowTourByType&loaitour=1">Du lịch miền Bắc</a></li>
                            <li><a href="index.php?controllers=Tour&action=ShowTourByType&loaitour=2">Du lịch miền Trung</a></li>
                            <li><a href="index.php?controllers=Tour&action=ShowTourByType&loaitour=3">Du lịch Miền Nam</a></li>
                            <li><a href="index.php?controllers=Tour&action=ShowTourByType&loaitour=4">Du lịch theo dịp lễ hội</a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </li>
                    <li><a href="index.php?controllers=Post&action=ShowListPost">TIN TỨC DU LỊCH</a></li>
                    <li><a href="index.php?controllers=Contact&action=ShowContact">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/banner/i.jpg" class="img" >
                <div class="carousel-caption">
                    <h2>Uy tín - Chất lượng - Nhiệt tình</h2>
                </div>
            </div>
            <div class="item">
                <img src="img/banner/h.jpg" class="img">
                <div class="carousel-caption">
                    <h2>Uy tín - Chất lượng - Nhiệt tình</h2>
                </div>
            </div>
            <div class="item">
                <img src="img/banner/d.jpg" class="img">
                <div class="carousel-caption">
                    <h2>Uy tín - Chất lượng - Nhiệt tình</h2>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
