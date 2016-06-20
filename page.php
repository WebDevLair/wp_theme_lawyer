<?php
/*
Template Name: Page
*/

get_header(); ?>

    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">

                        <!-- миниатюра -->
                        <div class="col-sm-3">
                            <?php
                                echo get_the_post_thumbnail()
                            ?>
                        </div>

                        <!-- текст -->
                        <div class="col-sm-9">
                            <div class="main-heading">
                                <h2><?php the_title(); ?></h2>
                            </div>

                            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                                <?php the_content(); ?>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>