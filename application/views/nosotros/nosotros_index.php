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
                        <h1>- <?php echo trans_line('titulo'); ?> <span><?php echo trans_line('sub_titulo'); ?></span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="<?php echo base_url_lang(); ?>"><?php echo trans_line('breadcrumb_inicio'); ?></a></li>
                            <li class="active"><?php echo trans_line('breadcrumb_pagina'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-xs pb-xl mb-md">
                <div class="col-md-12">
                    <p class="lead mb-xl">
                        <?php echo trans_line('p_01'); ?>
                    </p>

                    <p>
                        <?php echo trans_line('p_02'); ?>
                    </p>

                    <div class="row pb-xl">
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('li_serv_01'); ?></li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('li_serv_02'); ?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('li_serv_03'); ?></li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('li_serv_06'); ?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('li_serv_05'); ?></li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('li_serv_06'); ?></li>
                            </ul>
                        </div>
                    </div>

                    <p>
                        <?php echo trans_line('p_03'); ?>
                    </p>

                    <p>
                        <?php echo trans_line('p_04'); ?>
                    </p>

                    <div class="row content-grid-row pb-md pt-xl">
                        <div class="content-grid-item col-md-3">
                            <div class="counters mb-xl">
                                <div class="counter custom-sm-counter-style">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-1.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="<?php echo WNO_ANOS_EXPERIENCIA; ?>" data-append="+">0</strong>
                                    <label><?php echo trans_line('anos_negocio'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-item col-md-3">
                            <div class="counters mb-xl">
                                <div class="counter custom-sm-counter-style">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-2.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="<?php echo WNO_CASOS_EXITOSOS; ?>" data-append="+">0</strong>
                                    <label><?php echo trans_line('casos_ex'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-item col-md-3">
                            <div class="counters mb-xl">
                                <div class="counter">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-3.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="<?php echo WNO_CLIENTES_SATISFECHOS; ?>" data-append="+">0</strong>
                                    <label><?php echo trans_line('clientes_sat'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-item col-md-3 background-color-light">
                            <div class="counters mb-xl">
                                <div class="counter">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-4.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="<?php echo WNO_CONSULTORES; ?>" data-append="+">0</strong>
                                    <label><?php echo trans_line('consultores_pro'); ?></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>
                        <?php echo trans_line('p_05'); ?>
                    </p>


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

                    <p>
                        <?php echo trans_line('p_06'); ?>
                    </p>

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
