<div class="masthead">
    <h3 class="text-muted"><?php echo CB_BRAND; ?></h3>
    <ul class="nav nav-justified">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Downloads</a></li>
        <?php for($n=0; $n<count($navbar); $n++) : ?>
        <li<?php if($this->uri->uri_string() == $navbar[$n]['href']) echo " class=\"active\""; ?>>
            <a href="<?php echo site_url($navbar[$n]['href']); ?>"><?php echo $navbar[$n]['text']; ?></a>
        </li>
        <?php endfor; ?>
    </ul>
</div>