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
                        <h1>- Servicios <span>¿Qué hacemos?</span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="demo-business-consulting.html">Inicio</a></li>
                            <li class="active">Servicios</li>
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
                                    <h4 class="font-weight-normal text-xl">Corporate Finance</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu semper tellus, at condimentum tortor. Curabitur pulvinar orci nunc, at facilisis nisl vehicula tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce eget est viverra, venenatis.</p>
                                    <a href="demo-business-consulting-expertise-detail.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/expertise/expertise-2.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-xl">Asesoría Fiscal</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu semper tellus, at condimentum tortor. Curabitur pulvinar orci nunc, at facilisis nisl vehicula tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce eget est viverra, venenatis.</p>
                                    <a href="demo-business-consulting-expertise-detail.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature-box custom-feature-box custom-feature-box-active feature-box-style-2">
                                <div class="feature-box-icon">
                                    <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/expertise/expertise-3.jpg" alt="">
                                </div>
                                <div class="feature-box-info ml-md">
                                    <h4 class="font-weight-normal text-xl">Recorridos Virtuales 360</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu semper tellus, at condimentum tortor. Curabitur pulvinar orci nunc, at facilisis nisl vehicula tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce eget est viverra, venenatis.</p>
                                    <a href="demo-business-consulting-expertise-detail.html">Read More <i class="fa fa-long-arrow-right"></i></a>
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
                                    <h4 class="font-weight-normal text-xl">Desarrollo de Software</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu semper tellus, at condimentum tortor. Curabitur pulvinar orci nunc, at facilisis nisl vehicula tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce eget est viverra, venenatis.</p>
                                    <a href="demo-business-consulting-expertise-detail.html">Read More <i class="fa fa-long-arrow-right"></i></a>
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
                                    <h4 class="font-weight-normal text-xl">Reclutamiento de TI</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu semper tellus, at condimentum tortor. Curabitur pulvinar orci nunc, at facilisis nisl vehicula tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce eget est viverra, venenatis.</p>
                                    <a href="demo-business-consulting-expertise-detail.html">Read More <i class="fa fa-long-arrow-right"></i></a>
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
                                    <h4 class="font-weight-normal text-xl">Arquitectura Empresarial</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eu semper tellus, at condimentum tortor. Curabitur pulvinar orci nunc, at facilisis nisl vehicula tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce eget est viverra, venenatis.</p>
                                    <a href="demo-business-consulting-expertise-detail.html">Read More <i class="fa fa-long-arrow-right"></i></a>
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