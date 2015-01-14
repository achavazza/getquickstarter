<?php include('inc/head.php') ?>
<?php include('inc/top-bar.php') ?>
<div class="grid">
    <div class="row">
        <div id="sidebar" class="quad-1">
            <ul class="stack">
                <li><a href="#tools">Tools</a></li>
                <li><a href="#display">Display</a></li>
                <li><a href="#position">Position</a></li>
                <li><a href="#margins">Margins</a></li>
                <li><a href="#width">Width</a></li>
                <li><a href="#text">Text</a></li>
                <li><a href="#screen-readers">Screen Readers</a></li>
            </ul>
        </div>
        <div class="quad-3">
            <section id="tools">
            <h2 class="h1 title">Tools</h2>
            <p>
                <code>_toolbox.less</code> includes a set of useful tools that you can use on most cases
            </p>
            <table class="table table-stripped">
                <tr>
                    <th>Tool</th>
                    <th>Property</th>
                    <th>Function</th>
                </tr>
                <tr>
                    <td><code>.float-left</code></td>
                    <td>float: left;</td>
                    <td>Floats elements to the left</td>
                </tr>
                <tr>
                    <td><code>.float-right</code></td>
                    <td>float: right;</td>
                    <td>Floats elements to the right</td>
                </tr>
                <tr>
                    <td><code>.float-none</code></td>
                    <td>float: none;</td>
                    <td>Remove floats</td>
                </tr>
                <tr>
                    <td><code>.clear</code></td>
                    <td>clear: none;</td>
                    <td>Cleans both sides, making a separation from content</td>
                </tr>
                <tr>
                    <td><code>.overflow</code></td>
                    <td>overflow: hidden;</td>
                    <td>Wrap elements and givethem layout (better use .clearfix)</td>
                </tr>
                <tr>
                    <td><code>.clearfix</code></td>
                    <td>*</td>
                    <td>Wrap elements and give them layout</td>
                </tr>
            </table>
<div class="example">
<?php echo showCode('
<div class="clearfix">
    <div class="float-left" >...</div>
    <div class="float-right">...</div>
</div>
') ?>
</div>      
            </section>
            <section id="display">
                <h2 class="h2 title">Display</h2>
                <table class="table table-stripped">
                    <tr>
                        <th>Tool</th>
                        <th>Property</th>
                        <th>Function</th>
                    </tr>
                    <tr>
                        <td><code>.hide</code></td>
                        <td>display: none;</td>
                        <td>Hides the element</td>
                    </tr>
                    <tr>
                        <td><code>.show</code></td>
                        <td>display: block;</td>
                        <td>Shows the element</td>
                    </tr>
                </table>
            </section>
            <section id="position">
                <h2 class="h2 title">Position</h2>
                <table class="table table-stripped">
                    <tr>
                        <td><code>.relative</code></td>
                        <td>position: relative;</td>
                        <td>Use it as wrapper for absolute positioning</td>
                    </tr>
                </table>
            </section>
            <section id="margins">
                <h2 class="h2 title">Margins</h2>
                <table class="table table-stripped">
                    <tr>
                        <th>Tool</th>
                        <th>Property</th>
                        <th>Function</th>
                    </tr>
                    <tr>
                        <td><code>.no-top</code></td>
                        <td>margin-top: 0;</td>
                        <td>Removes the top margin of an element</td>
                    </tr>
                    <tr>
                        <td><code>.no-bottom</code></td>
                        <td>margin-bottom: 0;</td>
                        <td>Removes the bottom margin of an element</td>
                    </tr>
                </table>
            </section>
            <section id="width">
                <h2 class="h2 title">Width</h2>
                <table class="table table-stripped">
                    <tr>
                        <th>Tool</th>
                        <th>Property</th>
                        <th>Function</th>
                    </tr>
                    <tr>
                        <td><code>.fit-width</code></td>
                        <td>width: 100%;</td>
                        <td>Forces the width to all the container</td>
                    </tr>
                </table>
            </section>
            <section id="text">
                <h2 class="h2 title">Text</h2>
                <table class="table table-stripped">
                    <tr>
                        <th>Tool</th>
                        <th>Property</th>
                        <th>Function</th>
                    </tr>
                    <tr>
                        <td><code>.align-left</code></td>
                        <td>text-align: left;</td>
                        <td>Aligns the text on left</td>
                    </tr>
                    <tr>
                        <td><code>.align-center</code></td>
                        <td>text-align: center;</td>
                        <td>Centers the text</td>
                    </tr>
                    <tr>
                        <td><code>.align-right</code></td>
                        <td>text-align: right;</td>
                        <td>Aligns the text on right</td>
                    </tr>
                    <tr>
                        <td><code>.align-top</code></td>
                        <td>text-align: top;</td>
                        <td>Aligns the text on top</td>
                    </tr>
                    <tr>
                        <td><code>.align-middle</code></td>
                        <td>text-align: middle;</td>
                        <td>Centers on the middle</td>
                    </tr>
                    <tr>
                        <td><code>.align-bottom</code></td>
                        <td>text-align: bottom;</td>
                        <td>Aligns the text on bottom</td>
                    </tr>
                    <tr>
                        <td><code>.uppercase</code></td>
                        <td>text-transform: uppercase;</td>
                        <td>Set text to uppercase</td>
                    </tr>
                    <tr>
                        <td><code>.lowercase</code></td>
                        <td>text-transform: lowercase;</td>
                        <td>Set text to lowercase</td>
                    </tr>
                    <tr>
                        <td><code>.normalcase</code></td>
                        <td>text-transform: normalcase;</td>
                        <td>Set text back to normal</td>
                    </tr>
                    <tr>
                        <td><code>.single-line</code></td>
                        <td>white-space: nowrap;</td>
                        <td>Forces text to avoid line breaks</td>
                    </tr>
                    <tr>
                        <td><code>.text-overflow</code></td>
                        <td>*</td>
                        <td>Cuts every word logner than the desired width and adds an ellipsis</td>
                    </tr>
                </table>
            </section>
            <section id="screen-readers">
                <h2 class="h2 title">Screen readers</h2>
                <table class="table table-stripped">
                    <tr>
                        <th>Tool</th>
                        <th>Property</th>
                        <th>Function</th>
                    </tr>
                    <tr>
                        <td><code>.sr-only</code></td>
                        <td>*</td>
                        <td>Hides the element, only will display on a screen reader</td>
                    </tr>
                    <tr>
                        <td><code>.sr-only-focusable</code></td>
                        <td>*</td>
                        <td>use with <code>.sr-only</code>, Shows the element only when focused</td>
                    </tr>
                </table>
            </section>
        </div>
    </div>
</div>
<?php include('inc/foot.php') ?>