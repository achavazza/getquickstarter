<?php include('inc/head.php') ?>
<?php include('inc/top-bar.php') ?>
<div class="grid">
    <div class="row">
        <div id="sidebar" class="quad-1">
            <ul class="stack">
                <li><a href="#titling">Titling</a></li>
                <li>
                    <a href="#lists">Lists</a>
                    <ul>
                        <li><a href="#ordered-unordered">Ordered & unordered</a></li>
                        <li><a href="#definition">Definition</a></li>
                    </ul>
                </li>
                <li><a href="#tables">Tables</a></li>
            </ul>
        </div>
        <div class="quad-3">
            <section id="titling">
            <h2 class="h1 title">Titling</h2>
            <p>
                Add titling styles, just add <code>.h1</code>, <code>.h2</code>, <code>.h3</code>, <code>.h3</code>, <code>.h4</code>, <code>.h5</code> to any element
            </p>
            <blockquote>
                We do this for SEO reasons, someteimes you need a minimal <code>&lt;h1&gt;</code> and a big bold text like a title, but it's a <code>&lt;span&gt;</code>
            </blockquote>
                
<h4 class="h4 title">Example</h4>
<div class="example">
<div class="samp">
    <h1>This is a unstyled h1</h1>
    <span class="h1">Heading 1</span>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <span class="h2">Heading 2</span>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <span class="h3">Heading 3</span>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <span class="h4">Heading 4</span>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <span class="h5">Heading 5</span>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>
<?php 
echo showCode('
<h1>This is a unstyled h1</h1>
<span class="h1">Heading 1</span>
<p>...</p>
<span class="h2">Heading 2</span>
<p>...</p>
<span class="h3">Heading 3</span>
<p>...</p>
<span class="h4">Heading 4</span>
<p>...</p>
<span class="h5">Heading 5</span>
<p>...</p>
') ?>
</div>  
            </section>
            <section id="lists">
                <h2 class="h2 title">Lists</h2>
                <section id="ordered-unordered">
                    <h3 class="h2 title">Ordered & Unordered</h3>
                    <p>
                        Just because you will often use ordered & unordered lists for navigation purposes, they are reseted, but, if you want a explicit list, just add a <code>.list</code> to their parent
                    </p>
                
<h4 class="h4 title">Example - unstyled</h4>
<div class="example">
<div class="samp">
    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3
            <ul>
                <li>Item 1.1</li>
                <li>Item 1.2</li>
                <li>Item 1.3
                    <ul>
                        <li>Item 1.1.1</li>
                        <li>Item 1.1.2</li>
                        <li>Item 1.1.3</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
<?php 
echo showCode('
<ul>
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3
        <ul>
            <li>Item 1.1</li>
            <li>Item 1.2</li>
            <li>Item 1.3
                <ul>
                    <li>Item 1.1.1</li>
                    <li>Item 1.1.2</li>
                    <li>Item 1.1.3</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
') ?>
</div>
<div class="row">
    <div class="quad-2">
<h4 class="h4 title">Example - unordered list</h4>
<div class="example">
<div class="samp">
    <ul class="list">
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3
            <ul>
                <li>Item 1.1</li>
                <li>Item 1.2</li>
                <li>Item 1.3
                    <ul>
                        <li>Item 1.1.1</li>
                        <li>Item 1.1.2</li>
                        <li>Item 1.1.3</li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
<?php 
echo showCode('
<ul class="list">
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3
        <ul>
            <li>Item 1.1</li>
            <li>Item 1.2</li>
            <li>Item 1.3
                <ul>
                    <li>Item 1.1.1</li>
                    <li>Item 1.1.2</li>
                    <li>Item 1.1.3</li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
') ?>
</div>  
    </div>  
    <div class="quad-2">
<h4 class="h4 title">Example - ordered list</h4>
<div class="example">
<div class="samp">
    <ol class="list">
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3
            <ol>
                <li>Item 1.1</li>
                <li>Item 1.2</li>
                <li>Item 1.3
                    <ol>
                        <li>Item 1.1.1</li>
                        <li>Item 1.1.2</li>
                        <li>Item 1.1.3</li>
                    </ol>
                </li>
            </ol>
        </li>
    </ol>
</div>
<?php 
echo showCode('
<ol class="list">
    <li>Item 1</li>
    <li>Item 2</li>
    <li>Item 3
        <ol>
            <li>Item 1.1</li>
            <li>Item 1.2</li>
            <li>Item 1.3
                <ol>
                    <li>Item 1.1.1</li>
                    <li>Item 1.1.2</li>
                    <li>Item 1.1.3</li>
                </ol>
            </li>
        </ol>
    </li>
</ol>
') ?>
</div>  
    </div>  
</div>  
        </section>
        <section id="definition">
            <h3 class="h2 title">Definition lists</h3>
            <p>
                Definition lists are useful for displaying data, a label an their value, to style them just add <code>.dl-list</code> or <code>.dl-vertical</code> or if you want <code>.dl-horizontal</code> they will fit the same values with <code>.form form-horizontal</code>
            </p>
                
<h4 class="h4 title">Example - unstyled</h4>
<div class="example">
<div class="samp">
    <dl>
        <dt>definition</dt>
        <dd>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </dd>
        <dt>definition</dt>
        <dd>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </dd>
        <dt>definition</dt>
        <dd>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </dd>
    </dl>
</div>
<?php 
echo showCode('
<dl>
    <dt>definition</dt>
    <dd>...</dd>
    <dt>definition</dt>
    <dd>...</dd>
    <dt>definition</dt>
    <dd>...</dd>
</dl>
') ?>
</div>
<div class="row">
    <div class="quad-2">
<h4 class="h4 title">Example - list</h4>
<div class="example">
<div class="samp">
    <dl class="dl-list">
        <dt>definition</dt>
        <dd>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </dd>
        <dt>definition</dt>
        <dd>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </dd>
        <dt>definition</dt>
        <dd>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </dd>
    </dl>
</div>
<?php 
echo showCode('
<dl class="dl-list">
    <dt>definition</dt>
    <dd>...</dd>
    <dt>definition</dt>
    <dd>...</dd>
    <dt>definition</dt>
    <dd>...</dd>
</dl>
') ?>
</div>  
    </div>  
    <div class="quad-2">
<h4 class="h4 title">Example - list horizontal</h4>
<div class="example">
<div class="samp">
    <dl class="dl-horizontal">
        <dt>definition</dt>
        <dd>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </dd>
        <dt>definition</dt>
        <dd>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </dd>
        <dt>definition</dt>
        <dd>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
        </dd>
    </dl>
</div>
<?php 
echo showCode('
<dl class="dl-horizontal">
    <dt>definition</dt>
    <dd>...</dd>
    <dt>definition</dt>
    <dd>...</dd>
    <dt>definition</dt>
    <dd>...</dd>
</dl>
') ?>
</div>  
    </div>  
</div>  
                </section>
            </section>
            <section id="tables">
            <h2 class="h1 title">Tables</h2>
            <p>
                Add basic styles to a table just add <code>.table</code> if you want zebra strips, add <code>.table .table-stripped</code> and/or bordered <code>.table .table-bordered</code>
            </p>
            <blockquote>
                This is just basic styling, most of the time, table styles depends on the theme, so it's up to you to style them in the proper way
            </blockquote>
            <blockquote>
                Stripped may not work on IE8, because lacks the pseudoelement <code>:nth-child(odd)</code>
            </blockquote>
                
<h4 class="h4 title">Example - Default</h4>
<div class="example">
<div class="samp">
    <table class="table">
        <tr>
            <th>head</th>
            <th>head</th>
            <th>head</th>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
    </table>
</div>
<?php 
echo showCode('
    <table class="table">
        <tr>
            <th>head</th>
            <th>head</th>
            <th>head</th>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
    </table>
') ?>
</div>  
<h4 class="h4 title">Example - Stripped</h4>
<div class="example">
<div class="samp">
    <table class="table table-stripped">
        <tr>
            <th>head</th>
            <th>head</th>
            <th>head</th>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
    </table>
</div>
<?php 
echo showCode('
    <table class="table table-stripped">
        <tr>
            <th>head</th>
            <th>head</th>
            <th>head</th>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
    </table>
') ?>
</div>  
<h4 class="h4 title">Example - Bordered & Stripped</h4>
<div class="example">
<div class="samp">
    <table class="table table-bordered table-stripped">
        <tr>
            <th>head</th>
            <th>head</th>
            <th>head</th>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
    </table>
</div>
<?php 
echo showCode('
    <table class="table table-bordered table-stripped">
        <tr>
            <th>head</th>
            <th>head</th>
            <th>head</th>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
        <tr>
            <td>cell</td>
            <td>cell</td>
            <td>cell</td>
        </tr>
    </table>
') ?>
</div>  
            </section>

        </div>
    </div>
</div>
<?php include('inc/foot.php') ?>