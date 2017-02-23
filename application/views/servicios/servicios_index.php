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

                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/expertise/expertise-1.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-xl"><?php echo trans_line('contabilidad_title'); ?></h4>
                                    <p><?php echo trans_line('contabilidad_desc'); ?></p>
                                    <a href="<?php echo base_url_lang() . 'servicios/contabilidad-corporativa'; ?>"><?php echo trans_line('leer_mas'); ?> <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/expertise/expertise-5.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-xl"><?php echo trans_line('juridico_title'); ?></h4>
                                    <p><?php echo trans_line('juridico_desc'); ?></p>
                                    <a href="<?php echo base_url_lang() . 'servicios/asesoria-juridica'; ?>"><?php echo trans_line('leer_mas'); ?> <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/expertise/recorridos.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-xl"><?php echo trans_line('recorridos_title'); ?></h4>
                                    <p><?php echo trans_line('recorridos_desc'); ?></p>
                                    <a href="<?php echo base_url_lang() . 'servicios/recorridos-virtuales'; ?>"><?php echo trans_line('leer_mas'); ?> <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/expertise/expertise-6.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-xl"><?php echo trans_line('coaching_empresarial_title'); ?></h4>
                                    <p><?php echo trans_line('coaching_empresarial_desc'); ?></p>
                                    <a href="<?php echo base_url_lang() . 'servicios/coaching-empresarial'; ?>"><?php echo trans_line('leer_mas'); ?> <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/expertise/expertise-4.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-xl"><?php echo trans_line('reclutamiento_ti_title'); ?></h4>
                                    <p><?php echo trans_line('reclutamiento_ti_desc'); ?></p>
                                    <a href="<?php echo base_url_lang() . 'servicios/reclutamiento-de-ti'; ?>"><?php echo trans_line('leer_mas'); ?> <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/expertise/software.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-xl"><?php echo trans_line('software_title'); ?></h4>
                                    <p><?php echo trans_line('software_desc'); ?></p>
                                    <a href="<?php echo base_url_lang() . 'servicios/desarrollo-de-software'; ?>"><?php echo trans_line('leer_mas'); ?> <i class="fa fa-long-arrow-right"></i></a>
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