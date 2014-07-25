
<p><a href="<?php
    echo $badges_link['href']; ?>" title="<?php
    echo $badges_link['title']; ?>"><?php
    echo $badges_link['text'];
    if($badges_link['q'] != 0) : ?>&nbsp;<span class="badge"><?php
    echo $badges_link['q']; ?></span><?php
    endif; ?></a></p>