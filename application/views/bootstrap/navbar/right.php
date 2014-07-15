
<ul class="nav navbar-nav navbar-right">
    <?php for($nr=0; $nr<count($navbar_right); $nr++) : ?>
    <li<?php if($this->uri->uri_string() == $navbar_right[$nr]['href']) {echo ' class="active"';} ?>>
        <a href="<?php
        echo site_url($navbar_right[$nr]['href']); ?>"><?php
        echo $navbar_right[$nr]['text']; ?></a>
    </li>
    <?php endfor; ?>
</ul>