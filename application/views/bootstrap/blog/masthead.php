<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">New features</a>
            <a class="blog-nav-item" href="#">Press</a>
            <a class="blog-nav-item" href="#">New hires</a>
            <?php for($n=0; $n<count($navbar); $n++) : ?>
            <a class="blog-nav-item<?php if($this->uri->uri_string() == $navbar[$n]['href']) echo " activ" ?>" href="<?php echo site_url($navbar[$n]['href']) ?>">
                <?php echo $navbar[$n]['text'] ?>
            </a>
            <?php endfor; ?>
        </nav>
    </div>
</div>