    </div><!-- end wrap -->

    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">

                <!-- footer contact -->
                <div class="col-sm-3 col-md-2">
                    <p class="footer-contact__tel">+2(123) 18-99-1212</p>
                    <a class="footer-contact__mail" href="mailto:Ivan_layer@mail.ru">Ivan_layer@mail.ru</a>
                </div>

                <!-- footer menu -->
                <div class="col-sm-8 col-md-8">
                    <? wp_nav_menu(array('menu' => 'footer-menu', 'menu_class' => 'footer-menu')); ?>
                </div>

                <!-- social block -->
                <div class="col-sm-12 col-md-2">
                    <nav class="footer__social">
                        <ul class="social__block">
                            <li class="social__block__item">
                                <a href="#"></a>
                            </li>
                            <li class="social__block__item">
                                <a href="#"></a>
                            </li>
                            <li class="social__block__item">
                                <a href="#"></a>
                            </li>
                            <li class="social__block__item">
                                <a href="#"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.12.1.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>

    </body>
</html>