<ul class="nav nav-<?php echo $nav_class[0]; ?>" role="tablist">
    <?php for($n=0; $n<count($navs); $n++) : ?>
    <li<?php if ($navs[$n]['active']==TRUE) echo ' class="active"'; ?>>
        <a href="<?php echo $navs[$n]['href']; ?>"><?php echo $navs[$n]['text']; ?></a>
    </li>
    <?php endfor ?>
</ul>

<ul class="nav nav-<?php echo $nav_class[1]; ?>">
    <?php for($n=0; $n<count($navs); $n++) : ?>
    <li<?php if ($navs[$n]['active']==TRUE) echo ' class="active"'; ?>>
        <a href="<?php echo $navs[$n]['href']; ?>"><?php echo $navs[$n]['text']; ?></a>
    </li>
    <?php endfor ?>
</ul>