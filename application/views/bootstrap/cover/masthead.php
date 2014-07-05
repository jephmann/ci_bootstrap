    <div class="site-wrapper">
        <div class="site-wrapper-inner">
            <div class="cover-container">
                <div class="masthead clearfix">
                    <div class="inner">
                        <h3 class="masthead-brand"><?php echo $brand ?></h3>
                        <ul class="nav masthead-nav">                            
                            <?php for($n=0; $n<count($navbar); $n++) : ?>
                            <li<?php if($this->uri->uri_string() == $navbar[$n]['href']) echo " class=\"active\"" ?>>
                                <a href="<?php echo site_url($navbar[$n]['href']) ?>"><?php echo $navbar[$n]['text'] ?></a>
                            </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </div>