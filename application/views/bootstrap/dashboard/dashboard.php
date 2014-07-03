<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><?php echo $title ?></h1>
    <div class="row placeholders">
        <?php for($d=0; $d<count($dashboard); $d++) : ?>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img data-src="<?php echo $dashboard[$d]['img_data-src'] ?>" class="img-responsive" alt="<?php echo $dashboard[$d]['img_alt'] ?>">
            <h4><?php echo $dashboard[$d]['h4'] ?></h4>
            <span class="text-muted"><?php echo $dashboard[$d]['text-muted'] ?></span>
        </div>
        <?php endfor;?>
    </div>