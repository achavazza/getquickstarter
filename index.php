<?php include('inc/head.php') ?>
<?php include('inc/top-bar.php') ?>
<?php /* 
<header id="header">
    <ul class="flush">
        <li><a href="#">Intro</a></li>
        <li><a href="#">Grid</a></li>
        <li><a href="#">Toolbox</a></li>
        <li><a href="#">Responsive</a></li>
        <li><a href="#">Forms</a></li>
        <li><a href="#">Buttons</a></li>
        <li><a href="#">Base</a></li>
        <li>
            <div id="search" class="form">
                <input id="s" type="text" placeholder="Search..." />
                <ul class="results">
                    <li><a href="#1">India</a></li>
                    <li><a href="#2">United States</a></li>
                    <li><a href="#3">Pakistan</a></li>
                    <li><a href="#4">Sri Lanka</a></li>
                    <li><a href="#5">Bangladesh</a></li>
                    <li><a href="#6">Canada</a></li>
                    <li><a href="#7">United Kingdom</a></li>
                    <li><a href="#8">Australia</a></li>
                    <li><a href="#9">Argentina</a></li>
                </ul>
            </div>
        </li>
    </ul>
</header>
*/ ?>
<div class="jumbotron" id="jumbotron">
    <div class="jumbo-content grid">
        <div class="row">
            <div class="triad-3">
                <div class="logo align-center">
                    <img src="img/logo.png" alt="Quickstarter" />
                </div>
                <h3 class="h3 title align-center">
                    A lightweight, Responsive, Mobile&dash;first, & Style&dash;Agnostic CSS Boilerplate/Framework
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="triad-1 align-center">
                <a href="https://github.com/achavazza/quickstarter/archive/master.zip" class="btn btn-hollow btn-block uppercase">
                    Download .zip
                </a>
            </div>
            <div class="triad-1 align-center">
                <a href="https://github.com/achavazza/quickstarter" class="btn btn-hollow btn-block uppercase" target="_blank">
                    View on Github
                </a>
            </div>
            <div class="triad-1 align-center">
                <a href="/docs.php" class="btn btn-hollow btn-block uppercase">
                    See documentation
                </a>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="grid">
    <section class="row">
        <div class="triad-1">
            <h2 class="h2 title">What's inside the box?</h2>
            <p>
                Quickstarter contains a basic HTML, a grid, some styles to wrap forms, and a bunch of tools
            </p>
            <p>
                All compiled & minimized in a file <b>less than 30kb!</b>
            </p>
            <p>
                Quickstarter is a tool for begin your proyect, we not define how it will look. 
                It's higly flexible & customizable, but you ALWAYS have the last word.
            </p>
            <?php /* 
            <div class="files">
                <ul class="list">
                    <li>lib/
                        <ul>
                            <li>_mixins.less</li>
                            <li>_normalize.less</li>
                            <li>_responsive.less</li>
                            <li>_flush.less</li>
                            <li>_media.less</li>
                            <li>_forms.less</li>
                            <li>_buttons.less</li>
                            <li>_toolbox.less</li>
                        </ul>
                    </li>
                    <li>theme/
                        <ul>
                            <li>_base.less</li>
                            <li>_style.less</li>
                        </ul>
                    </li>
                </ul>
            </div>
            */ ?>
        </div>
        <div class="triad-1">
            <h3 class="h2 title">The Grid</h3>
            <p>
                First we need to understand the concept of mobile&dash;first. That means we design to mobile on the first place and then progressively enhance to Desktop
            </p>
            <blockquote class="align-center">
                Mobile > Tablet > Landscape > Desktop
            </blockquote>
            <p>
                Quickstarter comes with 2 types of grid, that you could mix. Quads & Triads, that means 4 & 3 columns respectively and they are infinitely nesteable
            </p>
        </div>
        <div class="triad-1">
            <h3 class="h2 title">Forms</h3>
            <p>
                Forms are the most annoying part of the front&dash;end. We provide some basic tools to help you with that
            </p>
        </div>
        <div class="triad-1">
            <h3 class="h2 title">Toolbox</h3>
            <p>
                Sometimes we need some basic stuff to do the THING. We provide that
            </p>
        </div>
    </section>
</div>
<?php /* 
<body>
    <div class="jumbotron">
        <div class="grid">
            <div class="row">
                <div class="triad-3">
                    <div class="logo"></div>
                    <h3 class="h3 title align-center">
                        A lightweight Mobile&dash;first, Responsive, & Style&dash;Agnostic CSS Boilerplate/Framework
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="triad-1 align-center">
                    <a href="https://github.com/achavazza/quickstarter/archive/master.zip" class="btn btn-hollow btn-block uppercase">
                        Download .zip
                    </a>
                </div>
                <div class="triad-1 align-center">
                    <a href="https://github.com/achavazza/quickstarter" class="btn btn-hollow btn-block uppercase" target="_blank">
                        View on Github
                    </a>
                </div>
                <div class="triad-1 align-center">
                    <a href="#" class="btn btn-hollow btn-block uppercase">
                        See documentation
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="grid">
        <div class="row">
            <div class="triad-1">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="triad-1">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div class="triad-1">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.a
            </div>
        </div>
    </div>
</body>
*/ ?>
<?php include('inc/foot.php') ?>