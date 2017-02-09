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
                        <h1>- Casos <span>Casos Exitosos</span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="demo-business-consulting.html">Inicio</a></li>
                            <li class="active">Casos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-xs pb-xl mb-md">
                <div class="col-md-12">

                    <ul class="nav nav-pills sort-source mb-xlg" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                        <li data-option-value="*" class="active"><a class="btn btn-borders custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase" href="#">Show All</a></li>
                        <li data-option-value=".economic"><a class="btn btn-borders custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase" href="#">Economic</a></li>
                        <li data-option-value=".strategic"><a class="btn btn-borders custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase" href="#">Strategic</a></li>
                        <li data-option-value=".tech"><a class="btn btn-borders custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase" href="#">Tech</a></li>
                    </ul>

                    <div class="row">

                        <div class="sort-destination-loader sort-destination-loader-showing">
                            <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                                <li class="col-md-4 isotope-item economic">
                                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
												<span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
													<span class="thumb-info-wrapper m-none">
														<img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-1.jpg" class="img-responsive" alt="">
													</span>
													<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
														<span class="custom-thumb-info-title">
															<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Corporate Finance</span>
															<span class="custom-thumb-info-desc font-weight-light">Okler Themes</span>
														</span>
														<span class="custom-arrow"></span>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item economic">
                                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
												<span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
													<span class="thumb-info-wrapper m-none">
														<img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-2.jpg" class="img-responsive" alt="">
													</span>
													<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
														<span class="custom-thumb-info-title">
															<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Asesoría Fiscal</span>
															<span class="custom-thumb-info-desc font-weight-light">Envato</span>
														</span>
														<span class="custom-arrow"></span>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item strategic">
                                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
												<span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
													<span class="thumb-info-wrapper m-none">
														<img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-3.jpg" class="img-responsive" alt="">
													</span>
													<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
														<span class="custom-thumb-info-title">
															<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Economic Consultanting</span>
															<span class="custom-thumb-info-desc font-weight-light">Porto</span>
														</span>
														<span class="custom-arrow"></span>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item tech">
                                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
												<span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
													<span class="thumb-info-wrapper m-none">
														<img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-4.jpg" class="img-responsive" alt="">
													</span>
													<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
														<span class="custom-thumb-info-title">
															<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Arquitectura Empresarial</span>
															<span class="custom-thumb-info-desc font-weight-light">GetCustom</span>
														</span>
														<span class="custom-arrow"></span>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item economic">
                                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
												<span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
													<span class="thumb-info-wrapper m-none">
														<img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-5.jpg" class="img-responsive" alt="">
													</span>
													<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
														<span class="custom-thumb-info-title">
															<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Strategic</span>
															<span class="custom-thumb-info-desc font-weight-light">Jet Orange</span>
														</span>
														<span class="custom-arrow"></span>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item strategic">
                                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
												<span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
													<span class="thumb-info-wrapper m-none">
														<img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-1.jpg" class="img-responsive" alt="">
													</span>
													<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
														<span class="custom-thumb-info-title">
															<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Litigation</span>
															<span class="custom-thumb-info-desc font-weight-light">Paradoxx</span>
														</span>
														<span class="custom-arrow"></span>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item economic">
                                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
												<span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
													<span class="thumb-info-wrapper m-none">
														<img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-2.jpg" class="img-responsive" alt="">
													</span>
													<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
														<span class="custom-thumb-info-title">
															<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Consulting</span>
															<span class="custom-thumb-info-desc font-weight-light">iMessenger</span>
														</span>
														<span class="custom-arrow"></span>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item tech">
                                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
												<span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
													<span class="thumb-info-wrapper m-none">
														<img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-3.jpg" class="img-responsive" alt="">
													</span>
													<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
														<span class="custom-thumb-info-title">
															<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Brand Consulting</span>
															<span class="custom-thumb-info-desc font-weight-light">Theme Forest</span>
														</span>
														<span class="custom-arrow"></span>
													</span>
												</span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item economic">
                                    <a href="demo-business-consulting-cases-detail.html" class="text-decoration-none">
												<span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
													<span class="thumb-info-wrapper m-none">
														<img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/cases/case-4.jpg" class="img-responsive" alt="">
													</span>
													<span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
														<span class="custom-thumb-info-title">
															<span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Corporate Consulting</span>
															<span class="custom-thumb-info-desc font-weight-light">Tucson</span>
														</span>
														<span class="custom-arrow"></span>
													</span>
												</span>
                                    </a>
                                </li>
                            </ul>
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