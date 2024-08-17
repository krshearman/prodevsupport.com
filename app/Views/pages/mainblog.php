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
                            <!-- spacing -->
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




