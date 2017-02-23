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
                        <h1>- Casos <span>Casos Exitosos</span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="<?php echo base_url_lang(); ?>">Inicio</a></li>
                            <li class="active">Casos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-xs pb-xl mb-md">
                <div class="col-md-12">
                    <ul class="nav nav-pills sort-source mb-xlg" data-sort-id="portfolio" data-option-key="filter"
                        data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                        <li data-option-value="*" class="active"><a
                                    class="btn btn-borders custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase"
                                    href="#">Mostrar todos</a></li>
                        <li data-option-value=".juridico">
                            <a class="btn btn-borders custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase"
                                    href="#">Asesoría Jurídica</a>
                        </li>
                        <li data-option-value=".contabilidad"><a
                                    class="btn btn-borders custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase"
                                    href="#">Contabilidad Corporativa</a>
                        </li>
                        <li data-option-value=".recorridos">
                            <a class="btn btn-borders custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase"
                                    href="#">Recorridos Virtuales</a>
                        </li>
                        <li data-option-value=".reclutamiento">
                            <a class="btn btn-borders custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase"
                               href="#">Reclutamiento de TI</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="sort-destination-loader sort-destination-loader-showing">
                            <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                                <li class="col-md-4 isotope-item contabilidad">
                                    <a href="<?php echo base_url_lang() . 'casos/caso/icognitis' ?>" class="text-decoration-none">
                                        <span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/contabilidad_2.jpg"
                                                     class="img-responsive" alt="">
                                            </span>
                                            <span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
                                                <span class="custom-thumb-info-title">
                                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Contabilidad Corporativa</span>
                                                    <span class="custom-thumb-info-desc font-weight-light">Icognitis</span>
                                                </span>
                                                <span class="custom-arrow"></span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item juridico">
                                    <a href="<?php echo base_url_lang() . 'casos/caso/sucesion' ?>" class="text-decoration-none">
                                        <span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/juridico.jpg"
                                                     class="img-responsive" alt="">
                                            </span>
                                            <span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
                                                <span class="custom-thumb-info-title">
                                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Asesoría Fiscal</span>
                                                    <span class="custom-thumb-info-desc font-weight-light">Sucesión</span>
                                                </span>
                                                <span class="custom-arrow"></span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item recorridos">
                                    <a href="<?php echo base_url_lang() . 'casos/caso/oficinas-virtuales-amuebladas' ?>" class="text-decoration-none">
                                        <span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/software.jpg"
                                                     class="img-responsive" alt="">
                                            </span>
                                            <span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
                                                <span class="custom-thumb-info-title">
                                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Recorridos Virtuales 360°</span>
                                                    <span class="custom-thumb-info-desc font-weight-light">Oficinas Virtuales Amuebladas</span>
                                                </span>
                                                <span class="custom-arrow"></span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item juridico">
                                    <a href="<?php echo base_url_lang() . 'casos/caso/recuperacion-de-cartera' ?>" class="text-decoration-none">
                                        <span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-4.jpg"
                                                     class="img-responsive" alt="">
                                            </span>
                                            <span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
                                                <span class="custom-thumb-info-title">
                                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Asesoría Fiscal</span>
                                                    <span class="custom-thumb-info-desc font-weight-light">Recuperación de Cartera</span>
                                                </span>
                                                <span class="custom-arrow"></span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item juridico">
                                    <a href="<?php echo base_url_lang() . 'casos/caso/constitucion-de-sociedad-e-inversion-extranjera' ?>" class="text-decoration-none">
                                        <span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/case-2.jpg"
                                                     class="img-responsive" alt="">
                                            </span>
                                            <span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
                                                <span class="custom-thumb-info-title">
                                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Asesoría Fiscal</span>
                                                    <span class="custom-thumb-info-desc font-weight-light">Constitución de Sociedad e Inversión Extranjera</span>
                                                </span>
                                                <span class="custom-arrow"></span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="col-md-4 isotope-item reclutamiento">
                                    <a href="<?php echo base_url_lang() . 'casos/caso/darch' ?>" class="text-decoration-none">
                                        <span class="thumb-info custom-thumb-info-style-1 mb-xlg pb-xs thumb-info-hide-wrapper-bg">
                                            <span class="thumb-info-wrapper m-none">
                                                <img src="<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/cases/reclutamiento.jpg"
                                                     class="img-responsive" alt="">
                                            </span>
                                            <span class="thumb-info-caption background-color-secondary p-md pt-xlg pb-xlg">
                                                <span class="custom-thumb-info-title">
                                                    <span class="custom-thumb-info-name font-weight-semibold text-color-dark text-md">Reclutamiento de TI</span>
                                                    <span class="custom-thumb-info-desc font-weight-light">Darch</span>
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