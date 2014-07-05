<div class="row">
    <div class="col-sm-8 blog-main">
        
        <?php for($p=0; $p<count($posts); $p++) : ?>
        <div class="blog-post">
            <h2 class="blog-post-title">
                <?php echo $posts[$p]['title'] ?>
            </h2>
            <p class="blog-post-meta">
                <?php echo $posts[$p]['date'] ?> by 
                <a href="<?php echo $posts[$p]['href'] ?>"><?php echo $posts[$p]['author'] ?></a>
            </p>
            <?php echo $posts[$p]['text'] ?>
        </div><!-- /.blog-post -->
        <?php endfor; ?>
        
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div><!-- /.blog-main -->