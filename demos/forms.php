<?php include ('../inc/functions.php') ?>
<?php print render('../inc/head.php', $baseUrl,
             array('title' => 'Documentación - ')); ?>
<?php //include('../inc/head.php'); ?>
<body>
    <?php include("../inc/analytics.php") ?>
    <?php include('../inc/top-bar.php'); ?>
    <div class="jumbotron">
        <div class="grid">
            <div class="row">
                <div class="quad-4">
                    <h1 class="h1 headcase uppercase">Grid</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
    <div class="grid">
        <div class="row">
            <div class="quad-1 relative">
                <div>
                    <ul class="menu-list">
                        <li class="mark" ><a href="#a-quads">¿Qué son los Quads?</a></li>
                        <li class="mark" ><a href="#a-htmlbasico">HTML Básico</a></li>
                        <li><a href="#a-anidado">Anidado</a></li>
                        <li><a href="#a-prefixsuffix">Prefix / Suffix</a></li>
                        <li><a href="#a-pushpull">Push / Pull</a></li>
                    </ul>
                </div>
            </div>
            <div class="quad-3">
                <div class="box">
                    <h2 class="box-head">head</h2>
                    <div class="box-content">
                        <p>
                            Para empezar cabe aclarar que <strong>Quads es una palabra de fantasía</strong> para describir el trabajo en columnas de a cuartos.
                            Quad significa <strong>una de cuatro partes</strong>, evitando la posible confusión si se mencionaran porcentajes (Ej: .grid-25) .
                            <br>
                            <br>
                            Por otro lado hablamos de Quads como un sistema de Grids.
                        </p>
                    </div>
                </div>
                <section class="first">
                    <a id="a-quads" class="anchor"></a>
                    <h2 class="h1 headcase title title-border">¿Qué son los Quads?</h2>
                    <p>
                        Para empezar cabe aclarar que <strong>Quads es una palabra de fantasía</strong> para describir el trabajo en columnas de a cuartos.
                        Quad significa <strong>una de cuatro partes</strong>, evitando la posible confusión si se mencionaran porcentajes (Ej: .grid-25) .
                        <br />
                        <br />
                        Por otro lado hablamos de Quads como un sistema de Grids.
                    </p>
                </section>
                <section>
                    <h2 class="h1 headcase title title-border">Form</h2>
                    <div class="row">
                        <div class="quad-4">
                            <div class="form form-horizontal">
                                <?php include('../inc/formfields.php') ?>
                            </div>
                        </div>
                        <div class="quad-2">

                        </div>
                    </div>
                </section>
                <section>
                    <h2 class="h1 headcase title title-border">Form Fit</h2>
                    <div class="form form-fit">
                        <?php include('../inc/formfields.php') ?>
                    </div>
                </section>
                <section>
                    <h2 class="h1 headcase title title-border">Form Horizontal</h2>
                    <div class="form form-horizontal">
                        <?php //include('../inc/formfields.php') ?>
                        <?php include('../inc/extendedfields.php') ?>
                    </div>
                    <div class="input">
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
    <div class="resizeme">&nbsp;</div>
    <?php include('../inc/footer.php') ?>
</body>
</html>