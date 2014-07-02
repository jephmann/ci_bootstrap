<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for($c=0; $c<count($carousel); $c++) : ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $c; ?>"<?php if ($c==0) echo "class=\"active\""; ?>></li>
        <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php for($c=0; $c<count($carousel); $c++) : ?>
        <div class="<?php echo $carousel[$c]['item_class'] ?>">
            <img src="<?php echo $carousel[$c]['img_src'] ?>" alt="<?php echo $carousel[$c]['img_alt'] ?>">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo $carousel[$c]['h1'] ?></h1>
                    <p><?php echo $carousel[$c]['p'] ?></p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo $carousel[$c]['href'] ?>" role="button"><?php echo $carousel[$c]['button'] ?></a></p>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->