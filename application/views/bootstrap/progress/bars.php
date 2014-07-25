<?php for($p=0; $p<count($progress); $p++) : ?>
<div class="progress">
    <div class="progress-bar<?php
        if($progress[$p]['class'] != NULL)
        echo (' progress-bar-' . $progress[$p]['class']); ?>"        
        aria-valuemin="0" aria-valuemax="100"
        aria-valuenow="<?php echo $progress[$p]['now']; ?>"
        style="width: <?php echo $progress[$p]['now']; ?>%"
        role="progressbar">
        <span class="sr-only"><?php
        echo $progress[$p]['now']; ?>%
        Complete<?php
        if(in_array($progress[$p]['now'], array('success','warning','danger')))
        echo (' (' . $progress[$p]['now'] . ')'); ?>; ?></span>
    </div>
</div>
<?php endfor; ?>