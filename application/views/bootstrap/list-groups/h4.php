
<div class="list-group">            
    <?php for($lgh=0; $lgh<count($list_groups); $lgh++) : ?>
        <a href="<?php echo $list_groups[$lgh]['href']; ?>" class="list-group-item<?php
        if($list_groups[$lgh]['active'] == TRUE) echo " active"; ?>">
        <h4 class="list-group-item-heading"><?php echo $list_groups[$lgh]['heading']; ?></h4>
        <p class="list-group-item-text">
            <?php echo $list_groups[$lgh]['text']; ?>
            Donec id elit non mi porta gravida at eget metus.
            Maecenas sed diam eget risus varius blandit.
        </p>
    </a>
    <?php endfor; ?>
</div>