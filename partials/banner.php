<?php
require('db.php');
$sql = "SELECT*FROM banners";
$bannners = $conn->query($sql);

?>

    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
            $isFirst = true;
            while($banner = $bannners->fetch_assoc()): ?>
            <div class="carousel-item <?=$isFirst == true ? 'active':''?>">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/img/<?=$banner['image']?>" alt="">
                        </div>
                        <?php $isFirst = false;?>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><?=$banner['title']?>/h1>
                                <h3 class="h2">T<?=$banner['sub_title']?></h3>
                                <p>
                                    <?=$banner['description'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile ?>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->