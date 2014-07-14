<?php // views\bootstrap\navbar\navbar.php ?>
<ul class="nav navbar-nav">
    <?php for($n=0; $n<count($navbar); $n++) : ?>
    <li<?php if($this->uri->uri_string() == $navbar[$n]['href']) echo " class=\"active\""; ?>>
        <a href="<?php echo site_url($navbar[$n]['href']); ?>"><?php echo $navbar[$n]['text']; ?></a>
    </li>
    <?php endfor; ?>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <?php for($n=0; $n<count($navbar_dropdown); $n++) : ?>
            <li <?php if($navbar_dropdown[$n]['class'] != NULL) echo ' class="'. $navbar_dropdown[$n]['class'] .'"'; ?>>
                <?php if($navbar_dropdown[$n]['href'] != NULL) : ?>
                <a href="<?php echo $navbar_dropdown[$n]['href'] ?>">
                <?php endif; ?>
                    <?php echo $navbar_dropdown[$n]['text'] ?>
                <?php if($navbar_dropdown[$n]['href'] != NULL) : ?>
                </a>
                <?php endif; ?>
            </li>
            <?php endfor ?>
        </ul>
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <?php for($nn=0; $nn<count($navbar_nav); $nn++) : ?>
    <li<?php if($this->uri->uri_string() == $navbar_nav[$nn]['href']) echo " class=\"active\""; ?>>
        <a href="<?php echo site_url($navbar_nav[$nn]['href']); ?>"><?php echo $navbar_nav[$nn]['text']; ?></a>
    </li>
    <?php endfor; ?>
</ul>