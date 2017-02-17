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
                    <p class="lead mb-xl">
                        Work & Office es un grupo de empresas que abarca una gama de servicios especializados en las áreas funcionales corporativas. Nuestra excelencia individual se ve reforzada por la integración. Buscamos atender las necesidades y situaciones que nuestros clientes presenten a lo largo de su desarrollo empresarial, ofreciéndoles soluciones basadas en nuestra experiencia y conocimientos.
                    </p>

                    <p>
                        Generamos soluciones que se ajustan a su situación actual, generando un lazo de confianza derivado de nuestra experiencia y conocimiento. Nos enfocamos en:
                    </p>

                    <div class="row pb-xl">
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Desarrollo de Software</li>
                                <li><i class="fa fa-chevron-right"></i> Coaching Empresarial</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Asesoría Jurídica</li>
                                <li><i class="fa fa-chevron-right"></i> Contabilidad Corporativa</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Recorridos Virtuales</li>
                                <li><i class="fa fa-chevron-right"></i> Reclutamiento de TI</li>
                            </ul>
                        </div>
                    </div>

                    <p>
                        Todas las empresas del Grupo Work & Office, trabajan en un nivel altamente profesional y están comprometidas con los más altos estándares de calidad y servicio. Los efectos de sinergia de las diversas filiales del grupo, permiten a la empresa suministrar servicios individuales para tareas integrales.
                    </p>

                    <p>
                        Con la mejora continua de nuestros procesos, así como con el avance tecnológico, somos capaces de ofrecer a nuestros clientes las soluciones adaptadas, modernas y orientadas al futuro que esperan. Estamos convencidos que la atención, confianza y experiencia son parte fundamental de un buen servicio, es por eso que contamos con profesionales de alta calidad, especializados en su rama que podrán ayudarte en la búsqueda de la mejor solución.
                    </p>

                    <div class="row content-grid-row pb-md pt-xl">
                        <div class="content-grid-item col-md-3">
                            <div class="counters mb-xl">
                                <div class="counter custom-sm-counter-style">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-1.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="<?php echo WNO_ANOS_EXPERIENCIA; ?>" data-append="+">0</strong>
                                    <label>Años en Negocio</label>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-item col-md-3">
                            <div class="counters mb-xl">
                                <div class="counter custom-sm-counter-style">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-2.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="<?php echo WNO_CASOS_EXITOSOS; ?>" data-append="+">0</strong>
                                    <label>Casos Exitosos</label>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-item col-md-3">
                            <div class="counters mb-xl">
                                <div class="counter">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-3.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="<?php echo WNO_CLIENTES_SATISFECHOS; ?>" data-append="+">0</strong>
                                    <label>Clientes Satisfechos</label>
                                </div>
                            </div>
                        </div>
                        <div class="content-grid-item col-md-3 background-color-light">
                            <div class="counters mb-xl">
                                <div class="counter">
                                    <img class="counter-icon" src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/icons/icon-4.png" alt />
                                    <strong class="text-color-primary custom-primary-font pt-md pb-none" data-to="<?php echo WNO_CONSULTORES; ?>" data-append="+">0</strong>
                                    <label>Consultores Profesionales</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>
                        Los desafíos que presenta la situación empresarial en nuestro país nos motivan a seguir creciendo y ayudar a nuestros clientes a superarse. Cuando se trata del éxito de su empresa, la rapidez y flexibilidad marcan la diferencia, es por esto que siempre tenemos en cuenta las últimas tendencias en software, cambios a la miscelánea fiscal y reglamentos autorizados, colaborando estrechamente con usted para desarrollar una solución que cubra sus necesidades.
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
                        La investigación, innovación y crecimiento son parte de nuestra rutina diaria para entregar el mejor servicio posible y hacer crecer a nuestros clientes.
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
