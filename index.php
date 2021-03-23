<?php get_header(); ?>

<body>
    <main>
        <div class="container-fluid">
            <div class="carousel-constraint">
                <div id="moviesCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                    </div>

                    <a class="carousel-control-prev" href="#moviesCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#moviesCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container-fluid about">
            <div class="container">
                <div class="row">
                    <div class="col-12 about-title">
                        <h2><?php bloginfo('name'); ?></h2>
                    </div>
                    <div class="col-12 about-text">
                        <?php echo get_field('studio_description'); ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="movieIdContainer" class="d-none">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <span id="movieId"><?php the_field('movie_id'); ?></span>

                <?php endwhile;
            else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>

        <div class="container movie-list">
            <div class="row">
                <div class="col-12">
                    <h2>Filmes</h2>
                </div>
            </div>

            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 p-4 movie-grid" id="movieGrid"></div>

            <div class="modal fade" id="movieModal" tabindex="-1" aria-labelledby="movieModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="movieModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <!-- <div class="modal-footer">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>

</body>

</html>