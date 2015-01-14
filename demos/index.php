<?php 
    include('../inc/functions.php')
?>
<?php print render('../inc/demohead.php', $baseUrl, 
             array('title' => 'Demo - ')); ?>
<body>
    <div class="grid debug">
        <section>
            <div class="row">
                <div class="quad-1">
                    <span>
                        .quad-1
                    </span>
                </div>
                <div class="quad-1">
                    <span>
                        .quad-1
                    </span>
                </div>
                <div class="quad-1">
                    <span>
                        .quad-1
                    </span>
                </div>
                <div class="quad-1">
                    <span>
                        .quad-1
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="quad-2">
                    <span>
                        .quad-2
                    </span>
                </div>
                <div class="quad-2">
                    <span>
                        .quad-2
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="quad-3">
                    <span>
                        .quad-3
                    </span>
                </div>
                <div class="quad-1">
                    <span>
                        .quad-1
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="quad-4">
                    <span>
                        .quad-4
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="quad-1">
                    <span>
                        .quad-1
                    </span>
                </div>
                <div class="quad-1 prefix-1 suffix-2">
                    <span>
                        .quad-1 prefix-1
                    </span>
                </div>
                <div class="quad-1 prefix-2 suffix-1">
                    <span>
                        .quad-1 prefix-2
                    </span>
                </div>
                <div class="quad-1 prefix-3">
                    <span>
                        .quad-1 prefix-3
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="triad-1">
                    <span>
                        .triad-1
                    </span>
                </div>
                <div class="triad-1">
                    <span>
                        .triad-1
                    </span>
                </div>
                <div class="triad-1">
                    <span>
                        .triad-1
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="triad-2">
                    <span>
                        .triad-2
                    </span>
                </div>
                <div class="triad-1">
                    <span>
                        .triad-1
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="triad-3">
                    <span>
                        .triad-3
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="triad-1">
                    <span>
                        .triad-1
                    </span>
                </div>
                <div class="triad-1 prefix-1 suffix-2">
                    <span>
                        .triad-1 prefix-1
                    </span>
                </div>
                <div class="triad-1 prefix-2 suffix-1">
                    <span>
                        .triad-1 prefix-2
                    </span>
                </div>
            </div>
        </section>
        <section>
            <h2 class="h1">Anidado</h2>
            <div class="row">
                <div class="quad-4">
                    <div class="nest">
                        <span>
                            .quad-4
                        </span>
                        <div class="row">
                            <div class="quad-2">
                                <div class="nest">
                                    <span>
                                        .quad-2
                                    </span>
                                    <div class="row">
                                        <div class="quad-2">
                                            <span>
                                                .quad-2
                                            </span>
                                        </div>
                                        <div class="quad-2">
                                            <span>
                                                .quad-2
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="quad-2">
                                <div class="nest">
                                    <span>
                                        .quad-2
                                    </span>
                                    <div class="row">
                                        <div class="triad-1">
                                            <span>
                                                .triad-1
                                            </span>
                                        </div>
                                        <div class="triad-1">
                                            <span>
                                                .triad-1
                                            </span>
                                        </div>
                                        <div class="triad-1">
                                            <span>
                                                .triad-1
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2 class="h1">Visible only</h2>
            <div class="row">
                <div class="quad-4">
                    <div class="row">
                        <div class="quad-4 visible-only-lg">
                            <div class="block-div block-visible">
                                &#10003; Desktop
                            </div>
                        </div>
                        <div class="quad-4 visible-only-md">
                            <div class="block-div block-visible">
                                &#10003; Landscape
                            </div>
                        </div>
                        <div class="quad-4 visible-only-sm">
                            <div class="block-div block-visible">
                                &#10003; Portrait
                            </div>
                        </div>
                        <div class="quad-4 visible-only">
                            <div class="block-div block-visible">
                                &#10003; Mobile
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2 class="h1">Invisible only</h2>
            <div class="row">
                <div class="quad-4">
                    <div class="row">
                        <div class="quad-4 invisible-only-lg">
                            <div class="block-div block-visible">
                                &#10003; Desktop
                            </div>
                        </div>
                        <div class="quad-4 invisible-only-md">
                            <div class="block-div block-visible">
                                &#10003; Landscape
                            </div>
                        </div>
                        <div class="quad-4 invisible-only-sm">
                            <div class="block-div block-visible">
                                &#10003; Portrait
                            </div>
                        </div>
                        <div class="quad-4 invisible-only">
                            <div class="block-div block-visible">
                                &#10003; Mobile
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2 class="h1">Visible From</h2>
            <div class="row">
                <div class="quad-4">
                    <div class="row">
                        <div class="quad-4 visible-lg">
                            <div class="block-div block-visible">
                                &#10003; Desktop
                            </div>
                        </div>
                        <div class="quad-4 visible-md">
                            <div class="block-div block-visible">
                                &#10003; Landscape
                            </div>
                        </div>
                        <div class="quad-4 visible-sm">
                            <div class="block-div block-visible">
                                &#10003; Portrait
                            </div>
                        </div>
                        <div class="quad-4 visible">
                            <div class="block-div block-visible">
                                &#10003; Mobile
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2 class="h1">Invisible From</h2>
            <div class="row">
                <div class="quad-4">
                    <div class="row">
                        <div class="quad-4 invisible-lg">
                            <div class="block-div block-visible">
                                &#10003; Desktop
                            </div>
                        </div>
                        <div class="quad-4 invisible-md">
                            <div class="block-div block-visible">
                                &#10003; Landscape
                            </div>
                        </div>
                        <div class="quad-4 invisible-sm">
                            <div class="block-div block-visible">
                                &#10003; Portrait
                            </div>
                        </div>
                        <div class="quad-4 invisible">
                            <div class="block-div block-visible">
                                &#10003; Mobile
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2 class="h1">Mutate</h2>
            <div class="row">
                <div class="quad-2 quad-4-sm">
                    <span class="visible-md">
                        .quad-2
                    </span>
                    <span class="invisible-md">
                        .quad-4
                    </span>
                </div>
                <div class="quad-2 quad-4-sm">
                    <span class="visible-md">
                        .quad-2
                    </span>
                    <span class="invisible-md">
                        .quad-4
                    </span>
                </div>
            </div>
        </section>
    </div>
</body>
</html>