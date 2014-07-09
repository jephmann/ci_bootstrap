<footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>
        <?php echo $copyright; ?>
        <?php for($nf=0; $nf<count($navfoot); $nf++) : ?>
        &middot;
        <a href="<?php echo site_url($navfoot[$nf]['href']); ?>">
            <?php echo $navfoot[$nf]['text'] ?>
        </a>
        <?php endfor; ?>
    </p>
</footer>