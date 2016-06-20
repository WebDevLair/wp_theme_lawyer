<?php
/*
Template Name: Front Page
*/

get_header(); ?>

    <!-- slide -->
    <section class="slide">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-offset-3 col-md-6">
                    <h1 class="slide__title">Георгий Васильев</h1>
                    <h3 class="slide__sub-title">Частный юрист</h3>

                    <p class="slide__desc">Иван предоставляет полный спектр юридических услуг, включая
                        всеобъемлющую юридическую консультацию, защиту прав его клиентов
                        и представление их интересов в суде.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- services block -->
    <section class="services-block">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3 class="">25 лет в сфере юриспруденции</h3>

                    <p class="">Иван Иванов предоставляет полный спектр
                        юридических услуг с 1991 года</p>
                </div>

                <div class="col-sm-4">
                    <h3>Более 420 выигранных дел</h3>

                    <p class="">Иван Иванов имеет очень-очень-очень-очень
                        много выигранных дел. Он молодец! Иван! </p>
                </div>

                <div class="col-sm-4">
                    <h3>Более 1000
                        постоянных клиентов</h3>

                    <p class="">Иван Иванов консультирует очень-очень-очень
                        много юридических и физических лиц. Иван!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- main-content -->
    <section class="main-content">
        <div class="container">
            <div class="row">

                <!-- миниатюра -->
                <div class="col-sm-4">
                    <?php
                    echo get_the_post_thumbnail()
                    ?>
                </div>

                <!-- текст -->
                <div class="col-sm-8">
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>


    <section class="services-small">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    Иванов Иван оказывает огромную сферу
                    юридических услуг

                    <ol class="">
                        <li class="">
                            <a href="" class="">Полное юридическое сопровождение организации</a>
                        </li>
                        <li class="">
                            <a href="" class="">Налоговые споры</a>
                        </li>
                        <li class="">
                            <a href="" class="">Уголовное производство</a>
                        </li>
                        <li class="">
                            <a href="" class="">Исполнительное производство</a>
                        </li>
                        <li class="">
                            <a href="" class="">Взыскание задолженности</a>
                        </li>
                    </ol>

                    <a href="services-all__anhor" class="">Подробнее &rrarr;</a>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img class="services-small__img" src="/images/services-small-img.jpg" alt="">
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>