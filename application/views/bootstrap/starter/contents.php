<div class="starter-template">
    <h1><?php echo CB_BRAND; ?></h1>
    <h2><?php echo $title; ?></h2>    
    <?php
        for($c=1; $c<count($navbar_dropdown); $c++) :
        if ($navbar_dropdown[$c]['class'] == 'dropdown-header') :
    ?>
    <h3><?php echo $navbar_dropdown[$c]['text'] ?></h3>
    <p>
    <?php elseif ($navbar_dropdown[$c]['class'] == NULL) : ?>
    <a href="<?php
    echo $navbar_dropdown[$c]['href']; ?>"><?php echo
    $navbar_dropdown[$c]['text'] ?></a><br />    
    <?php else : ?>
    </p>
    <?php
        endif;
        endfor;
    ?>