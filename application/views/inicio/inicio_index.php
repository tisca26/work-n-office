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

        <div class="slider-container rev_slider_wrapper" style="height: 100%;">
            <div id="revolutionSlider" class="slider rev_slider manual">
                <ul>
                    <li data-transition="fade">
                        <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/slides/slide-1.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             data-bgparallax="1"
                             class="rev-slidebg">

                        <h1 class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                            data-y="center" data-voffset="['-80','-80','-80','-40']"
                            data-start="800"
                            data-transform_in="y:[-300%];opacity:0;s:500;"
                            style="font-size: 32px;"><?php echo trans_line('slider_slide1_title'); ?></h1>

                        <div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                             data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                             data-y="center" data-voffset="['-42','-42','-42','2']"
                             data-start="800"
                             data-transform_in="y:[-300%];opacity:0;s:500;"
                             style="font-size: 42px;"><?php echo trans_line('slider_slide1_sub'); ?>
                        </div>

                        <a href="#nosotros"
                           class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                           data-hash
                           data-hash-offset="85"
                           data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                           data-y="center" data-voffset="['60','60','60','100']"
                           data-start="1500"
                           style="font-size: 12px; padding: 15px 6px;"
                           data-transform_in="y:[-300%];opacity:0;s:500;"><?php echo trans_line('slider_slide1_button'); ?></a>
                    </li>
                    <li data-transition="fade">
                        <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/slides/slide-2.jpg"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             data-bgparallax="1"
                             class="rev-slidebg">

                        <h1 class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                            data-y="center" data-voffset="['-80','-80','-80','-40']"
                            data-start="800"
                            data-transform_in="y:[-300%];opacity:0;s:500;"
                            style="font-size: 32px;"><?php echo trans_line('slider_slide2_title'); ?></h1>

                        <div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                             data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                             data-y="center" data-voffset="['-42','-42','-42','2']"
                             data-start="800"
                             data-transform_in="y:[-300%];opacity:0;s:500;"
                             style="font-size: 42px;"><?php echo trans_line('slider_slide2_sub'); ?>
                        </div>

                        <a href="#nosotros"
                           class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                           data-hash
                           data-hash-offset="85"
                           data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                           data-y="center" data-voffset="['60','60','60','100']"
                           data-start="1500"
                           style="font-size: 12px; padding: 15px 6px;"
                           data-transform_in="y:[-300%];opacity:0;s:500;"><?php echo trans_line('slider_slide2_button'); ?></a>
                    </li>
                </ul>
            </div>
        </div>

        <section class="looking-for custom-position-1">
            <div class="container custom-md-border-top">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="looking-for-box">
                            <h2>-
                                <span class="text-lg custom-secondary-font"><?php echo trans_line('slider_promo_title_1'); ?></span><br><?php echo trans_line('slider_promo_title_2'); ?>
                            </h2>
                            <p><?php echo trans_line('slider_promo_sub'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <a class="text-decoration-none" href="tel:<?php echo TEL_VENTAS; ?>" target="_blank"
                           title="<?php echo trans_line('slider_promo_call'); ?>">
                            <span class="custom-call-to-action mt-xlg">
                                <span class="action-title text-color-primary"><?php echo trans_line('slider_promo_call'); ?></span>
                                <span class="action-info text-color-light"><?php echo TEL_VENTAS; ?></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <a class="text-decoration-none" href="<?php echo base_url_lang() . 'contacto'; ?>"
                           title="<?php echo trans_line('slider_promo_mail'); ?>">
                            <span class="custom-call-to-action mt-xlg">
                                <span class="action-title text-color-primary"><?php echo trans_line('slider_promo_mail'); ?></span>
                                <span class="action-info text-color-light"><?php echo MAIL_CONTACTO; ?></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-us custom-section-padding" id="nosotros">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <h2 class="font-weight-bold text-color-dark">- <?php echo trans_line('about_us_title'); ?></h2>
                        <p class="pl-lg"><?php echo trans_line('about_us_desc'); ?></p>
                        <div class="col-md-6">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('about_us_list_1'); ?>
                                </li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('about_us_list_2'); ?>
                                </li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('about_us_list_3'); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('about_us_list_4'); ?>
                                </li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('about_us_list_5'); ?>
                                </li>
                                <li><i class="fa fa-chevron-right"></i> <?php echo trans_line('about_us_list_6'); ?>
                                </li>
                            </ul>
                        </div>
                        <a class="btn btn-borders custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase"
                           href="<?php echo base_url_lang(); ?>nosotros"><?php echo trans_line('about_us_button'); ?></a>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="content-grid custom-content-grid mt-xlg mb-lg">
                            <div class="row content-grid-row">
                                <div class="content-grid-item col-md-6 background-color-light">
                                    <div class="counters">
                                        <div class="counter custom-sm-counter-style">
                                            <img class="counter-icon"
                                                 src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/icons/icon-1.png"
                                                 alt/>
                                            <strong class="text-color-primary custom-primary-font" data-to="15"
                                                    data-append="+">0</strong>
                                            <label><?php echo trans_line('about_us_counter_1'); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-grid-item col-md-6">
                                    <div class="counters">
                                        <div class="counter margin-style-2 custom-sm-counter-style">
                                            <img class="counter-icon"
                                                 src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/icons/icon-2.png"
                                                 alt/>
                                            <strong class="text-color-primary custom-primary-font" data-to="900"
                                                    data-append="+">0</strong>
                                            <label><?php echo trans_line('about_us_counter_2'); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content-grid-row">
                                <div class="content-grid-item col-md-6">
                                    <div class="counters">
                                        <div class="counter custom-sm-counter-style">
                                            <img class="counter-icon"
                                                 src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/icons/icon-3.png"
                                                 alt/>
                                            <strong class="text-color-primary custom-primary-font" data-to="1200"
                                                    data-append="+">0</strong>
                                            <label><?php echo trans_line('about_us_counter_3'); ?></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-grid-item col-md-6 background-color-light">
                                    <div class="counters">
                                        <div class="counter margin-style-2 custom-sm-counter-style">
                                            <img class="counter-icon"
                                                 src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/icons/icon-4.png"
                                                 alt/>
                                            <strong class="text-color-primary custom-primary-font" data-to="70"
                                                    data-append="+">0</strong>
                                            <label><?php echo trans_line('about_us_counter_4'); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-secondary custom-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-bold text-color-dark mb-md">
                            - <?php echo trans_line('services_title'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?php echo base_url_lang(); ?>servicios/contabilidad-corporativa"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="0">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/expertise/expertise-1.jpg"
                                         alt="<?php echo trans_line('contabilidad_desc'); ?>">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg"><?php echo trans_line('contabilidad_title'); ?></h4>
                                    <p><?php echo trans_line('contabilidad_desc'); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo base_url_lang(); ?>servicios/asesoria-juridica"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="100">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/expertise/expertise-2.jpg"
                                         alt="<?php echo trans_line('juridico_title'); ?>">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg"><?php echo trans_line('juridico_title'); ?></h4>
                                    <p><?php echo trans_line('juridico_desc'); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo base_url_lang(); ?>servicios/recorridos-virtuales"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="200">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/expertise/expertise-3.jpg"
                                         alt="<?php echo trans_line('recorridos_title'); ?>">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg"><?php echo trans_line('recorridos_title'); ?></h4>
                                    <p><?php echo trans_line('recorridos_desc'); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="<?php echo base_url_lang(); ?>servicios/arquitectura-empresarial"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="300">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/expertise/expertise-4.jpg"
                                         alt="<?php echo trans_line('ae_title'); ?>">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg"><?php echo trans_line('ae_title'); ?></h4>
                                    <p><?php echo trans_line('ae_desc'); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo base_url_lang(); ?>servicios/reclutamiento-de-TI"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="400">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/expertise/expertise-5.jpg"
                                         alt="<?php echo trans_line('reclutamiento_ti_title'); ?>">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg"><?php echo trans_line('reclutamiento_ti_title'); ?></h4>
                                    <p><?php echo trans_line('reclutamiento_ti_desc'); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo base_url_lang(); ?>servicios/desarrollo-de-software"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="500">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/expertise/expertise-6.jpg"
                                         alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg"><?php echo trans_line('software_title'); ?></h4>
                                    <p><?php echo trans_line('software_desc'); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 center">
                        <a class="btn btn-borders custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase"
                           href="<?php echo base_url_lang(); ?>servicios"
                           title="<?php echo trans_line('services_button'); ?>"><?php echo trans_line('services_button'); ?></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold text-color-dark">- <?php echo trans_line('strat_title'); ?></h2>
                        <div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots pl-xs pr-xs"
                             data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                            <div>
                                <div class="custom-step-item">
                                    <span class="step text-uppercase">
                                        <?php echo trans_line('strat_step_name'); ?>
                                        <span class="step-number text-color-primary">
                                            01
                                        </span>
                                    </span>
                                    <div class="step-content">
                                        <h4 class="mb-xlg"><?php echo trans_line('strat_step_1_title'); ?><br>
                                            <strong><?php echo trans_line('strat_step_1_sub'); ?></strong></h4>
                                        <p><?php echo trans_line('strat_step_1_desc'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="custom-step-item">
                                    <span class="step text-uppercase">
                                        <?php echo trans_line('strat_step_name'); ?>
                                        <span class="step-number text-color-primary">
                                            02
                                        </span>
                                    </span>
                                    <div class="step-content">
                                        <h4 class="mb-xlg"><?php echo trans_line('strat_step_2_title'); ?><br>
                                            <strong><?php echo trans_line('strat_step_2_sub'); ?></strong></h4>
                                        <p><?php echo trans_line('strat_step_2_desc'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="custom-step-item">
                                    <span class="step text-uppercase">
                                        <?php echo trans_line('strat_step_name'); ?>
                                        <span class="step-number text-color-primary">
                                            03
                                        </span>
                                    </span>
                                    <div class="step-content">
                                        <h4 class="mb-xlg"><?php echo trans_line('strat_step_3_title'); ?><br>
                                            <strong><?php echo trans_line('strat_step_3_sub'); ?></strong></h4>
                                        <p><?php echo trans_line('strat_step_3_desc'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="font-weight-bold text-color-dark">- <?php echo trans_line('faq_title'); ?></h2>
                        <div class="panel-group without-bg custom-accordion-style-1" id="accordion7">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7"
                                           href="#collapse7One" aria-expanded="true">
                                            <?php echo trans_line('faq_1_que'); ?>
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7One" class="accordion-body collapse in" aria-expanded="true">
                                    <div class="panel-body">
                                        <p><?php echo trans_line('faq_1_ans'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse"
                                           data-parent="#accordion7" href="#collapse7Two" aria-expanded="false">
                                            <?php echo trans_line('faq_2_que'); ?>
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7Two" class="accordion-body collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="panel-body">
                                        <p><?php echo trans_line('faq_2_ans'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse"
                                           data-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
                                            <?php echo trans_line('faq_3_que'); ?>
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7Three" class="accordion-body collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="panel-body">
                                        <p><?php echo trans_line('faq_3_ans'); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse"
                                           data-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
                                            <?php echo trans_line('faq_4_que'); ?>
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7Four" class="accordion-body collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="panel-body">
                                        <p><?php echo trans_line('faq_4_ans'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-secondary custom-section-padding-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-bold text-color-dark mb-md">
                            - <?php echo trans_line('success_title'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 custom-dots-style-1 custom-xs-arrows-style-2"
                 data-plugin-options="{'items': 6, 'loop': false, 'dots': true, 'nav': false}">
                <div>
                    <a href="<?php echo base_url_lang(); ?>casos" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-1.jpg"
                                             class="img-responsive"
                                             alt="<?php echo trans_line('suc_recorridos_1_title'); ?>">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md"><?php echo trans_line('suc_recorridos_1_title'); ?></span>
											<span class="custom-thumb-info-desc font-weight-light"><?php echo trans_line('suc_recorridos_1_sub'); ?></span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url_lang(); ?>casos" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-2.jpg"
                                             class="img-responsive"
                                             alt="<?php echo trans_line('suc_contabilidad_1_title'); ?>">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md"><?php echo trans_line('suc_contabilidad_1_title'); ?></span>
											<span class="custom-thumb-info-desc font-weight-light"><?php echo trans_line('suc_contabilidad_1_sub'); ?></span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url_lang(); ?>casos" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-3.jpg"
                                             class="img-responsive"
                                             alt="<?php echo trans_line('suc_juridico_1_title'); ?>">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md"><?php echo trans_line('suc_juridico_1_title'); ?></span>
											<span class="custom-thumb-info-desc font-weight-light"><?php echo trans_line('suc_juridico_1_sub'); ?></span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url_lang(); ?>casos" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-4.jpg"
                                             class="img-responsive"
                                             alt="<?php echo trans_line('suc_software_1_title'); ?>">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md"><?php echo trans_line('suc_software_1_title'); ?></span>
											<span class="custom-thumb-info-desc font-weight-light"><?php echo trans_line('suc_software_1_sub'); ?></span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url_lang(); ?>casos" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-5.jpg"
                                             class="img-responsive"
                                             alt="<?php echo trans_line('suc_reclutamiento_1_title'); ?>">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md"><?php echo trans_line('suc_reclutamiento_1_title'); ?></span>
											<span class="custom-thumb-info-desc font-weight-light"><?php echo trans_line('suc_reclutamiento_1_sub'); ?></span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url_lang(); ?>casos" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-1.jpg"
                                             class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md"><?php echo trans_line('success_6_title'); ?></span>
											<span class="custom-thumb-info-desc font-weight-light"><?php echo trans_line('success_6_sub'); ?></span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url_lang(); ?>casos" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-2.jpg"
                                             class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md"><?php echo trans_line('success_7_title'); ?></span>
											<span class="custom-thumb-info-desc font-weight-light"><?php echo trans_line('success_7_sub'); ?></span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url_lang(); ?>casos" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-3.jpg"
                                             class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md"><?php echo trans_line('success_8_title'); ?></span>
											<span class="custom-thumb-info-desc font-weight-light"><?php echo trans_line('success_8_sub'); ?></span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url_lang(); ?>casos" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-4.jpg"
                                             class="img-responsive"
                                             alt="<?php echo trans_line('suc_software_2_title'); ?>">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md"><?php echo trans_line('suc_software_2_title'); ?></span>
											<span class="custom-thumb-info-desc font-weight-light"><?php echo trans_line('suc_software_2_sub'); ?></span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="custom-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-bold text-color-dark">- <?php echo trans_line('exp_title'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-none"
                             data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                            <div>
                                <div class="col-xs-8 col-sm-4 col-md-2 center pt-xlg">
                                    <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/testimonials/testimonial-author-2.jpg"
                                         alt
                                         class="img-responsive custom-rounded-image"/>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                        <blockquote class="pb-sm">
                                            <p><?php echo trans_line('exp_1_desc'); ?></p>
                                        </blockquote>
                                        <div class="testimonial-author pull-left">
                                            <p><strong><?php echo trans_line('exp_1_name'); ?></strong><span
                                                        class="text-color-primary"><?php echo trans_line('exp_1_name_sub'); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-xs-8 col-sm-4 col-md-2 center pt-xlg">
                                    <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/testimonials/testimonial-author-3.jpg"
                                         alt
                                         class="img-responsive custom-rounded-image"/>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                        <blockquote class="pb-sm">
                                            <p><?php echo trans_line('exp_2_desc'); ?></p>
                                        </blockquote>
                                        <div class="testimonial-author pull-left">
                                            <p><strong><?php echo trans_line('exp_2_name'); ?></strong><span
                                                        class="text-color-primary"><?php echo trans_line('exp_2_name_sub'); ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="looking-for section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="looking-for-box">
                            <h2>-
                                <span class="text-lg custom-secondary-font"><?php echo trans_line('franja_call_to_action_title'); ?></span><br>
                                <?php echo trans_line('franja_call_to_action_desc'); ?>
                            </h2>
                            <p><?php echo trans_line('franja_call_to_action_sub'); ?></p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <a class="text-decoration-none" href="tel:<?php echo TEL_VENTAS; ?>" target="_blank" title="Call Us Now">
                            <span class="custom-call-to-action white-border text-color-light mt-xlg">
                                <span class="action-title"><?php echo trans_line('slider_promo_call'); ?></span>
                                <span class="action-info"><?php echo TEL_VENTAS; ?></span>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4">
                        <a class="text-decoration-none" href="<?php echo base_url_lang() . 'contacto' ?>"
                           title="Email Us Now">
									<span class="custom-call-to-action white-border text-color-light mt-xlg">
										<span class="action-title"><?php echo trans_line('slider_promo_mail'); ?></span>
										<span class="action-info"><?php echo MAIL_CONTACTO; ?></span>
									</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-weight-bold text-color-dark">- <?php echo trans_line('news_title'); ?></h2>
                    </div>
                </div>
                <div class="row">
                    <article class="blog-post">
                        <div class="col-sm-8 col-md-5">
                            <div class="blog-post-image-wrapper">
                                <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/blog/blog-1.jpg"
                                     alt
                                     class="img-responsive mb-lg"/>
                                <span class="blog-post-date background-color-primary text-color-light font-weight-bold">
									<?php echo trans_line('news_1_date'); ?>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <h2> <?php echo trans_line('news_1_title'); ?></h2>
                            <p><?php echo trans_line('news_1_desc'); ?></p>
                            <hr class="solid">
                            <div class="post-infos">
										<span class="info posted-by">
											<?php echo trans_line('news_pub'); ?>
                                            <span class="post-author font-weight-semibold text-color-dark">
												<?php echo trans_line('news_1_name'); ?>
											</span>
										</span>
                                <span class="info comments ml-xlg">
											<?php echo trans_line('news_com'); ?>
                                    <span class="comments-number text-color-primary font-weight-semibold">
												15
											</span>
										</span>
                                <span class="info like ml-xlg">
											<?php echo trans_line('news_like'); ?>
                                    <span class="like-number font-weight-semibold custom-color-red">
												38
											</span>
										</span>
                            </div>
                            <a class="btn btn-borders custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-xlg"
                               href="<?php echo base_url_lang(); ?>"
                               title="<?php echo trans_line('news_button'); ?>"><?php echo trans_line('news_button'); ?></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
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
