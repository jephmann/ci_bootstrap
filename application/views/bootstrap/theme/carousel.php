<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for($c=0; $c<count($carousel); $c++) : ?>
        <li data-target="#carousel-example-generic" data-slide-to="<?php
        echo $c; ?>"<?php        
        if($carousel[$c]['active'] == TRUE) echo ' class="active"'; ?>></li>
        <?php endfor; ?>
    </ol>
    <div class="carousel-inner">
        <?php for($c=0; $c<count($carousel); $c++) : ?>
        <div class="item<?php if($carousel[$c]['active'] == TRUE) echo ' active'; ?>">
            <img data-src="<?php
            echo $carousel[$c]['data-src'] ?>" alt="<?php
            echo $carousel[$c]['alt'] ?>">
        </div>
        <?php endfor; ?>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>