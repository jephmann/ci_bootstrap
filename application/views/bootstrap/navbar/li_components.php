
<li class="dropdown">
    <a href="<?php
        echo $contents_components[0]['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php
        echo $contents_components[0]['text']; ?> <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
        <?php for($n=1; $n<count($contents_components); $n++) : ?>
        <li<?php if($contents_components[$n]['class'] != NULL)
            echo ' class="' . $contents_components[$n]['class'] . '"'; ?>><?php
            if($contents_components[$n]['href'] != NULL) : ?><a href="<?php
            echo $contents_components[$n]['href'] ?>"><?php
            endif;
            echo $contents_components[$n]['text'];
            if($contents_components[$n]['href'] != NULL) : ?></a><?php endif; ?></li>
        <?php endfor ?>
    </ul>
</li>