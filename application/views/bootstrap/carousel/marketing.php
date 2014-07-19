<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php for ($m=0; $m<count($marketing); $m++) : ?>
        <div class="col-lg-4">
            <img class="img-circle" src="<?php
            echo $marketing[$m]['img_src']; ?>" alt="<?php
            echo $marketing[$m]['img_alt']; ?>" style="width: 140px; height: 140px;">
            <h2><?php echo $marketing[$m]['h2']; ?></h2>
            <p><?php echo $marketing[$m]['p']; ?></p>
            <p><a class="btn btn-default" href="<?php
            echo $marketing[$m]['href']; ?>" role="button"><?php
            echo $marketing[$m]['button']; ?> &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <?php endfor; ?>
    </div><!-- /.row -->