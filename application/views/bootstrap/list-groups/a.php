<div class="list-group">            
    <?php for($a=0; $a<count($list_groups); $a++) : ?>            
    <a href="<?php echo $list_groups[$a]['href']; ?>" class="list-group-item<?php
    if($list_groups[$a]['active'] == TRUE) echo " active"; ?>"><?php echo $list_groups[$a]['text']; ?></a>
    <?php endfor; ?>
</div>