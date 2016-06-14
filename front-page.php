<?php get_header(); ?>

    <!-- slide -->
    <section class="slide">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="slide__title">Иванов Иван</h1>
                    <h3 class="slide__sub-title">Частный юрист</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- services block -->
    <section class="services-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                </div>

                <div class="col-sm-4">

                </div>

                <div class="col-sm-4">

                </div>
            </div>
        </div>
    </section>

    <!-- posts -->
    <section>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>