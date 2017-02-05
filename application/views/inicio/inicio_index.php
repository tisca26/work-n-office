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

        <div class="slider-container rev_slider_wrapper" style="height: 100%;">
            <div id="revolutionSlider" class="slider rev_slider manual">
                <ul>
                    <li data-transition="fade">
                        <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/slides/slide-1.jpg"
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
                            data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">Soluciones</h1>

                        <div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                             data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                             data-y="center" data-voffset="['-42','-42','-42','2']"
                             data-start="800"
                             data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 42px;">Empresariales
                        </div>

                        <a href="#nosotros"
                           class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                           data-hash
                           data-hash-offset="85"
                           data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                           data-y="center" data-voffset="['60','60','60','100']"
                           data-start="1500"
                           style="font-size: 12px; padding: 15px 6px;"
                           data-transform_in="y:[-300%];opacity:0;s:500;">Conocer</a>
                    </li>
                    <li data-transition="fade">
                        <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/slides/slide-2.jpg"
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
                            data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 32px;">Asesoría</h1>

                        <div class="tp-caption custom-secondary-font font-weight-bold text-color-light"
                             data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                             data-y="center" data-voffset="['-42','-42','-42','2']"
                             data-start="800"
                             data-transform_in="y:[-300%];opacity:0;s:500;" style="font-size: 42px;">Profesional
                        </div>

                        <a href="#nosotros"
                           class="btn btn-primary tp-caption text-uppercase text-color-light custom-border-radius"
                           data-hash
                           data-hash-offset="85"
                           data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                           data-y="center" data-voffset="['60','60','60','100']"
                           data-start="1500"
                           style="font-size: 12px; padding: 15px 6px;"
                           data-transform_in="y:[-300%];opacity:0;s:500;">Comencemos</a>
                    </li>
                </ul>
            </div>
        </div>

        <section class="looking-for custom-position-1">
            <div class="container custom-md-border-top">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="looking-for-box">
                            <h2>- <span class="text-lg custom-secondary-font">¿Busca algún tipo de solución para su situación</span><br>
                                Fiscal, Contable o de Sistemas?</h2>
                            <p>Agende una cita con nosotros ahora mismo, podemos asesorarlo</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <a class="text-decoration-none" href="tel:+55 4395 40 34" target="_blank" title="Llámenos">
									<span class="custom-call-to-action mt-xlg">
										<span class="action-title text-color-primary">Llámenos ahora</span>
										<span class="action-info text-color-light">55 4395 4034</span>
									</span>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <a class="text-decoration-none" href="mail:soluciones@work-n-office.com" target="_blank"
                           title="Escríbanos ahora">
									<span class="custom-call-to-action mt-xlg">
										<span class="action-title text-color-primary">Escríbanos ahora</span>
										<span class="action-info text-color-light">soluciones@work-n-office.com</span>
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
                        <h2 class="font-weight-bold text-color-dark">- Nosotros</h2>
                        <p class="pl-lg">Somos un grupo de empresas dedicadas a las soluciones empresariales. Aquí debemos describirnos mejor como grupo empresarial,
                            es muy importante lo que podamos exponer a la gente y no solo ser una "sección amarilla mas".
                            finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat
                            risus. Phasellus condimentum sapien vitae.</p>
                        <div class="col-md-6">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Profesinales Certificados</li>
                                <li><i class="fa fa-chevron-right"></i> Experiencia Comprobada</li>
                                <li><i class="fa fa-chevron-right"></i> Actualizaciones Fiscales</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Contabilidad al Día</li>
                                <li><i class="fa fa-chevron-right"></i> Excelente Servicio</li>
                                <li><i class="fa fa-chevron-right"></i> Excelente Equipo de Trabajo</li>
                            </ul>
                        </div>
                        <a class="btn btn-borders custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase"
                           href="demo-business-consulting-about-us.html">Saber más</a>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="content-grid custom-content-grid mt-xlg mb-lg">
                            <div class="row content-grid-row">
                                <div class="content-grid-item col-md-6 background-color-light">
                                    <div class="counters">
                                        <div class="counter custom-sm-counter-style">
                                            <img class="counter-icon"
                                                 src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/icons/icon-1.png" alt/>
                                            <strong class="text-color-primary custom-primary-font" data-to="15"
                                                    data-append="+">0</strong>
                                            <label>Años en Negocio</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-grid-item col-md-6">
                                    <div class="counters">
                                        <div class="counter margin-style-2 custom-sm-counter-style">
                                            <img class="counter-icon"
                                                 src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/icons/icon-2.png" alt/>
                                            <strong class="text-color-primary custom-primary-font" data-to="900"
                                                    data-append="+">0</strong>
                                            <label>Casos Exitosos</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content-grid-row">
                                <div class="content-grid-item col-md-6">
                                    <div class="counters">
                                        <div class="counter custom-sm-counter-style">
                                            <img class="counter-icon"
                                                 src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/icons/icon-3.png" alt/>
                                            <strong class="text-color-primary custom-primary-font" data-to="1200"
                                                    data-append="+">0</strong>
                                            <label>Clientes Satisfechos</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-grid-item col-md-6 background-color-light">
                                    <div class="counters">
                                        <div class="counter margin-style-2 custom-sm-counter-style">
                                            <img class="counter-icon"
                                                 src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/icons/icon-4.png" alt/>
                                            <strong class="text-color-primary custom-primary-font" data-to="70"
                                                    data-append="+">0</strong>
                                            <label>Consultores Profesionales</label>
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
                        <h2 class="font-weight-bold text-color-dark mb-md">- Servicios</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="demo-business-consulting-expertise-detail.html"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="0">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/expertise/expertise-1.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg">Contabilidad Corporativa</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                        finibus urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="demo-business-consulting-expertise-detail.html"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="100">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/expertise/expertise-2.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg">Asesoría Jurídica</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                        finibus urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="demo-business-consulting-expertise-detail.html"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="200">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/expertise/expertise-3.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg">Recorridos Virtuales 360</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                        finibus urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="demo-business-consulting-expertise-detail.html"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="300">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/expertise/expertise-4.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg">Arquitectura Empresarial</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                        finibus urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="demo-business-consulting-expertise-detail.html"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="400">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/expertise/expertise-5.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg">Reclutamiento de TI</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam
                                        id urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="demo-business-consulting-expertise-detail.html"
                           class="text-decoration-none appear-animation" data-appear-animation="fadeInUp"
                           data-appear-animation-delay="500">
                            <div class="feature-box custom-feature-box feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/expertise/expertise-6.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-lg">Apps Móviles / Web</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur diam
                                        id urna.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 center">
                        <a class="btn btn-borders custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase"
                           href="demo-business-consulting-expertise.html" title="View All">Conocer todos los servicios</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="custom-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold text-color-dark">- Nuestra estrategia</h2>
                        <div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots pl-xs pr-xs"
                             data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                            <div>
                                <div class="custom-step-item">
											<span class="step text-uppercase">
												Paso
												<span class="step-number text-color-primary">
													01
												</span>
											</span>
                                    <div class="step-content">
                                        <h4 class="mb-xlg">Priemra reunión<br> <strong>Entendiendo el problema</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                            finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat
                                            arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="custom-step-item">
											<span class="step text-uppercase">
												Paso
												<span class="step-number text-color-primary">
													02
												</span>
											</span>
                                    <div class="step-content">
                                        <h4 class="mb-xlg">Segunda reunión<br> <strong>Generado la solución</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                            finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat
                                            arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="custom-step-item">
											<span class="step text-uppercase">
												Paso
												<span class="step-number text-color-primary">
													03
												</span>
											</span>
                                    <div class="step-content">
                                        <h4 class="mb-xlg">Reunión final<br> <strong>Problema resuelto</strong></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                            finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat
                                            arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="font-weight-bold text-color-dark">- Preguntas frecuentes</h2>
                        <div class="panel-group without-bg custom-accordion-style-1" id="accordion7">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7"
                                           href="#collapse7One" aria-expanded="true">
                                            ¿Cuánto tiempo tardan en hacer un desarrollo de software a la medida?
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7One" class="accordion-body collapse in" aria-expanded="true">
                                    <div class="panel-body">
                                        <p>Depende de la solución de requerida, puede variar de una semana hasta varios meses.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse"
                                           data-parent="#accordion7" href="#collapse7Two" aria-expanded="false">
                                            Integer ac elit id est euismod pellentesque.
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7Two" class="accordion-body collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                            finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse"
                                           data-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
                                            Cras interdum neque sit amet justo maximus, ut sollicitudin eros.
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7Three" class="accordion-body collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                            finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse"
                                           data-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
                                            Pellentesque in ex molestie, convallis nulla ut, ornare erat.
                                            <span class="custom-accordion-plus"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse7Four" class="accordion-body collapse" aria-expanded="false"
                                     style="height: 0px;">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex
                                            finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
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
                        <h2 class="font-weight-bold text-color-dark mb-md">- Casos de Éxito</h2>
                    </div>
                </div>
            </div>
            <div class="owl-carousel show-nav-title custom-both-sides-shadow custom-dots-position-2 custom-dots-style-1 custom-xs-arrows-style-2"
                 data-plugin-options="{'items': 6, 'loop': false, 'dots': true, 'nav': false}">
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/cases/case-1.jpg" class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Recorridos Virtuales</span>
											<span class="custom-thumb-info-desc font-weight-light">Oficinas Virtuales Amuebladas</span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/cases/case-2.jpg" class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Contabilidad Corporativa</span>
											<span class="custom-thumb-info-desc font-weight-light">L y M Consultores</span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/cases/case-3.jpg" class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Asesoría Jurídica</span>
											<span class="custom-thumb-info-desc font-weight-light">Porto</span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/cases/case-4.jpg" class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Desarrollo de Software</span>
											<span class="custom-thumb-info-desc font-weight-light">Traducciones Científicas</span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/cases/case-5.jpg" class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Reclutamiento de TI</span>
											<span class="custom-thumb-info-desc font-weight-light">Darch BPS</span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/cases/case-1.jpg" class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Litigación</span>
											<span class="custom-thumb-info-desc font-weight-light">Paradoxx</span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/cases/case-2.jpg" class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Consultoría Empresarial</span>
											<span class="custom-thumb-info-desc font-weight-light">iMessenger</span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/cases/case-3.jpg" class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Consultoría de Marca</span>
											<span class="custom-thumb-info-desc font-weight-light">Theme Forest</span>
										</span>
										<span class="custom-arrow"></span>
									</span>
								</span>
                    </a>
                </div>
                <div>
                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
								<span class="thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
									<span class="thumb-info-wrapper m-none">
										<img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/cases/case-4.jpg" class="img-responsive"
                                             alt="">
									</span>
									<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
										<span class="custom-thumb-info-title">
											<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Desarrollo a la Medida</span>
											<span class="custom-thumb-info-desc font-weight-light">Grupo Termo</span>
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
                        <h2 class="font-weight-bold text-color-dark">- Testimonios</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel show-nav-title custom-dots-style-1 custom-dots-position custom-xs-arrows-style-2 mb-none"
                             data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
                            <div>
                                <div class="col-xs-8 col-sm-4 col-md-2 center pt-xlg">
                                    <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/testimonials/testimonial-author-2.jpg" alt
                                         class="img-responsive custom-rounded-image"/>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                        <blockquote class="pb-sm">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus
                                                porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque
                                                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce
                                                ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et
                                                tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                        </blockquote>
                                        <div class="testimonial-author pull-left">
                                            <p><strong>José Morales</strong><span class="text-color-primary">Director Comercial - Grupo Termo</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-xs-8 col-sm-4 col-md-2 center pt-xlg">
                                    <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/testimonials/testimonial-author-3.jpg" alt
                                         class="img-responsive custom-rounded-image"/>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-10">
                                    <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                        <blockquote class="pb-sm">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus
                                                porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem
                                                ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque
                                                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce
                                                ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et
                                                tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                        </blockquote>
                                        <div class="testimonial-author pull-left">
                                            <p><strong>Batsi Cárdenas</strong><span class="text-color-primary">CEO &amp; Co-Fundadora - Icognitis</span>
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
                    <div class="col-sm-6 col-md-8">
                        <div class="looking-for-box">
                            <h2>- <span class="text-lg custom-secondary-font">¿Busca ayuda con su empresa?</span><br>
                                ¿Tiene algún problema Fiscal, Contable o de Sistemas?</h2>
                            <p>Agende una cita con nosotros ahora mismo</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <a class="text-decoration-none" href="tel:+00112304567" target="_blank" title="Call Us Now">
									<span class="custom-call-to-action white-border text-color-light mt-xlg">
										<span class="action-title">Llámenos ahora</span>
										<span class="action-info">55 4395 4034</span>
									</span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <a class="text-decoration-none" href="mail:mail@example.com" target="_blank"
                           title="Email Us Now">
									<span class="custom-call-to-action white-border text-color-light mt-xlg">
										<span class="action-title">Escríbanos ahora</span>
										<span class="action-info">soluciones@work-n-office.com</span>
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
                        <h2 class="font-weight-bold text-color-dark">- Últimas Noticias</h2>
                    </div>
                </div>
                <div class="row">
                    <article class="blog-post">
                        <div class="col-sm-8 col-md-5">
                            <div class="blog-post-image-wrapper">
                                <img src="<?php echo cdn_assets();?>assets/img/demos/business-consulting/blog/blog-1.jpg" alt
                                     class="img-responsive mb-lg"/>
                                <span class="blog-post-date background-color-primary text-color-light font-weight-bold">
											20
											<span class="month-year font-weight-light">
												Ene-17
											</span>
										</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <h2> Nuevos cambios a la miscelanea fiscal 2017</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna
                                tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus.
                                Phasellus condimentum sapien vi.</p>
                            <hr class="solid">
                            <div class="post-infos">
										<span class="info posted-by">
											Publicado por:
											<span class="post-author font-weight-semibold text-color-dark">
												Raquel Butanda
											</span>
										</span>
                                <span class="info comments ml-xlg">
											Comments:
											<span class="comments-number text-color-primary font-weight-semibold">
												15
											</span>
										</span>
                                <span class="info like ml-xlg">
											Like:
											<span class="like-number font-weight-semibold custom-color-red">
												38
											</span>
										</span>
                            </div>
                            <a class="btn btn-borders custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mt-xlg"
                               href="demo-business-consulting-blog-detail.html" title="Read More">Leer más</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>


        <section class="section section-text-light section-background m-none"
                 style="background: url('<?php echo cdn_assets();?>assets/img/demos/business-consulting/contact/contact-background.jpg'); background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold">- Conózcanos</h2>
                        <p class="custom-opacity-font">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                            volutpat ex finibus urna tincidunt, auctor ullamcorper.</p>
                        <div class="col-md-6 pl-none">
                            <h4 class="mb-xs">Llame</h4>
                            <a href="tel:+1234567890" class="text-decoration-none" target="_blank" title="Call Us">
										<span class="custom-call-to-action-2 text-color-light text-sm custom-opacity-font">
											Tel
											<span class="info text-lg">
												123-456-7890
											</span>
										</span>
                            </a>
                        </div>
                        <div class="col-md-6 pl-none custom-sm-margin-top">
                            <h4 class="mb-xs">Nuestra ubicación</h4>
                            <p class="custom-opacity-font">Porto Business Consulting 123 Porto Blvd, Suite 100 New York,
                                NY</p>
                        </div>
                        <div class="col-md-6 pl-none">
                            <h4 class="mb-xs">Escríbanos</h4>
                            <a href="mail:mail@example.com" class="text-decoration-none" target="_blank"
                               title="Mail Us">
										<span class="custom-call-to-action-2 text-color-light text-sm custom-opacity-font">
											Email
											<span class="info text-lg">
												mail@example.com
											</span>
										</span>
                            </a>
                        </div>
                        <div class="col-md-6 pl-none custom-sm-margin-top">
                            <h4 class="mb-xs">Redes Sociales</h4>
                            <ul class="social-icons custom-social-icons-style-1 custom-opacity-font">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social-icons-twitter">
                                    <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social-icons-instagram">
                                    <a href="http://www.instagram.com/" target="_blank" title="Instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 custom-sm-margin-top">
                        <h2 class="font-weight-bold">- Escríbenos</h2>
                        <form id="contactForm" class="custom-contact-form-style-1" action="php/contact-form.php"
                              method="POST">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="custom-input-box">
                                            <i class="icon-user icons text-color-primary"></i>
                                            <input type="text" value="" data-msg-required="Please enter your name."
                                                   maxlength="100" class="form-control" name="name" id="name"
                                                   placeholder="Nombre*" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="custom-input-box">
                                            <i class="icon-envelope icons text-color-primary"></i>
                                            <input type="email" value=""
                                                   data-msg-required="Please enter your email address."
                                                   data-msg-email="Please enter a valid email address." maxlength="100"
                                                   class="form-control" name="email" id="email" placeholder="Email*"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="custom-input-box">
                                            <i class="icon-bubble icons text-color-primary"></i>
                                            <textarea maxlength="5000" data-msg-required="Please enter your message."
                                                      rows="10" class="form-control" name="message" id="message"
                                                      placeholder="Mensaje*" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Envíar ahora"
                                           class="btn btn-borders custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase"
                                           data-loading-text="Cargando<?php echo cdn_assets();?>.">
                                </div>
                            </div>
                        </form>
                    </div>
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
