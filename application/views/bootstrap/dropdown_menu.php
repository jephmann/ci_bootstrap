<div class="dropdown theme-dropdown clearfix">
    <a id="<?php
        echo $dropdown_menu[0]['id']; ?>" href="<?php
        echo $dropdown_menu[0]['href']; ?>" title="<?php
        echo $dropdown_menu[0]['title']; ?>" role="button" class="sr-only dropdown-toggle" data-toggle="dropdown"><?php
        echo $dropdown_menu[0]['text']; ?> <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="<?php
        echo $dropdown_menu[0]['id']; ?>">
        <?php for($dm=1; $dm<count($dropdown_menu); $dm++) : ?>
        <li<?php
            if($dropdown_menu[$dm]['active']==TRUE) {echo ' class="active"';} ?> role="presentation"<?php
            if($dropdown_menu[$dm]['divider']==TRUE) {echo ' class="divider"';} ?>>
            <?php if($dropdown_menu[$dm]['href']!=NULL) : ?>  
            <a role="menuitem" tabindex="-1" href="<?php
                echo $dropdown_menu[$dm]['href']; ?>" title="<?php
                echo $dropdown_menu[$dm]['title']; ?>">
                <?php echo $dropdown_menu[$dm]['text']; ?>
            </a>
            <?php endif; ?>
        </li>
        <?php endfor; ?>
    </ul>
</div>