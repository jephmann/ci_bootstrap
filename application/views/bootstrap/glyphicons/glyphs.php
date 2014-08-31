<div class="container bs-docs-container">

<div class="bs-docs-section">
    <h1 class="page-header" id="glyphicons">Glyphicons</h1>
    <h2 id="glyphicons-glyphs">Available glyphs</h2>
    <p>
        Includes 200 glyphs in font format from the Glyphicon Halflings set.
        <a href="http://glyphicons.com/">Glyphicons</a>
        Halflings are normally not available for free, but their creator has
        made them available for Bootstrap free of cost. As a thank you, we only
        ask that you include a link back to
        <a href="http://glyphicons.com/">Glyphicons</a> whenever possible.
    </p>
    <div class="bs-glyphicons">
        <ul class="bs-glyphicons-list">
        <?php foreach($glyphicons as &$g) : ?>
            <li>
                <span class="glyphicon glyphicon-<?php echo $g; ?>"></span>
                <span class="glyphicon-class">glyphicon glyphicon-<?php echo $g; ?></span>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>


  <h2 id="glyphicons-how-to-use">How to use</h2>
  <p>For performance reasons, all icons require a base class and individual icon class. To use, place the following code just about anywhere. Be sure to leave a space between the icon and text for proper padding.</p>
  <div class="bs-callout bs-callout-danger">
    <h4>Don't mix with other components</h4>
    <p>Icon classes cannot be directly combined with other components. They should not be used along with other classes on the same element. Instead, add a nested <code>&lt;span&gt;</code> and apply the icon classes to the <code>&lt;span&gt;</code>.</p>
  </div>
  <div class="bs-callout bs-callout-danger">
    <h4>Only for use on empty elements</h4>
    <p>Icon classes should only be used on elements that contain no text content and have no child elements.</p>
  </div>
  <div class="bs-callout bs-callout-info">
    <h4>Changing the icon font location</h4>
    <p>Bootstrap assumes icon font files will be located in the <code>../fonts/</code> directory, relative to the compiled CSS files. Moving or renaming those font files means updating the CSS in one of three ways:</p>
    <ul>
      <li>Change the <code>@icon-font-path</code> and/or <code>@icon-font-name</code> variables in the source Less files.</li>
      <li>Utilize the <a href="http://lesscss.org/usage/#command-line-usage-relative-urls">relative URLs option</a> provided by the Less compiler.</li>
      <li>Change the <code>url()</code> paths in the compiled CSS.</li>
    </ul>
    <p>Use whatever option best suits your specific development setup.</p>
  </div>
<div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-search"</span><span class="nt">&gt;&lt;/span&gt;</span></code></pre></div>


  <h2 id="glyphicons-examples">Examples</h2>
  <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>
  <div class="zero-clipboard"><span class="btn-clipboard with-example">Copy</span></div><div class="bs-example">
    <div role="toolbar" class="btn-toolbar">
      <div class="btn-group">
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-align-left"></span></button>
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-align-center"></span></button>
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-align-right"></span></button>
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-align-justify"></span></button>
      </div>
    </div>
    <div role="toolbar" class="btn-toolbar">
      <button class="btn btn-default btn-lg" type="button"><span class="glyphicon glyphicon-star"></span> Star</button>
      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-star"></span> Star</button>
      <button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-star"></span> Star</button>
      <button class="btn btn-default btn-xs" type="button"><span class="glyphicon glyphicon-star"></span> Star</button>
    </div>
  </div>
<div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-default btn-lg"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"glyphicon glyphicon-star"</span><span class="nt">&gt;&lt;/span&gt;</span> Star
<span class="nt">&lt;/button&gt;</span></code></pre></div>
</div>
    
</div>