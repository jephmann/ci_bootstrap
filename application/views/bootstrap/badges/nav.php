
<ul class="nav nav-pills">
    <?php for ($bn=0; $bn<count($badges_nav); $bn++) : ?>
    <li<?php
        if($badges_nav[$bn]['active']==TRUE) {echo ' class="active"';} ?>><a href="<?php
        echo $badges_nav[$bn]['href']; ?>"><?php
        echo $badges_nav[$bn]['text']; ?><?php
        if($badges_nav[$bn]['q']!=0) : ?>&nbsp;<span class="badge"><?php
        echo $badges_nav[$bn]['q']; ?></span><?php
        endif; ?></a></li>
    <?php endfor; ?>
</ul>