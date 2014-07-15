
<li class="dropdown">
    <a href="<?php
        echo $navbar_dropdown[0]['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php
        echo $navbar_dropdown[0]['text']; ?> <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
    <?php for($n=1; $n<count($navbar_dropdown); $n++) : ?>
    <li<?php if($navbar_dropdown[$n]['class'] != NULL)
        echo ' class="' . $navbar_dropdown[$n]['class'] . '"'; ?>><?php
        if($navbar_dropdown[$n]['href'] != NULL) : ?><a href="<?php
        echo $navbar_dropdown[$n]['href'] ?>"><?php
        endif;
        echo $navbar_dropdown[$n]['text'];
        if($navbar_dropdown[$n]['href'] != NULL) : ?></a><?php endif; ?></li>
    <?php endfor ?>
</ul>
</li>