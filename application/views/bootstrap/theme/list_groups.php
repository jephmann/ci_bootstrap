<div class="row">
    <div class="col-sm-4">
        <ul class="list-group">
            <?php for($li=0; $li<count($list_groups); $li++) : ?>            
            <li class="list-group-item"><?php echo $list_groups[$li]['text']; ?></li>
            <?php endfor; ?>
        </ul>
    </div><!-- /.col-sm-4 -->
    <div class="col-sm-4">
        <div class="list-group">            
            <?php for($a=0; $a<count($list_groups); $a++) : ?>            
            <a href="<?php echo $list_groups[$a]['href']; ?>" class="list-group-item<?php
            if($list_groups[$a]['active'] == TRUE) echo " active"; ?>"><?php echo $list_groups[$a]['text']; ?></a>
            <?php endfor; ?>
        </div>
    </div><!-- /.col-sm-4 -->
    <div class="col-sm-4">
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
    </div><!-- /.col-sm-4 -->
</div>