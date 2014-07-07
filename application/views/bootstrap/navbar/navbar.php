<!-- navbar -->
<div class="navbar navbar-default<?php echo $navbar_class_top ?>" role="navigation">
    <div class="<?php echo $container_class ?>">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('') ?>"><?php echo $brand ?></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php for($n=0; $n<count($navbar); $n++) : ?>
                <li<?php if($this->uri->uri_string() == $navbar[$n]['href']) echo " class=\"active\"" ?>>
                    <a href="<?php echo site_url($navbar[$n]['href']) ?>"><?php echo $navbar[$n]['text'] ?></a>
                </li>
                <?php endfor; ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php for($nn=0; $nn<count($navbar_nav); $nn++) : ?>
                <li<?php if($this->uri->uri_string() == $navbar_nav[$nn]['href']) echo " class=\"active\"" ?>>
                    <a href="<?php echo site_url($navbar_nav[$nn]['href']) ?>"><?php echo $navbar_nav[$nn]['text'] ?></a>
                </li>
                <?php endfor; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>