
<!-- navbar -->
<div class="navbar navbar-<?php
    echo $navbardiv['subclass'];
    if ($navbardiv['top'] != NULL) {echo ' navbar-' . $navbardiv['top'] . '-top';}
    ?>"<?php
    if ($navbardiv['role'] != NULL) {echo ' role="' . $navbardiv['role'] . '"';}
?>>