<h3>Column clearing</h3>
<p>
    <a href="http://getbootstrap.com/css/#grid-responsive-resets">Clear floats</a>
    at specific breakpoints to prevent awkward wrapping with uneven content.
</p>
<div class="row">
    <div class="col-xs-6 col-sm-3">
        .col-xs-6 .col-sm-3
        <br>
        Resize your viewport or check it out on your phone for an example.
    </div>
    <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
    <!-- Add the extra clearfix for only the required viewport -->
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
    <div class="col-xs-6 col-sm-3">.col-xs-6 .col-sm-3</div>
</div>
<hr>