<?php include('inc/head.php') ?>
<?php include('inc/top-bar.php') ?>
<div class="grid">
    <div class="row">
        <div id="sidebar" class="quad-1">
            <ul class="stack">
                <li><a href="#intro">Introduction</a></li>
                <li>
                    <a href="#grid">The Grid</a>
                    <ul>
                        <li><a href="#nesting">Nesting</a></li>
                        <li><a href="#grid-snap">Grid snap</a></li>
                        <li><a href="#grid-fluid">Grid fluid</a></li>
                        <li><a href="#grid-centered">Grid centered</a></li>
                    </ul>
                </li>
                <li><a href="#prefix-suffix">Preffix & Suffix</a></li>
                <li><a href="#push-pull">Push & Pull</a></li>
                <li><a href="#visible-invisible">Visible & Invisible</a></li>
                <li><a href="#debug">Debug</a></li>
            </ul>
        </div>
        <div class="quad-3">
            <section id="intro">
                <h2 class="h1 title">Introduction</h2>
                <h4 class="h4 title">Golden Rule</h4>
                <p>
                    The main premise of Quickstarter is creating a lightweight framework to assist the creation of your next project.
                </p>
                <h4 class="h4 title">Lightweight</h4>
                <p>
                    That's why is designed to fit in most cases, but not all, sometimes you have to customize the code to meet your own needs.
                    We do that to avoid unnecesary code and a bloated framework, which eventually would end up being counter&dash;productive for your project.
                </p>
                <h4 class="h4 title">Style&dash;agnostic</h4>
                <p>
                    Quickstarter by default does not assume anything, if you want to change some element will need to add a <code>class</code>.
                </p>
                <h4 class="h4 title">Mobile&dash;first</h4>
                <p>
                    Quickstarter is a framework for rapid prototyping thought to be mobile&dash;first,
                    this means that is initially designed for mobile and then escalates to the desktop
                </p>
                <blockquote class="align-center">
                    Mobile > Tablet > Landscape > Desktop
                </blockquote>
                <p>
                    We define abbreviations for this layout spaces
                </p>
                <dl class="dl-horizontal">
                    <dt>* (none)</dt>
                    <dd>Mobile</dd>
                    <dt>-sm</dt>
                    <dd>Small device (Tablet portrait, some mobile phones)</dd>
                    <dt>-md</dt>
                    <dd>Medium device (Tablet landscape, old desktops)</dd>
                    <dt>-lg</dt>
                    <dd>Large device (Desktop, Tv's, etc.)</dd>
                </dl>
                <blockquote>
                    In mobile all <code>quads</code> and <code>triads</code> are full&dash;width stacking blocks. Only after <code>-sm</code> turn into a grid. <br />
                    That's why you do not need to include all device variants. Only in cases specifically required
                </blockquote>
            </section>
            

            <section id="grid">
                <h2 class="h1 title">The Grid</h2>
                <p>
                    Quickstarter works with two type of grids at once <code>quads</code> and <code>triads</code> and they are both infinitely nestable.
                </p>
                <blockquote>
                    quads and triads is just a fancy name to create the idea of &laquo;a quarter of &hellip;&raquo; and &laquo;a third of &hellip;&raquo; respectively
                </blockquote>
                <blockquote>
                    Most of the time you will not need more than 3 or 4 columns, but in case you needed, you can change the .less file allowing you to define any <b>className</b> and <b>columns</b> you want
                </blockquote>
                <a class="btn btn-primary" target="_blank" href="#">See full standalone example</a>
                <br />
                <br />

<div class="example">
<div class="samp">
    <div class="row">
        <div class="quad-1">
            <span class="bg-grid">.quad-1</span>
        </div>
        <div class="quad-3">
            <span class="bg-grid">.quad-3</span>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
    <div class="row">
        <div class="quad-1">...</div>
        <div class="quad-3">...</div>
    </div>
</div>
') ?>
</div>  
                <h4 class="h4 title">Responsive</h4>
                <p>
                    You can also add <code>.quad-1-sm</code> or <code>.quad-1-md</code> or <code>.quad-1-lg</code> to breakdown the <code>.quad-x</code> on that device 
                </p>
                <blockquote>
                    That means the grid is going to be <code>.quad-1</code>/<code>.quad-3</code> until changes <code>.quad-2</code>/<code>.quad-2</code> on a medium or large device
                </blockquote>

<div class="example">
<div class="samp">
    <div class="row">
        <div class="quad-1 quad-2-md">
            <span class="bg-grid">.quad-1</span>
        </div>
        <div class="quad-3 quad-2-md">
            <span class="bg-grid">.quad-3</span>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
    <div class="row">
        <div class="quad-1 quad-2-md">...</div>
        <div class="quad-3 quad-2-md">...</div>
    </div>
</div>
') ?>
</div>      
            <section id="nesting">
            <h2 class="h2 title">Nesting</h2>
            <p>
                Natively, <code>quads</code> can be inside other <code>quads</code>
            </p>

<div class="example">
<div class="samp">
    <div class="row nesting">
        <div class="quad-1">
            <span class="bg-grid">.quad-1</span>
        </div>
        <div class="quad-3 nesting">
            <div><span class="bg-grid">.quad-3</span></div>
            <div class="row">
                <div class="triad-1"><span class="bg-grid">.triad-1</span></div>
                <div class="triad-2"><span class="bg-grid">.triad-2</span></div>
            </div>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
    <div class="row">
        <div class="quad-1">...</div>
        <div class="quad-3">
            <div class="row">
                <div class="triad-1">...</div>
                <div class="triad-2">...</div>
            </div>
        </div>
    </div>
</div>
') ?>
</div>  
            </section>
            <section id="grid-snap">
            <h2 class="h2 title">Grid Snap</h2>
            <p>
                It wil ignore the gutter between <code>quads</code> can be applied on <code>.grid</code> as <code>.grid-snap</code> or on <code>.row</code> as <code>.row-snap</code>
            </p>

<div class="example">
<div class="samp">
    <div class="row-snap">
        <div class="quad-1">
            <span class="bg-grid">.quad-1</span>
        </div>
        <div class="quad-3">
            <span class="bg-grid">.quad-3</span>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
    <div class="row-snap">
        <div class="quad-1">...</div>
        <div class="quad-3">...</div>
    </div>
</div>
') ?>
</div>  
            </section>
            <section id="grid-fluid">
            <h2 class="h2 title">Grid fluid</h2>
            <p>
                Ignores widths and sets a fluid grid along the wrapper will not work inside a traditional <code>.grid</code>
            </p>
            <a class="btn btn-primary" target="_blank" href="#">See full standalone example</a>
            </section>

            <section id="grid-centered">
            <h2 class="h2 title">Grid centered</h2>
            <p>
                Centers <code>quads</code> between the available space can be applied on <code>.grid</code> as <code>.grid-centered</code> or on <code>.row</code> as <code>.row-centered</code>
            </p>

<div class="example">
<div class="samp">
    <div class="row-centered">
        <div class="quad-1">
            <span class="bg-grid">.quad-1</span>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
    <div class="row-centered">
        <div class="quad-1">...</div>
    </div>
</div>
') ?>
</div>  
            </section>
            </section>

            <section id="prefix-suffix">
                <h2 class="h1 title">Prefix & Suffix</h2>
                <p>
                    Adds spacing before or after a <code>quad</code> using <code>.prefix-x</code> or <code>.suffix-x</code> respectively
                </p>
                <blockquote>
                    <code>.prefix-x</code> & <code>.suffix-x</code> on <code>.quad-x</code> goes to 4 and on <code>.triad-x</code> to 3
                </blockquote>

<div class="example">
<div class="samp">
    <div class="row">
        <div class="quad-3 prefix-1">
            <span class="bg-grid">.quad-3 .prefix-1</span>
        </div>
    </div>
    <div class="row">
        <div class="quad-3 suffix-1">
            <span class="bg-grid">.quad-3 .suffix-1</span>
        </div>
    </div>
    <div class="row">
        <div class="triad-2 prefix-1">
            <span class="bg-grid">.triad-2 .prefix-1</span>
        </div>
    </div>
    <div class="row">
        <div class="triad-2 suffix-1">
            <span class="bg-grid">.triad-2 .suffix-1</span>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
    <div class="row">
        <div class="quad-3 prefix-1">...</div>
    </div>
    <div class="row">
        <div class="quad-3 suffix-1">...</div>
    </div>
    <div class="row">
        <div class="triad-2 prefix-1">...</div>
    </div>
    <div class="row">
        <div class="triad-2 suffix-1">...</div>
    </div>
</div>
') ?>
</div>

<h3 class="h4 title">Responsive</h3>
                <p>
                    You can also add <code>.prefix-1-sm</code> or <code>.suffix-1-md</code> to breakdown the <code>.prefix-x</code> or <code>.suffix-x</code> on that device 
                </p>
                <blockquote>
                    That means the grid gonna be <code>.prefix-x</code>/<code>.suffix-x</code> until changes to a medium or large device
                </blockquote>

<div class="example">
<div class="samp">
    <div class="row">
        <div class="quad-1">
            <span class="bg-grid">.quad-1</span>
        </div>
        <div class="quad-2 prefix-1-lg">
            <span class="bg-grid">.quad-1 .prefix-1-lg</span>
        </div>
    </div>
    <div class="row">
        <div class="triad-1 suffix-1-lg">
            <span class="bg-grid">.triad-1 .suffix-1-lg</span>
        </div>
        <div class="triad-1">
            <span class="bg-grid">.triad-1</span>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
    <div class="row">
        <div class="quad-3 prefix-1">...</div>
    </div>
    <div class="row">
        <div class="quad-3 suffix-1">...</div>
    </div>
    <div class="row">
        <div class="triad-2 prefix-1">...</div>
    </div>
    <div class="row">
        <div class="triad-2 suffix-1">...</div>
    </div>
</div>
') ?>
</div>  
                <?php /* 
                <div>
                    <?php include('inc/grid-example.php') ?>
                </div>
                <blockquote>
                    you can also add <code>.prefix</code> or <code>.suffix</code> for a better layout spacing
                </blockquote>
                */ ?>
            </section>
            <section id="push-pull">
                <h2 class="h1 title">Push & Pull</h2>
                <p>
                    Push or pulls <code>quads</code> ignoring the layout, they work exacly as suffix and prefix adding space before or after a <code>quad</code>.<br />
                    Useful to swapping cols
                </p>

<div class="example">
<div class="samp">
    <div class="row">
        <div class="quad-1 push-3">
            <span class="bg-grid">first col</span>
        </div>
        <div class="quad-3 pull-1">
            <span class="bg-grid">second col</span>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
    <div class="row">
        <div class="quad-1 push-3">
            <span class="bg-grid">first col</span>
        </div>
        <div class="quad-3 pull-1">
            <span class="bg-grid">second col</span>
        </div>
    </div>
</div>
') ?>
</div>
            <h4 class="h4 title">Responsive</h4>
            <p>
                They are also responsive, only add the device suffix like <code>.push-1-sm</code>
            </p>
            <blockquote>
                In this example, the cols are only swapped for a large device, resize the browser to see what happens
            </blockquote>

<div class="example">
<div class="samp">
    <div class="row">
        <div class="quad-1 push-3-lg">
            <span class="bg-grid">first col</span>
        </div>
        <div class="quad-3 pull-1-lg">
            <span class="bg-grid">second col</span>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
    <div class="row">
        <div class="quad-1 push-3-lg">
            <span class="bg-grid">first col</span>
        </div>
        <div class="quad-3 pull-1-lg">
            <span class="bg-grid">second col</span>
        </div>
    </div>
</div>
') ?>
</div>
            </section>
            <section id="visible-invisible">
                <h2 class="h1 title">Visible & Invisible</h2>
                <p>
                    Show and hide things on specific devices
                </p>

<h4 class="h4 title">Visible only</h4>
<div class="row">
    <div class="quad-4">
        <div class="row">
            <div class="quad-1 visible-only">
                <div class="bg-visible block-visible">
                    &check; Mobile
                </div>
            </div>
            <div class="quad-1 invisible-only">
                <div class="bg-invisible block-visible">
                    &cross; Mobile
                </div>
            </div>
            <div class="quad-1 visible-only-sm">
                <div class="bg-visible block-visible">
                    &check; Portrait
                </div>
            </div>
            <div class="quad-1 invisible-only-sm">
                <div class="bg-invisible block-visible">
                    &cross; Portrait
                </div>
            </div>
            <div class="quad-1 visible-only-md">
                <div class="bg-visible block-visible">
                    &check; Landscape
                </div>
            </div>
            <div class="quad-1 invisible-only-md">
                <div class="bg-invisible block-visible">
                    &cross; Landscape
                </div>
            </div>
            <div class="quad-1 visible-only-lg">
                <div class="bg-visible block-visible">
                    &check; Desktop
                </div>
            </div>
            <div class="quad-1 invisible-only-lg">
                <div class="bg-invisible block-visible">
                    &cross; Desktop
                </div>
            </div>
        </div>
    </div>
</div>

<h4 class="h4 title">Invisible only</h4>
<div class="row">
    <div class="quad-4">
        <div class="row">
            <div class="quad-1 invisible-only">
                <div class="bg-visible block-visible">
                    &check; Mobile
                </div>
            </div>
            <div class="quad-1 visible-only">
                <div class="bg-invisible block-visible">
                    &cross; Mobile
                </div>
            </div>
            <div class="quad-1 invisible-only-sm">
                <div class="bg-visible block-visible">
                    &check; Portrait
                </div>
            </div>
            <div class="quad-1 visible-only-sm">
                <div class="bg-invisible block-visible">
                    &cross; Portrait
                </div>
            </div>
            <div class="quad-1 invisible-only-md">
                <div class="bg-visible block-visible">
                    &check; Landscape
                </div>
            </div>
            <div class="quad-1 visible-only-md">
                <div class="bg-invisible block-visible">
                    &cross; Landscape
                </div>
            </div>
            <div class="quad-1 invisible-only-lg">
                <div class="bg-visible block-visible">
                    &check; Desktop
                </div>
            </div>
            <div class="quad-1 visible-only-lg">
                <div class="bg-invisible block-visible">
                    &cross; Desktop
                </div>
            </div>
        </div>
    </div>
</div>

<h4 class="h4 title">Visible From</h4>
<div class="row">
    <div class="quad-4">
        <div class="row">
            <div class="quad-1 visible">
                <div class="bg-visible block-visible">
                    &check; Mobile
                </div>
            </div>
            <div class="quad-1 invisible">
                <div class="bg-invisible block-visible">
                    &cross; Mobile
                </div>
            </div>
            <div class="quad-1 visible-sm">
                <div class="bg-visible block-visible">
                    &check; Portrait
                </div>
            </div>
            <div class="quad-1 invisible-sm">
                <div class="bg-invisible block-visible">
                    &cross; Portrait
                </div>
            </div>
            <div class="quad-1 visible-md">
                <div class="bg-visible block-visible">
                    &check; Landscape
                </div>
            </div>
            <div class="quad-1 invisible-md">
                <div class="bg-invisible block-visible">
                    &cross; Landscape
                </div>
            </div>
            <div class="quad-1 visible-lg">
                <div class="bg-visible block-visible">
                    &check; Desktop
                </div>
            </div>
            <div class="quad-1 invisible-lg">
                <div class="bg-invisible block-visible">
                    &cross; Desktop
                </div>
            </div>
        </div>
    </div>
</div>

<h4 class="h4 title">Invisible From</h4>
<div class="row">
    <div class="quad-4">
        <div class="row">
            <div class="quad-1 invisible">
                <div class="bg-visible block-visible">
                    &check; Mobile
                </div>
            </div>
            <div class="quad-1 visible">
                <div class="bg-invisible block-visible">
                    &cross; Mobile
                </div>
            </div>
            <div class="quad-1 invisible-sm">
                <div class="bg-visible block-visible">
                    &check; Portrait
                </div>
            </div>
            <div class="quad-1 visible-sm">
                <div class="bg-invisible block-visible">
                    &cross; Portrait
                </div>
            </div>
            <div class="quad-1 invisible-md">
                <div class="bg-visible block-visible">
                    &check; Landscape
                </div>
            </div>
            <div class="quad-1 visible-md">
                <div class="bg-invisible block-visible">
                    &cross; Landscape
                </div>
            </div>
            <div class="quad-1 invisible-lg">
                <div class="bg-visible block-visible">
                    &check; Desktop
                </div>
            </div>
            <div class="quad-1 visible-lg">
                <div class="bg-invisible block-visible">
                    &cross; Desktop
                </div>
            </div>
        </div>
    </div>
</div>


<div class="example">
<div class="samp">
    <div class="row">
        <div class="quad-4">
            <span class="bg-grid visible-md bg-visible">visible <b>from</b> a medium device</span>
        </div>
    </div>
    <div class="row">
        <div class="quad-4">
            <span class="bg-grid invisible-md">invisible <b>from</b> a medium device</span>
        </div>
    </div>
    <div class="row">
        <div class="quad-4">
            <span class="bg-grid visible-only-md bg-visible">visible <b>only</b> on a medium device</span>
        </div>
    </div>
    <div class="row">
        <div class="quad-4">
            <span class="bg-grid invisible-only-md">invisible <b>only</b> on a medium device</span>
        </div>
    </div>
</div>
<?php echo showCode('
<div class="grid">
     <div class="row">
        <div class="quad-4">
            <span class="bg-grid visible-md"> ... </span>
        </div>
    </div>
    <div class="row">
        <div class="quad-4">
            <span class="bg-grid invisible-md"> ... </span>
        </div>
    </div>
    <div class="row">
        <div class="quad-4">
            <span class="bg-grid visible-only-md"> ... </span>
        </div>
    </div>
    <div class="row">
        <div class="quad-4">
            <span class="bg-grid invisible-only-md"> ... </span>
        </div>
    </div>
</div>
') ?>
</div>
            
            </section>
            <section id="debug">
                <h2 class="h1 title">Debug</h2>
                <p>
                    Helps to see whats happening on the grid and what device jump is active.
                </p>
                <p>
                    <code>.debug</code> can be added as a class on <code>&lt;body&gt;</code> or <code>.grid</code>
                </p>
                <blockquote>
                    The Grid border changes it's color on every device, this color it's a color code shown below
                </blockquote>
                <h4 class="h4 title">Color code</h4>
                <dl class="dl-horizontal">
                    <dt>Green</dt>
                    <dd>Large device <b>-lg</b></dd>
                    <dt>Orange</dt>
                    <dd>Medium device <b>-md</b></dd>
                    <dt>Yellow</dt>
                    <dd>Small device <b>-sm</b></dd>
                    <dt>Red</dt>
                    <dd>Mobile <b>* (none)</b></dd>
                </dl>
                <a href="#" class="btn btn-primary toggle-debug">Toggle debug mode</a>
                <br />
                <br />

<div class="example">
<?php echo showCode('
<div class="grid debug">
    <div class="row">
        <div class="quad-1">...</div>
        <div class="quad-3">...</div>
    </div>
</div>
') ?>
</div>

            </section>
        </div>
    </div>
</div>
<?php include('inc/foot.php') ?>