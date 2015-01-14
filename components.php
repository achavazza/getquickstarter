<?php include('inc/head.php') ?>
<?php include('inc/top-bar.php') ?>
<div class="grid">
    <div class="row">
        <div id="sidebar" class="quad-1">
            <ul class="stack">
                <li><a href="#components">Components</a></li>
                <li><a href="#buttons">Buttons</a></li>
                <li><a href="#button-group">Button-group</a></li>
                <li><a href="#labels">Labels</a></li>
                <li><a href="#badges">Badges</a></li>
                <li><a href="#messages">Messages</a></li>
            </ul>
        </div>
        <div class="quad-3">
            <section id="components">
                <h2 class="h1 title">Components</h2>
                <p>
                    A list of basic components
                </p>
            </section>
            <section id="buttons">
                <h2 class="h1 title">Buttons</h2>
                <p>
                    Style any element as a button, preferably a <code>&lt;a&gt;</code>,<code>&lt;button&gt;</code> or <code>&lt;input type="submit"&gt;</code>. Simply add <code>.btn</code> class, if you want some flavour, add <code>.btn .btn-primary</code>
                </p>
                <blockquote>
                    We highly recommend to use a <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element when posible, just to enable to set a icon inside of it
                </blockquote>
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <a class="btn" href="#">button</a>
    <a class="btn btn-default"  href="#">default</a>
    <a class="btn btn-primary"  href="#">primary</a>
    <a class="btn btn-info"     href="#">info</a>
    <a class="btn btn-success"  href="#">success</a>
    <a class="btn btn-warning"  href="#">warning</a>
    <a class="btn btn-danger"   href="#">danger</a>
    <a class="btn btn-alt"      href="#">alternative</a>
    <a class="btn btn-inverse"  href="#">inverse</a>
</div>
<?php 
echo showCode('
<a class="btn"              href="#">button</a>
<a class="btn btn-default"  href="#">default</a>
<a class="btn btn-primary"  href="#">primary</a>
<a class="btn btn-info"     href="#">info</a>
<a class="btn btn-success"  href="#">success</a>
<a class="btn btn-warning"  href="#">warning</a>
<a class="btn btn-danger"   href="#">danger</a>
<a class="btn btn-alt"      href="#">alternative</a>
<a class="btn btn-inverse"  href="#">inverse</a>
') ?>
</div>  
        </section>
        <section id="button-group">
                <h2 class="h1 title">Button group</h2>
                <p>
                    Useful for use as paginator, simply wrap some a <code>.btn-group</code> on some <code>.btn</code> 
                </p>
                <blockquote>
                    Also works with <code>.label</code>
                </blockquote>
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <div class="btn-group">
        <a class="btn" href="#">1</a>
        <a class="btn" href="#">2</a>
        <span class="label">3</span>
        <a class="btn" href="#">4</a>
        <a class="btn" href="#">5</a>
    </div>
</div>
<?php 
echo showCode('
<div class="btn-group">
    <a class="btn" href="#">1</a>
    <a class="btn" href="#">2</a>
    <span class="label">3</span>
    <a class="btn" href="#">4</a>
    <a class="btn" href="#">5</a>
</div>
') ?>
</div> 
<div class="example">
<div class="samp">
    <div class="btn-group">
        <a class="btn" href="#">button</a>
        <a class="btn btn-default"  href="#">default</a>
        <a class="btn btn-primary"  href="#">primary</a>
        <a class="btn btn-info"     href="#">info</a>
        <a class="btn btn-success"  href="#">success</a>
        <a class="btn btn-warning"  href="#">warning</a>
        <a class="btn btn-danger"   href="#">danger</a>
        <a class="btn btn-alt"      href="#">alternative</a>
        <a class="btn btn-inverse"  href="#">inverse</a>
    </div>
</div>
<?php 
echo showCode('
<div class="btn-group">
    <a class="btn" href="#">button</a>
    <a class="btn btn-default"  href="#">default</a>
    <a class="btn btn-primary"  href="#">primary</a>
    <a class="btn btn-info"     href="#">info</a>
    <a class="btn btn-success"  href="#">success</a>
    <a class="btn btn-warning"  href="#">warning</a>
    <a class="btn btn-danger"   href="#">danger</a>
    <a class="btn btn-alt"      href="#">alternative</a>
    <a class="btn btn-inverse"  href="#">inverse</a>
</div>
') ?>
</div>  
        </section>
        <section id="labels">
            <h2 class="h1 title">Labels</h2>
            <p>
                Style any element as a label, simply add <code>.label</code> class, if you want some flavour, add <code>.label .label-primary</code>.<br />
                Useful to use as <code>.add-on</code> in <code>.input-append</code>

            </p>
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <a class="label" href="#">label</a>
    <a class="label label-default"  href="#">default</a>
    <a class="label label-primary"  href="#">primary</a>
    <a class="label label-info"     href="#">info</a>
    <a class="label label-success"  href="#">success</a>
    <a class="label label-warning"  href="#">warning</a>
    <a class="label label-danger"   href="#">danger</a>
    <a class="label label-alt"      href="#">alternative</a>
    <a class="label label-inverse"  href="#">inverse</a>
</div>
<?php 
echo showCode('
<a class="label"                href="#"> label </a>
<a class="label label-default"  href="#"> default </a>
<a class="label label-primary"  href="#"> primary </a>
<a class="label label-info"     href="#"> info </a>
<a class="label label-success"  href="#"> success </a>
<a class="label label-warning"  href="#"> warning </a>
<a class="label label-danger"   href="#"> danger </a>
<a class="label label-alt"      href="#"> alternative </a>
<a class="label label-inverse"  href="#"> inverse </a>
') ?>
</div>  
        </section>
        <section id="badges">
            <h2 class="h1 title">Badges</h2>
            <p>
                Highlight elements using a badge, simply add <code>.badge</code> class, if you want some flavour, add <code>.badge .badge-primary</code>
            </p>
            <blockquote>
                Is auto collapsible using <code>:empty</code> but will not collapse on IE8 because has no <code>:empty</code> support. For a better practice just print or not when has notifications
            </blockquote>
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <a class="badge" href="#">badge</a>
    <a class="badge badge-default"  href="#">default</a>
    <a class="badge badge-primary"  href="#">primary</a>
    <a class="badge badge-info"     href="#">info</a>
    <a class="badge badge-success"  href="#">success</a>
    <a class="badge badge-warning"  href="#">warning</a>
    <a class="badge badge-danger"   href="#">danger</a>
    <a class="badge badge-alt"      href="#">alternative</a>
    <a class="badge badge-inverse"  href="#">inverse</a>
</div>
<?php 
echo showCode('
<a class="badge"                href="#"> badge </a>
<a class="badge badge-default"  href="#"> default </a>
<a class="badge badge-primary"  href="#"> primary </a>
<a class="badge badge-info"     href="#"> info </a>
<a class="badge badge-success"  href="#"> success </a>
<a class="badge badge-warning"  href="#"> warning </a>
<a class="badge badge-danger"   href="#"> danger </a>
<a class="badge badge-alt"      href="#"> alternative </a>
<a class="badge badge-inverse"  href="#"> inverse </a>
') ?>
</div>
<blockquote>
    For displaying notifications you can use it on a <code>&lt;sup&gt;</code> or <code>&lt;sub&gt;</code> tag
</blockquote>
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <span class="label">
        Example
        <sup class="badge badge-danger" href="#">2</sup>
    </span>
    <span class="label">
        Example
        <span class="badge badge-danger " href="#">2</span>
    </span>
    <span class="label">
        Example
        <sub class="badge badge-danger" href="#">2</sub>
    </span>
</div>
<?php 
echo showCode('
<span class="label">
    Example
    <sup class="badge badge-danger" href="#">2</sup>
</span>
<span class="label">
    Example
    <span class="badge badge-danger " href="#">2</span>
</span>
<span class="label">
    Example
    <sub class="badge badge-danger" href="#">2</sub>
</span>
') ?>
</div>  
        </section>
        <section id="messages">
            <h2 class="h1 title">Messages</h2>
            <p>
                Style any element as a message, simply add <code>.message</code> class, if you want some flavour, add <code>.message .message-primary</code>
            </p>
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <div class="message" >message</div>
    <div class="message message-default"  >default</div>
    <div class="message message-primary"  >primary</div>
    <div class="message message-info"     >info</div>
    <div class="message message-success"  >success</div>
    <div class="message message-warning"  >warning</div>
    <div class="message message-danger"   >danger</div>
    <div class="message message-alt"      >alternative</div>
    <div class="message message-inverse"  >inverse</div>
</div>
<?php 
echo showCode('
<div class="message"                 > message </div>
<div class="message message-default" > default </div>
<div class="message message-primary" > primary </div>
<div class="message message-info"    > info </div>
<div class="message message-success" > success </div>
<div class="message message-warning" > warning </div>
<div class="message message-danger"  > danger </div>
<div class="message message-alt"     > alternative </div>
<div class="message message-inverse" > inverse </div>
') ?>
</div>  
        </section>
        </div>
    </div>
</div>
<?php include('inc/foot.php') ?>