<!-- Jumbotron (Main component for a primary marketing message or call to action) -->
<div class="jumbotron">
    <?php if($jumbotron['container'] == TRUE) : ?><div class="container"><?php endif; ?>
    <h1><?php echo $jumbotron['headline']; ?></h1>
    <p<?php
    if($jumbotron['lead_class'] != NULL) : ?> class="lead"<?php
    endif; ?>><?php
    echo $jumbotron['lead_text']; ?></p><?php
    if($jumbotron['btn_text'] != NULL) : ?><p>
        <a class="btn btn-lg btn-<?php echo $jumbotron['btn_class']; ?>" href="<?php
        echo $jumbotron['btn_href']; ?>" role="button"><?php
        echo $jumbotron['btn_text']; ?> &raquo;</a>
    </p><?php endif; ?>
    <?php if($jumbotron['container'] == TRUE) : ?></div><?php endif; ?>
</div>