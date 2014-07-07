    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <?php for($n=0; $n<count($navbar); $n++) : ?>
            <div class="col-md-4">
                <h2><?php echo $navbar[$n]['text']; ?></h2>
                <p><?php echo $navbar[$n]['p']; ?></p>
                <p>
                    <a class="btn btn-default" href="<?php echo site_url($navbar[$n]['href']); ?>" role="button">
                        View <?php echo $navbar[$n]['text']; ?> &raquo;
                    </a>
                </p>
            </div>
            <?php endfor; ?>
        </div>
      