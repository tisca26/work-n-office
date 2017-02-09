    <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo trans_line('language');?>">
<head>
    <!-- Carga extra -->
    <?php $this->cargar_elementos_manager->carga_simple('elementos_extras/head_first'); ?>

    <!-- Document Title
    ============================================= -->
    <title><?php echo trans_line('title_tag'); ?></title>

    <!-- Carga extra -->
    <?php $this->cargar_elementos_manager->carga_simple('elementos_extras/head_last'); ?>

</head>

<body>

<!-- Carga extra  -->
<?php $this->cargar_elementos_manager->carga_simple('elementos_extras/body_first'); ?>

<div class="body">
    
    <!-- Menu generado -->
    <?php $this->menu_manager->generar_menu(); ?>

    <div role="main" class="main">

        <section class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>- Nosotros <span>¿Quienes somos?</span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="demo-business-consulting.html">Inicio</a></li>
                            <li class="active">Nosotros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-xs pb-xl mb-md">
                <div class="col-md-12">
                    <p class="lead mb-xl">Founded in 2001 by John Doe, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae.</p>

                    <div class="row pb-xl">
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Certified Professionals</li>
                                <li><i class="fa fa-chevron-right"></i> Former Chief Executives</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Real Estate Professionals</li>
                                <li><i class="fa fa-chevron-right"></i> Chartered Financial Analysts</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Nobel Laureate Economists</li>
                                <li><i class="fa fa-chevron-right"></i> Former Political Leaders</li>
                            </ul>
                        </div>
                    </div>

                    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

                    <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                    <div class="row content-grid-row pb-md pt-xl">
                        <div class="content-grid-item col-md-3">
                            <div class="counters mb-xl">
                                <div class="counter custom-sm-counter-style">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-1.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="15" data-append="+">0</strong>
                                    <label>Years in Business</label>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-item col-md-3">
                            <div class="counters mb-xl">
                                <div class="counter custom-sm-counter-style">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-2.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="2000" data-append="+">0</strong>
                                    <label>Successfull Cases</label>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-item col-md-3">
                            <div class="counters mb-xl">
                                <div class="counter">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-3.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="240" data-append="+">0</strong>
                                    <label>Satisfied Clients</label>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-item col-md-3 background-color-light">
                            <div class="counters mb-xl">
                                <div class="counter">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-4.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="130" data-append="+">0</strong>
                                    <label>Pro Consultants</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

                    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

                    <div class="row pb-xl pt-xl mt-xl">
                        <div class="col-md-4">
                            <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-5.jpg" class="img-responsive mb-xl" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-4.jpg" class="img-responsive mb-xl" alt="">
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-1.jpg" class="img-responsive mb-xl" alt="">
                        </div>
                    </div>

                    <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                    <p>Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

                </div>
            </div>
        </div>

    <!-- Footer -->
    <?php $this->cargar_elementos_manager->carga_con_lang('footers/footer_uno'); ?>

</div>

<!-- External JavaScripts
============================================= -->

<!-- Carga extra  -->
<?php $this->cargar_elementos_manager->carga_simple('elementos_extras/body_last'); ?>
</body>
</html>
