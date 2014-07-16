<div class="page-header">
    <h1>Non-responsive Bootstrap</h1>
    <p class="lead">
        Disable the responsiveness of Bootstrap by fixing the width of the
        container and using the first grid system tier.
        <a href="http://getbootstrap.com/getting-started/#disable-responsive">Read the documentation</a>
        for more information.
    </p>
</div>
<h3>What changes</h3>
<p>
    Note the lack of the
    <code>&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;</code>,
    which disables the zooming aspect of sites in mobile devices. In addition,
    we reset our container's width and are basically good to go.
</p>
<h3>Regarding navbars</h3>
<p>
    As a heads up, the navbar component is rather tricky here in that the styles
    for displaying it are rather specific and detailed. Overrides to ensure
    desktop styles display are not as performant or sleek as one would like.
    Just be aware there may be potential gotchas as you build on top of this
    example when using the navbar.
</p>
<h3>Browsers, scrolling, and fixed elements</h3>
<p>
    Non-responsive layouts highlight a key drawback to fixed elements.
    <strong class="text-danger">
        Any fixed component, such as a fixed navbar, will not be scrollable when
        the viewport becomes narrower than the page content.
    </strong>
    In other words, given the non-responsive container width of 970px and a
    viewport of 800px, you'll potentially hide 170px of content.
</p>
<p>
    There is no way around this as it's default browser behavior. The only
    solution is a responsive layout or using a non-fixed element.
</p>
<h3>Non-responsive grid system</h3>
<div class="row">
    <div class="col-xs-4">One third</div>
    <div class="col-xs-4">One third</div>
    <div class="col-xs-4">One third</div>
</div>