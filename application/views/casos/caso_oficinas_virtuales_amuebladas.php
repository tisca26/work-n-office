<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo trans_line('language'); ?>">
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
                        <h1>- <?php echo trans_line('titulo'); ?> <span><?php echo trans_line('sub_titulo'); ?></span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="<?php echo base_url_lang(); ?>"><?php echo trans_line('breadcrumb_inicio'); ?></a></li>
                            <li><a href="<?php echo base_url_lang() . 'casos'; ?>"><?php echo trans_line('breadcrumb_pagina'); ?></a></li>
                            <li class="active"><?php echo trans_line('breadcrumb_subpagina'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-xs pb-xl mb-md">

                <div class="col-md-12">

                    <div class="portfolio-info pull-none">
                        <div class="row">
                            <div class="col-md-12">
                                <ul>
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php echo trans_line('fecha'); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-tags"></i> <a href=""><?php echo trans_line('tag_01'); ?></a>, <a href=""><?php echo trans_line('tag_02'); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <p class="lead mb-xl">
                        <?php echo trans_line('p_01'); ?>
                    </p>

                    <div class="row">
                        <div class="col-md-3">
                            <h5 class="mt-sm mb-lg">- <?php echo trans_line('cliente'); ?></h5>
                            <p class="pb-none mb-none text-md text-dark"><strong><?php echo trans_line('empresa'); ?></strong></p>
                            <p class="pb-none mb-xl"><?php echo trans_line('giro'); ?></p>
                        </div>
                        <div class="col-md-9">
                            <h5 class="mt-sm mb-lg">- <?php echo trans_line('habilidades'); ?></h5>
                            <div class="row pb-xl">
                                <div class="col-md-4">
                                    <ul class="list list-icons list-icons-style-3 list-tertiary">
                                        <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('hab_01'); ?></li>
                                        <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('hab_02'); ?></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="list list-icons list-icons-style-3 list-tertiary">
                                        <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('hab_03'); ?></li>
                                        <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('hab_04'); ?></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="list list-icons list-icons-style-3 list-tertiary">
                                        <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('hab_05'); ?></li>
                                        <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('hab_06'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>
                        <?php echo trans_line('p_02'); ?>
                    </p>

                    <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-4.jpg" style="max-width: 260px;"
                         class="img-responsive pull-right ml-xl mb-xl" alt="">

                    <p>
                        <?php echo trans_line('p_03'); ?>
                    </p>

                    <p>
                        <?php echo trans_line('p_04'); ?>
                    </p>

                    <p>
                        <?php echo trans_line('p_05'); ?>
                    </p>

                    <h5 class="mt-xl pt-md mb-lg">- <?php echo trans_line('testimonios'); ?></h5>

                    <div class="row">
                        <div class="col-xs-8 col-sm-4 col-md-2 center pt-xlg">
                            <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/testimonials/icognitis.png" alt
                                 class="img-responsive custom-rounded-image"/>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10">
                            <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                <blockquote>
                                    <p>
                                        <?php echo trans_line('testimonio_01_desc'); ?>
                                    </p>
                                </blockquote>
                                <div class="testimonial-author pull-left">
                                    <p><strong><?php echo trans_line('testimonio_01_autor'); ?></strong><span class="text-color-primary"><?php echo trans_line('testimonio_01_empresa'); ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

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