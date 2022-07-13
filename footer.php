    </main>
    <!-- /. MAIN -->

    <!-- Footer -->
    <footer class="footer bg--white">
        <div class="footer__body container">
            <div class="footer__inner">
                <a href="<?php echo home_url(); ?>" class="footer__logo">
                    <img src="<?php echo STANDART_DIR; ?>img/logo-footer.png" alt="" class="footer__logo-img">
                </a>
                <div class="footer__column footer__column--one">
                    <h3 class="footer__title-col text text--big text--dark-gray text--w-regular">
                        Навигация
                    </h3>
                    <?php
                        wp_nav_menu([
                            'theme_location'  => 'footer-menu',
                            'container'       => 'nav',
                            'container_class' => 'footer__menu-nav menu',
                            'menu_class'      => '',
                            'items_wrap'      => '<ul class="%2$s menu__list footer__menu-list">%3$s</ul>'
                        ]);
                    ?>
                </div>
                <div class="footer__column footer__column--two">
                    <h3 class="footer__title-col text text--big text--dark-gray text--w-regular">
                        Контакты
                    </h3>
                    <address class="footer__address">
                        <a href="tel:+74994506070" class="footer__phone footer__info text text--normal text--dark-gray text--w-thin">
                            <span class="footer__icon-info">
                                <svg class="footer__svg-info" width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.21222 4.76105C3.09222 6.4905 4.51 7.90216 6.23944 8.78827L7.58389 7.44383C7.74889 7.27883 7.99333 7.22383 8.20722 7.29716C8.89167 7.52327 9.63111 7.6455 10.3889 7.6455C10.725 7.6455 11 7.9205 11 8.25661V10.3894C11 10.7255 10.725 11.0005 10.3889 11.0005C4.65055 11.0005 0 6.34994 0 0.611607C0 0.275496 0.275 0.000495872 0.611111 0.000495872H2.75C3.08611 0.000495872 3.36111 0.275496 3.36111 0.611607C3.36111 1.3755 3.48333 2.10883 3.70944 2.79327C3.77667 3.00716 3.72778 3.2455 3.55667 3.41661L2.21222 4.76105ZM10.4867 0.422163L10.0528 -0.00561523L6.11111 3.84439V1.22272H5.5V4.88939H9.16667V4.27827H6.63056L10.4867 0.422163Z" fill="#555555"/>
                                </svg>
                            </span>
                            <span class="footer__text-address">+7-499-450-60-70</span>
                        </a>
                        <div class="footer__mail footer__info text text--normal text--dark-gray text--w-thin">
                            <span class="footer__icon-info">
                                <svg class="footer__svg-info" width="9" height="12" viewBox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.5 0C2.01214 0 0 1.878 0 4.2C0 5.244 0.321428 6.222 0.906428 7.104C1.51714 8.028 2.32071 8.82 2.93786 9.744C3.24 10.194 3.45857 10.614 3.69 11.1C3.85714 11.43 3.99214 12 4.5 12C5.00786 12 5.14286 11.43 5.30357 11.1C5.54143 10.614 5.75357 10.194 6.05571 9.744C6.67286 8.826 7.47643 8.034 8.08714 7.104C8.67857 6.222 9 5.244 9 4.2C9 1.878 6.98786 0 4.5 0ZM4.5 5.85C4.07376 5.85 3.66498 5.69196 3.36358 5.41066C3.06218 5.12936 2.89286 4.74782 2.89286 4.35C2.89286 3.95218 3.06218 3.57064 3.36358 3.28934C3.66498 3.00804 4.07376 2.85 4.5 2.85C4.92624 2.85 5.33502 3.00804 5.63642 3.28934C5.93782 3.57064 6.10714 3.95218 6.10714 4.35C6.10714 4.74782 5.93782 5.12936 5.63642 5.41066C5.33502 5.69196 4.92624 5.85 4.5 5.85V5.85Z" fill="#555555"/>
                                </svg>
                            </span>
                            <span class="footer__text-address">Москва, Бережковская набережная, д. 24, стр. 1</span>
                        </div>
                    </address>
                </div>
            </div>
        </div>
    </footer>
    <!-- /. Footer -->
    
    <?php wp_footer(); ?>
</body>
</html>