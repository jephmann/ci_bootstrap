<!-- Carousel
================================================== -->
<div id="<?php echo $carousel['id'];?>" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php for($c=1; $c<count($carousel); $c++) : $x = ($c-1) ?>
        <li data-target="#<?php
        echo $carousel['id']; ?>" data-slide-to="<?php
        echo $x; ?>"<?php        
        if($carousel[$x]['active'] == TRUE) echo ' class="active"'; ?>></li>
        <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php for($c=1; $c<count($carousel); $c++) : $x = ($c-1) ?>        
        <div class="item<?php if($carousel[$x]['active'] == TRUE) echo ' active'; ?>">            
            <img src="<?php
            echo $carousel[$x]['img_src']; ?>" data-src="<?php
            echo $carousel[$x]['img_data-src']; ?>" alt="<?php
            echo $carousel[$x]['img_alt']; ?>">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php
                    echo $carousel[$x]['headline']; ?></h1>
                    <p><?php
                    echo $carousel[$x]['text']; ?></p>
                    <?php if($carousel[$x]['btn_href'] != NULL) : ?>
                    <p><a class="btn btn-lg btn-primary" href="<?php
                    echo $carousel[$x]['btn_href']; ?>" role="button"><?php
                    echo $carousel[$x]['btn_text']; ?></a></p>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>        
        <?php endfor; ?>
    </div>
    <a class="left carousel-control" href="#<?php
    echo $carousel['id']; ?>" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#<?php
    echo $carousel['id']; ?>" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div><!-- /.carousel -->