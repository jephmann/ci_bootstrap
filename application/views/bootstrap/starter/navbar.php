<?php // views\bootstrap\starter\navbar.php ?>
<ul class="nav navbar-nav">
    <?php for($n=0; $n<count($navbar); $n++) : ?>
    <li<?php if($this->uri->uri_string() == $navbar[$n]['href']) echo " class=\"active\""; ?>>
        <a href="<?php echo site_url($navbar[$n]['href']); ?>"><?php echo $navbar[$n]['text']; ?></a>
    </li>
    <?php endfor; ?>
</ul>