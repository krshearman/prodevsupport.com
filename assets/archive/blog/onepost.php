<body xmlns="http://www.w3.org/1999/html" id="navigatingthelandscapeofcomponentcontentmanagementsystemswithquark">
<!--<main id="main">
-->
<!-- ======= About Section ======= -->
<section id="about" class="about-mf sect-pt4 route myabout">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-2 colpadding">
                            <div class="btn-group-vertical" role="group" aria-label="">
                                <button type="button" class="btn btn-outline-dark mybtngroup"><a href="<?php echo base_url(); ?>writing">ABOUT</a></button>
                                <button type="button" class="btn btn-outline-dark mybtngroup"><a href="<?php echo base_url(); ?>writingabout">INTRO</a></button>
                                <!--                                    <button type="button" class="btn btn-dark">Samples</button>
                                -->                                    <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-dark mybtngroup dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        SAMPLES
                                    </button>
                                    <ul class="dropdown-menu mybtngroup" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>dita">DITA</a></li>
                                        <li><a class="dropdown-item" href="<?php echo base_url(); ?>docbook">DocBook</a></li>
                                        <!--<li><a class="dropdown-item" href="<?php echo base_url(); ?>epub">ePub</a></li>-->
                                        <!--<li><a class="dropdown-item" href="#">TEI</a></li>
                                        <li><a class="dropdown-item" href="#">OpenAPI</a></li>-->
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-outline-dark mybtngroup"><a href="<?php echo base_url(); ?>blog">BLOG</a></button>
                                <!--<button type="button" class="btn btn-dark">Search</button>
                                <button type="button" class="btn btn-dark">Index</button>-->

                            </div>
                        </div>
                        <div class="col-md-7 colpadding">
                            <div class="title-box-2">
                                <h3 class="title-a">Blog</h3>
                            </div>
                            <main role="main" class="lead">
                                <article role="article" aria-labelledby="ariaid-title1">
                                    <?php echo "<pre>";
                                        print_r($post);
                                        echo "<pre>" ?>

                                </article>
                            </main>
                        </div>
                        <div class="col-md-3">
                            <div class="card cardwidget border-dark mb-3">
                                <!--<div class="card-header">
                                    Featured
                                </div>-->
                                <div class="card-body">
                                    <h4>Latest Posts</h4>
                                    <ul>
                                        <li>Post 1</li>
                                        <li>Post 2</li>
                                        <li>Post 3</li>
                                        <li>Post 4</li>
                                        <li>Post 5</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End About Section -->




