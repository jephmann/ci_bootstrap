<!-- Carousel
================================================== -->
<div id="<?php echo $carousel_id; ?>" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for($c=0; $c<count($carousel); $c++) : ?>
        <li data-target="#<?php echo $carousel_id; ?>" data-slide-to="<?php
        echo $c; ?>"<?php        
        if($carousel[$c]['active'] == TRUE) echo ' class="active"'; ?>></li>
        <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php for($c=0; $c<count($carousel); $c++) : ?>        
        <div class="item<?php if($carousel[$c]['active'] == TRUE) echo ' active'; ?>">
            
            <img 
                src="<?php echo $carousel[$c]['img_src']; ?>"
                data-src="<?php echo $carousel[$c]['img_data-src']; ?>"
                alt="<?php echo $carousel[$c]['img_alt']; ?>">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo $carousel[$c]['headline']; ?></h1>
                    <p><?php echo $carousel[$c]['text']; ?></p>
                    <?php if($carousel[$c]['btn_href'] != NULL) : ?>
                    <p><a class="btn btn-lg btn-primary" href="<?php
                    echo $carousel[$c]['btn_href']; ?>" role="button"><?php
                    echo $carousel[$c]['btn_text']; ?></a></p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>        
        <?php endfor; ?>
    </div>
    <a class="left carousel-control" href="#<?php echo $carousel_id; ?>" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#<?php echo $carousel_id; ?>" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div><!-- /.carousel -->