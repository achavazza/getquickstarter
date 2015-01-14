<?php include('inc/head.php') ?>
<?php include('inc/top-bar.php') ?>
<div class="grid">
    <div class="row">
        <div id="sidebar" class="quad-1">
            <ul class="stack">
                <li><a href="#forms">Forms</a></li>
                <li><a href="#form">Form</a></li>
                <li><a href="#form-horizontal">Form Horizontal</a></li>
                <li><a href="#input-append">Input append</a></li>
            </ul>
        </div>
        <div class="quad-3">
            <section id="forms">
                <h2 class="h1 title">Forms</h2>
                <p>
                    Some basic styling for forms
                </p>
                <a class="btn btn-primary" target="_blank" href="#">See full standalone example</a>
            </section>
            <section id="form">
                <h3 class="h2 title">Form</h3>
                <p>
                    Default form styiling. Add <code>.form</code> to the <code>&lt;form&gt;</code> tag  or the container <code>&lt;div&gt;</code>
                </p>
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <div class="form">
        <?php include('inc/simplefields.php') ?>
    </div>
</div>
<?php 
$form = file_get_contents('inc/simplefields.php');
echo showCode('<div class="form">
'.$form.'</div>') ?>
</div>  
        </section>
        <section id="form-horizontal">
            <h2 class="h1 title">Form Horizontal</h2>
            <p>
                Default form styiling. Add <code>.form .form-horizontal</code> to the <code>&lt;form&gt;</code> tag or the container <code>&lt;div&gt;</code>
            </p>
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <div class="form form-horizontal">
        <?php include('inc/simplefields.php') ?>
    </div>
</div>
<?php 
$form = file_get_contents('inc/simplefields.php');
echo showCode('<div class="form form-horizontal">
'.$form.'</div>') ?>
</div>  
        </section>
        <section id="input-append">
            <h2 class="h2 title">Input append</h2>
            <p>
                An input with some element in the same row
            </p>
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <div class="form form-horizontal">
        <div class="input">
        <label>Label</label>
        <div class="input-append">
            <a href="#" class="add-on label">$</a>
            <input type="text" placeholder="Placeholder" />
            <a href="#" class="add-on btn btn-primary">Search</a>
        </div>
    </div>
    </div>
</div>
<?php 
$form = file_get_contents('inc/simplefields.php');
echo showCode('<div class="form form-horizontal">
    <div class="input">
        <label>Label</label>
        <div class="input-append">
            <a href="#" class="add-on label">$</a>
            <input type="text" placeholder="Placeholder" />
            <a href="#" class="add-on btn btn-primary">Search</a>
        </div>
    </div>
</div>') ?>
</div>  
        </section>
        </div>
    </div>
</div>
<?php include('inc/foot.php') ?>