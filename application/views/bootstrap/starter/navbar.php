<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('') ?>"><?php echo $brand ?></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php for($n=0; $n<count($navbar); $n++) : ?>
                <li<?php if($this->uri->uri_string() == $navbar[$n]['href']) echo " class=\"active\"" ?>>
                    <a href="<?php echo site_url($navbar[$n]['href']) ?>"><?php echo $navbar[$n]['text'] ?></a>
                </li>
                <?php endfor; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>