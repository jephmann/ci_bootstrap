<div class="header">
    <ul class="nav nav-pills pull-right">
        <li class="active">
            <a href="#">Narrow Jumbotron</a>
        </li>
        <?php for($n=0; $n<count($navbar); $n++) : ?>
        <li<?php if($this->uri->uri_string() == $navbar[$n]['href']) echo " class=\"active\""; ?>>
            <a href="<?php echo site_url($navbar[$n]['href']); ?>"><?php echo $navbar[$n]['text']; ?></a>
        </li>
        <?php endfor; ?>
    </ul>
    <h3 class="text-muted">
        <a href="<?php echo site_url(''); ?>"><?php echo $brand; ?></a>
    </h3>
</div>