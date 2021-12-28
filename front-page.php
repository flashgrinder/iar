<?php /* Template Name: Домашняя страница */?>
<?php get_header(); ?>

<!-- Projects -->
<section class="projects bg--white block-padding">
    <div class="projects__container container">
        <h2 class="projects__heading title title--big title--dark-gray title--w-normal title--uppercase title--indent center">
            Проекты
        </h2>
        <div class="projects__body">
            <div class="projects__items">
                <a href="" class="projects__card">
                    <div class="projects__pic">
                        <img src="<?php echo STANDART_DIR; ?>img/projects/projects-img-1.png" alt="" class="projects__img">
                    </div>
                </a>
                <a href="" class="projects__card">
                    <div class="projects__pic">
                        <img src="<?php echo STANDART_DIR; ?>img/projects/projects-img-2.png" alt="" class="projects__img">
                    </div>
                </a>
                <a href="" class="projects__card">
                    <div class="projects__pic">
                        <img src="<?php echo STANDART_DIR; ?>img/projects/projects-img-3.png" alt="" class="projects__img">
                    </div>
                </a>
                <a href="" class="projects__card">
                    <div class="projects__pic">
                        <img src="<?php echo STANDART_DIR; ?>img/projects/projects-img-4.png" alt="" class="projects__img">
                    </div>
                </a>
            </div>
            <div class="projects__action">
                <a href="javascript:;" class="button button--blue">
                    Подробнее
                </a>
            </div>
        </div>
    </div>
</section>
<!-- /. Projects -->

<!-- Team -->
<section class="team bg--white block-padding">
    <div class="team__body container">
        <h2 class="team__heading title title--big title--dark-gray title--w-normal title--uppercase title--indent center">
            Команда
        </h2>
        <p class="team__subtitle text text--large text--dark-gray text--w-light">
            Наша команда - это люди, которые горят своим делом и постоянно работают над тем, чтобы Фонд развивался, с каждым днем становился популярнее и влиятельнее, ведь только так мы сможем привлечь внимание к существующим проблема и приступить к их эффективному решению.
        </p>
        <div class="team__items">
            
        </div>
    </div>
</section>
<!-- /. Team -->

<!-- Contacts -->
<section class="contacts bg--white block-padding">
    <div class="contacts__body">
        <div class="contacts__outer">
            <div class="contacts__inner container">
                <div class="contacts__plunk">
                    <div class="contacts__mark">
                        <svg class="contacts__mark-svg" width="46" height="51" viewBox="0 0 46 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_297_65)">
                            <path d="M8 39V9.47619C8 9.47619 15.9232 8 21 8C26.0768 8 34 9.47619 34 9.47619V39L21 31.619L8 39Z" fill="#E70C0C"/>
                            </g>
                            <defs>
                            <filter id="filter0_d_297_65" x="0" y="0" width="46" height="51" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                            <feOffset dx="2" dy="2"/>
                            <feGaussianBlur stdDeviation="5"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_297_65"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_297_65" result="shape"/>
                            </filter>
                            </defs>
                        </svg>
                    </div>
                    <h2 class="contacts__heading title title--big title--dark-gray title--w-normal title--uppercase title--indent">
                        Контакты
                    </h2>
                    <address class="contacts__address">
                        <a href="tel:+79035859564" class="contacts__phone contacts__info text text--large text--dark-gray text--w-light">
                            <span class="contacts__icon">
                                <svg class="contacts__svg-icon" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_134_35)">
                                    <path d="M3.56414 20.5002L17.8558 20.5002C19.3233 20.5002 20.5 19.3235 20.5 17.856L20.5 3.56434C20.5 2.09689 19.3233 0.920166 17.8558 0.920165L3.56414 0.920163C2.09669 0.920163 0.919967 2.09689 0.919967 3.56434L0.919965 17.856C0.919964 19.3235 2.09669 20.5002 3.56414 20.5002Z" stroke="#2F89DF"/>
                                    <path d="M9.56674 7.56594C9.88116 7.88036 9.88116 8.39486 9.56674 8.70928L8.62349 9.65253C8.22332 10.0527 8.62349 11.0817 9.48099 11.9392C10.3385 12.7967 11.3675 13.1969 11.7677 12.7967L12.7109 11.8535C13.0253 11.539 13.5398 11.539 13.8542 11.8535L16.1123 14.1115C16.4267 14.426 16.4267 14.9405 16.1123 15.2549L15.5121 15.8551C14.2544 17.1128 10.9959 15.8837 8.2519 13.1397C5.5079 10.3957 4.27882 7.13719 5.53648 5.87952L6.13674 5.27927C6.45115 4.96485 6.96565 4.96485 7.28007 5.27927L9.56674 7.56594Z" fill="#2F89DF"/>
                                    <path d="M3.56414 21.0002L17.8558 21.0002C19.5994 21.0002 21 19.5996 21 17.856L21 3.56434C21 1.82075 19.5994 0.420166 17.8558 0.420165L3.56414 0.420163C1.82055 0.420163 0.419967 1.82075 0.419967 3.56434L0.419965 17.856C0.419964 19.5996 1.82055 21.0002 3.56414 21.0002Z" fill="#2F89DF"/>
                                    <path d="M9.56674 7.56594C9.88116 7.88036 9.88116 8.39486 9.56674 8.70928L8.62349 9.65253C8.22332 10.0527 8.62349 11.0817 9.48099 11.9392C10.3385 12.7967 11.3675 13.1969 11.7677 12.7967L12.7109 11.8535C13.0253 11.539 13.5398 11.539 13.8542 11.8535L16.1123 14.1115C16.4267 14.426 16.4267 14.9405 16.1123 15.2549L15.5121 15.8551C14.2544 17.1128 10.9959 15.8837 8.2519 13.1397C5.5079 10.3957 4.27882 7.13719 5.53648 5.87952L6.13674 5.27927C6.45115 4.96485 6.96565 4.96485 7.28007 5.27927L9.56674 7.56594Z" fill="#FEFEFE"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_134_35">
                                    <rect width="21" height="21" fill="white" transform="matrix(-1 -1.74846e-07 -1.74846e-07 1 21 0)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <span class="contacts__text">+7-903-585-95-64</span>
                        </a>
                        <a href="mailto:Inregions.com@gmail.com" class="contacts__mail contacts__info text text--large text--dark-gray text--w-light">
                            <span class="contacts__icon">
                                <svg class="contacts__svg-icon" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_134_27)">
                                    <rect width="21" height="21" rx="2.125" fill="#2F89DF"/>
                                    </g>
                                    <g clip-path="url(#clip0_134_27)">
                                    <path d="M16.0588 14.262V9.61279L10.5 12.847L4.94116 9.61279V14.262C4.94116 14.53 5.04765 14.7871 5.23719 14.9767C5.42673 15.1662 5.6838 15.2727 5.95186 15.2727H15.0481C15.3162 15.2727 15.5732 15.1662 15.7628 14.9767C15.9523 14.7871 16.0588 14.53 16.0588 14.262Z" fill="#FEFEFE"/>
                                    <path d="M16.0588 8.1979V7.18721C16.0588 6.91916 15.9523 6.66208 15.7628 6.47254C15.5732 6.283 15.3162 6.17651 15.0481 6.17651H5.95186C5.6838 6.17651 5.42673 6.283 5.23719 6.47254C5.04765 6.66208 4.94116 6.91916 4.94116 7.18721V8.1979L10.5 11.23L16.0588 8.1979Z" fill="#FEFEFE"/>
                                    </g>
                                    <defs>
                                    <filter id="filter0_b_134_27" x="-10.625" y="-10.625" width="42.25" height="42.25" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feGaussianBlur in="BackgroundImage" stdDeviation="5.3125"/>
                                    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_134_27"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_134_27" result="shape"/>
                                    </filter>
                                    <clipPath id="clip0_134_27">
                                    <rect width="11.1176" height="11.1176" fill="white" transform="translate(4.94116 4.94116)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <span class="contacts__text">Inregions.com@gmail.com</span>
                        </a>
                        <div class="contacts__position contacts__info text text--large text--dark-gray text--w-light">
                            <span class="contacts__icon">
                                <svg class="contacts__svg-icon" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_b_134_20)">
                                    <rect width="21" height="21" rx="2.125" fill="#2F89DF"/>
                                    </g>
                                    <g clip-path="url(#clip0_134_20)">
                                    <path d="M10.5 2.4707C7.42675 2.4707 4.94116 4.79059 4.94116 7.65894C4.94116 8.94859 5.33822 10.1567 6.06087 11.2462C6.81528 12.3876 7.80793 13.366 8.57028 14.5074C8.94351 15.0633 9.21351 15.5821 9.4994 16.1825C9.70587 16.5901 9.87263 17.2942 10.5 17.2942C11.1273 17.2942 11.2941 16.5901 11.4926 16.1825C11.7865 15.5821 12.0485 15.0633 12.4218 14.5074C13.1841 13.3734 14.1768 12.3951 14.9312 11.2462C15.6617 10.1567 16.0588 8.94859 16.0588 7.65894C16.0588 4.79059 13.5732 2.4707 10.5 2.4707ZM10.5 9.69717C9.97345 9.69717 9.46849 9.50195 9.09617 9.15446C8.72386 8.80697 8.51469 8.33566 8.51469 7.84423C8.51469 7.3528 8.72386 6.8815 9.09617 6.53401C9.46849 6.18651 9.97345 5.99129 10.5 5.99129C11.0265 5.99129 11.5315 6.18651 11.9038 6.53401C12.2761 6.8815 12.4853 7.3528 12.4853 7.84423C12.4853 8.33566 12.2761 8.80697 11.9038 9.15446C11.5315 9.50195 11.0265 9.69717 10.5 9.69717Z" fill="#FEFEFE"/>
                                    </g>
                                    <defs>
                                    <filter id="filter0_b_134_20" x="-10.625" y="-10.625" width="42.25" height="42.25" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feGaussianBlur in="BackgroundImage" stdDeviation="5.3125"/>
                                    <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_134_20"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_134_20" result="shape"/>
                                    </filter>
                                    <clipPath id="clip0_134_20">
                                    <rect width="11.1176" height="14.8235" fill="white" transform="translate(4.94116 2.4707)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <span class="contacts__text">Москва, ул. Тверская, д. 24</span>
                        </div>
                    </address>
                    <div class="contacts__action">
                        <a href="javascript:;" class="contacts__button button button--blue">
                            Перезвоните мне
                        </a>
                        <a href="javascript:;" class="contacts__button button button--transparent">
                            Написать письмо
                        </a>
                    </div>
                </div>
            </div>
            <div class="contacts__map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3d1331ec96ea3109aa6f08257507d6c613c7f3e45340f7901725c26561e0d17a&amp;width=100%25&amp;height=555&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>
    </div>
</section>
<!-- /. Contacts -->

<?php get_footer(); ?>