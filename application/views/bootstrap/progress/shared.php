
<div class="progress">
    <?php for($p=0; $p<count($progress_shared); $p++) : ?>    
    <div class="progress-bar progress-bar-<?php
    echo $progress_shared[$p]['class']; ?>" style="width: <?php
    echo $progress_shared[$p]['pct']; ?>%"><span class="sr-only"><?php
    echo $progress_shared[$p]['pct']; ?>% Complete (<?php
    echo $progress_shared[$p]['class']; ?>)</span></div>
    <?php endfor; ?>
</div>
