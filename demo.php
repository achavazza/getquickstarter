<?php include('inc/head.php') ?>
<section class="section grid">
	<h2 class="h1 title">Quads</h2>
    <div class="row">
        <div class="quad-1">
            <span class="bg-grid">
                .quad-1
            </span>
        </div>
        <div class="quad-1">
            <span class="bg-grid">
                .quad-1
            </span>
        </div>
        <div class="quad-1">
            <span class="bg-grid">
                .quad-1
            </span>
        </div>
        <div class="quad-1">
            <span class="bg-grid">
                .quad-1
            </span>
        </div>
    </div>
    <div class="row">
        <div class="quad-2">
            <span class="bg-grid">
                .quad-2
            </span>
        </div>
        <div class="quad-2">
            <span class="bg-grid">
                .quad-2
            </span>
        </div>
    </div>
    <div class="row">
        <div class="quad-3">
            <span class="bg-grid">
                .quad-3
            </span>
        </div>
        <div class="quad-1">
            <span class="bg-grid">
                .quad-1
            </span>
        </div>
    </div>
    <div class="row">
        <div class="quad-4">
            <span class="bg-grid">
                .quad-4
            </span>
        </div>
    </div>
    <div class="row">
        <div class="quad-1">
            <span class="bg-grid">
                .quad-1
            </span>
        </div>
        <div class="quad-1 prefix-1 suffix-2">
            <span class="bg-grid">
                .quad-1 prefix-1
            </span>
        </div>
        <div class="quad-1 prefix-2 suffix-1">
            <span class="bg-grid">
                .quad-1 prefix-2
            </span>
        </div>
        <div class="quad-1 prefix-3">
            <span class="bg-grid">
                .quad-1 prefix-3
            </span>
        </div>
    </div>
    <div class="row">
        <div class="triad-1">
            <span class="bg-grid">
                .triad-1
            </span>
        </div>
        <div class="triad-1">
            <span class="bg-grid">
                .triad-1
            </span>
        </div>
        <div class="triad-1">
            <span class="bg-grid">
                .triad-1
            </span>
        </div>
    </div>
    <div class="row">
        <div class="triad-2">
            <span class="bg-grid">
                .triad-2
            </span>
        </div>
        <div class="triad-1">
            <span class="bg-grid">
                .triad-1
            </span>
        </div>
    </div>
    <div class="row">
        <div class="triad-3">
            <span class="bg-grid">
                .triad-3
            </span>
        </div>
    </div>
    <div class="row">
        <div class="triad-1">
            <span class="bg-grid">
                .triad-1
            </span>
        </div>
        <div class="triad-1 prefix-1 suffix-2">
            <span class="bg-grid">
                .triad-1 prefix-1
            </span>
        </div>
        <div class="triad-1 prefix-2 suffix-1">
            <span class="bg-grid">
                .triad-1 prefix-2
            </span>
        </div>
    </div>
</section>
<section class="section grid">
    <h2 class="h1 title">Nesting</h2>
    <div class="row">
        <div class="quad-4">
            <div class="nesting">
                <span class="bg-grid">
                    .quad-4
                </span>
                <div class="row">
                    <div class="quad-2">
                        <div class="nesting">
                            <span class="bg-grid">
                                .quad-2
                            </span>
                            <div class="row">
                                <div class="quad-2">
                                    <span class="bg-grid">
                                        .quad-2
                                    </span>
                                </div>
                                <div class="quad-2">
                                    <span class="bg-grid">
                                        .quad-2
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quad-2">
                        <div class="nesting">
                            <span class="bg-grid">
                                .quad-2
                            </span>
                            <div class="row">
                                <div class="triad-1">
                                    <span class="bg-grid">
                                        .triad-1
                                    </span>
                                </div>
                                <div class="triad-1">
                                    <span class="bg-grid">
                                        .triad-1
                                    </span>
                                </div>
                                <div class="triad-1">
                                    <span class="bg-grid">
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
<section class="section grid">
    <h2 class="h1 title">Visible only</h2>
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
</section>
<section class="section grid">
    <h2 class="h1 title">Invisible only</h2>
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
</section>
<section class="section grid">
    <h2 class="h1 title">Visible From</h2>
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
</section>
<section class="section grid">
    <h2 class="h1 title">Invisible From</h2>
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
</section>
<section class="section grid">
    <h2 class="h1 title">Mutate</h2>
    <div class="row">
        <div class="quad-4 quad-2-md">
            <span class="bg-visible visible-md">
                .quad-2
            </span>
            <span class="bg-visible invisible-md">
                .quad-4
            </span>
        </div>
        <div class="quad-4 quad-2-md">
            <span class="bg-visible visible-md">
                .quad-2
            </span>
            <span class="bg-visible invisible-md">
                .quad-4
            </span>
        </div>
    </div>
</section>
<?php include('inc/foot.php') ?>