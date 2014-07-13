<ul class="nav nav-<?php echo $nav_class[0]['class']; ?>"<?php
    if($nav_class[0]['role'] != NULL) echo ' role="'. $nav_class[0]['role'] .'"'; ?>>
    <?php for($n=0; $n<count($navs); $n++) : ?>
    <li<?php
        if ($navs[$n]['active']==TRUE) echo ' class="active"'; ?>><a href="<?php
        echo $navs[$n]['href']; ?>"><?php
        echo $navs[$n]['text']; ?></a></li>
    <?php endfor ?>
</ul>

<ul class="nav nav-<?php echo $nav_class[1]['class']; ?>"<?php
    if($nav_class[1]['role'] != NULL) echo ' role="'. $nav_class[1]['role'] .'"'; ?>>
    <?php for($n=0; $n<count($navs); $n++) : ?>
    <li<?php
        if ($navs[$n]['active']==TRUE) echo ' class="active"'; ?>><a href="<?php
        echo $navs[$n]['href']; ?>"><?php
        echo $navs[$n]['text']; ?></a></li>
    <?php endfor ?>
</ul>