<div class="starter-template">
    <h1><?php echo CB_BRAND; ?></h1>
    <h2><?php echo $title; ?></h2>
    <?php
        for($c=1; $c<count($contents_components); $c++) :
        if ($contents_components[$c]['class'] == 'dropdown-header') :
    ?>
    <h3><?php echo $contents_components[$c]['text'] ?></h3>
    <p>
    <?php elseif ($contents_components[$c]['class'] == NULL) : ?>
    <a href="<?php
    echo $contents_components[$c]['href']; ?>"><?php echo
    $contents_components[$c]['text'] ?></a><br />    
    <?php else : ?>
    </p>
    <?php
        endif;
        endfor;
    ?>