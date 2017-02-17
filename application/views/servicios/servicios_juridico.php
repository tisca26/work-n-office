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

        <section
            class="page-header page-header-color page-header-quaternary page-header-more-padding custom-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>- <?php echo trans_line('titulo'); ?>
                            <span><?php echo trans_line('sub_titulo'); ?></span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li>
                                <a href="<?php echo base_url_lang(); ?>"><?php echo trans_line('breadcrumb_inicio'); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url_lang() . 'servicios' ?>"><?php echo trans_line('breadcrumb_pagina'); ?></a>
                            </li>
                            <li class="active"><?php echo trans_line('breadcrumb_subpagina'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-xs pb-xl mb-md">
                <div class="col-md-8">

                    <p class="lead mb-xl"><?php echo trans_line('p_01'); ?></p>

                    <p class="clearfix">
                        <?php echo trans_line('p_02'); ?>
                    </p>

                    <p class="clearfix">
                        <?php echo trans_line('p_03'); ?>
                    </p>

                    <div class="row pb-xl">
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('cat_01'); ?></li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('cat_02'); ?></li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('cat_03'); ?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('cat_04'); ?></li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('cat_05'); ?></li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('cat_06'); ?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('cat_07'); ?></li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('cat_08'); ?></li>
                            </ul>
                        </div>
                    </div>

                    <p>
                        <?php echo trans_line('p_04'); ?>
                    </p>

                    <p>
                        <?php echo trans_line('p_05'); ?>
                    </p>

                    <div class="panel-group without-bg custom-accordion-style-1 pt-xl pb-xl" id="preg_frecuentes">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#preg_frecuentes"
                                       href="#preg_01" aria-expanded="true">
                                        <?php echo trans_line('faq_01'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_01" class="accordion-body collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_01_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_02" aria-expanded="false">
                                        <?php echo trans_line('faq_02'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_02" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_02_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_03" aria-expanded="false">
                                        <?php echo trans_line('faq_03'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_03" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_03_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_04" aria-expanded="false">
                                        <?php echo trans_line('faq_04'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_04" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_04_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_05" aria-expanded="false">
                                        <?php echo trans_line('faq_05'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_05" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_05_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_06" aria-expanded="false">
                                        <?php echo trans_line('faq_06'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_06" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_06_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_07" aria-expanded="false">
                                        <?php echo trans_line('faq_07'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_07" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_07_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_08" aria-expanded="false">
                                        <?php echo trans_line('faq_08'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_08" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_08_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_09" aria-expanded="false">
                                        <?php echo trans_line('faq_09'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_09" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_09_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_10" aria-expanded="false">
                                        <?php echo trans_line('faq_10'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_10" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_10_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_11" aria-expanded="false">
                                        <?php echo trans_line('faq_11'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_11" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_11_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_12" aria-expanded="false">
                                        <?php echo trans_line('faq_12'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_12" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_12_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_13" aria-expanded="false">
                                        <?php echo trans_line('faq_13'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_13" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_13_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_14" aria-expanded="false">
                                        <?php echo trans_line('faq_14'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_14" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_14_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                       data-parent="#preg_frecuentes" href="#preg_15" aria-expanded="false">
                                        <?php echo trans_line('faq_15'); ?>
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="preg_15" class="accordion-body collapse" aria-expanded="false"
                                 style="height: 0px;">
                                <div class="panel-body">
                                    <p><?php echo trans_line('faq_15_ans'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>
                        <?php echo trans_line('p_06'); ?>
                    </p>

                    <p>
                        <?php echo trans_line('p_07'); ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>/assets/img/demos/business-consulting/cases/juridico.jpg"
                         class="img-responsive mb-xl" alt="">

                    <h4 class="font-weight-bold text-color-dark mt-xlg pt-sm"><?php echo trans_line('estr_titulo'); ?></h4>
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots pl-xs pr-xs"
                         data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                        <div>
                            <div class="custom-step-item">
                                <span class="step text-uppercase">
                                    <?php echo trans_line('estr_paso'); ?>
                                    <span class="step-number text-color-primary">
                                        <?php echo trans_line('estr_01_num'); ?>
                                    </span>
                                </span>
                                <div class="step-content">
                                    <h4 class="mb-xlg">
                                        <?php echo trans_line('estr_01_titulo'); ?>
                                    </h4>
                                    <p>
                                        <?php echo trans_line('estr_01_p_01'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-step-item">
                                <span class="step text-uppercase">
                                    <?php echo trans_line('estr_paso'); ?>
                                    <span class="step-number text-color-primary">
                                        <?php echo trans_line('estr_02_num'); ?>
                                    </span>
                                </span>
                                <div class="step-content">
                                    <h4 class="mb-xlg">
                                        <?php echo trans_line('estr_02_titulo'); ?>
                                    </h4>
                                    <p>
                                        <?php echo trans_line('estr_02_p_01'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-step-item">
                                <span class="step text-uppercase">
                                    <?php echo trans_line('estr_paso'); ?>
                                    <span class="step-number text-color-primary">
                                        <?php echo trans_line('estr_03_num'); ?>
                                    </span>
                                </span>
                                <div class="step-content">
                                    <h4 class="mb-xlg">
                                        <?php echo trans_line('estr_03_titulo'); ?>
                                    </h4>
                                    <p>
                                        <?php echo trans_line('estr_03_p_01'); ?>
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