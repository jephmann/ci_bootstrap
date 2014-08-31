<div class="footer">
    <div class="container">
        <p class="text-muted">
            <?php echo CB_COPYRIGHT; ?>
            <?php for($nf=0; $nf<count($navfoot); $nf++) : ?>
            &middot;
            <a href="<?php echo site_url($navfoot[$nf]['href']); ?>">
                <?php echo $navfoot[$nf]['text']; ?>
            </a>
            <?php endfor; ?>
        </p>
    </div>
</div>