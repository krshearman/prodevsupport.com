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
                                <button type="button" class="btn btn-outline-dark mybtngroup"><a href="<?php echo base_url(); ?>mainblog">BLOG</a></button>
                                <!--<button type="button" class="btn btn-dark">Search</button>
                                <button type="button" class="btn btn-dark">Index</button>-->
                            </div>
                            <!--<div class="dropdown-menu d-block position-static border-0 pt-0 mx-0 rounded-3 shadow overflow-hidden w-280px" data-bs-theme="dark">
                                <form class="p-2 mb-2 bg-dark border-bottom border-dark">
                                    <input type="search" class="form-control bg-dark" autocomplete="false" placeholder="Type to filter...">
                                </form>
                                <ul class="list-unstyled mb-0">
                                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?php echo base_url(); ?>writing">
                                            <ion-icon name="document-text-outline" size="small"></ion-icon>About
                                        </a></li>
                                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href=""<?php echo base_url(); ?>writingabout"">
                                            <ion-icon name="document-text-outline" size="small"></ion-icon>Intro
                                        </a></li>
                                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?php echo base_url(); ?>dita">
                                            <ion-icon name="document-text-outline" size="small"></ion-icon>DITA
                                        </a></li>
                                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?php echo base_url(); ?>docbook">
                                            <ion-icon name="document-text-outline" size="small"></ion-icon>DocBook
                                        </a></li>
                                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?php echo base_url(); ?>mainblog">
                                            <ion-icon name="document-text-outline" size="small"></ion-icon>Blog
                                        </a></li>

                                </ul>
                            </div>-->
                        </div>
                        <div class="col-md-7 colpadding">
                            <div class="title-box-2">
                                <h3 class="title-a">Blog</h3>
                            </div>
                            <p class="lead">
                                Welcome! Below you will see the last five blog posts displayed in reverse chronological order.
                            </p>
                            <br>
                            <main role="main" class="lead">
                                <article role="article" aria-labelledby="ariaid-title1">
                                    <?php if($news): ?>
                                        <?php foreach ($news as $newsitem): ?>
                                            <h3><?= $newsitem['title'] ?></h3>
                                            <div class="lead"><?= $newsitem['body']?></div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p>No posts to display</p>
                                    <?php endif; ?>
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
                                        <?php foreach ($news as $newsitem): ?>
                                            <li><a href="<?php echo base_url(); ?>blog?name=<?=$newsitem['slug'] ?>"><?= $newsitem['title'] ?></a></li>
                                        <?php endforeach; ?>
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




