    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
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
        </div><!--/.nav-collapse -->
      </div>
    </div>