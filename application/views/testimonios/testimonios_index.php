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
                        <h1>- Testimonios <span>Lo que nuestros clientes dicen de nosotros</span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="demo-business-consulting.html">Inicio</a></li>
                            <li class="active">Testimonios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-xs pb-xl mb-md">
                <div class="col-md-12">

                    <div class="row mb-xl pb-xl">
                        <div class="col-xs-8 col-sm-4 col-md-2 center pt-xlg">
                            <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/testimonials/testimonial-author-2.jpg" alt class="img-responsive custom-rounded-image" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10">
                            <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                <blockquote class="pb-sm">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                </blockquote>
                                <div class="testimonial-author pull-left">
                                    <p><strong>John Smith</strong><span class="text-color-primary">CEO &amp; Founder - Okler</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-xl pb-xl">
                        <div class="col-xs-8 col-sm-4 col-md-2 center pt-xlg">
                            <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/testimonials/testimonial-author-3.jpg" alt class="img-responsive custom-rounded-image" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10">
                            <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                <blockquote class="pb-sm">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                </blockquote>
                                <div class="testimonial-author pull-left">
                                    <p><strong>John Smith</strong><span class="text-color-primary">CEO &amp; Founder - Okler</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-xl pb-xl">
                        <div class="col-xs-8 col-sm-4 col-md-2 center pt-xlg">
                            <img src="<?php echo cdn_assets();?>/assets/img/demos/business-consulting/testimonials/testimonial-author-1.jpg" alt class="img-responsive custom-rounded-image" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10">
                            <div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
                                <blockquote class="pb-sm">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce ante tellus, convallis non consectetur sed, pharetra nec ex. Aliquam et tortor nisi. Duis mollis diam nec elit volutpat suscipit.</p>
                                </blockquote>
                                <div class="testimonial-author pull-left">
                                    <p><strong>John Smith</strong><span class="text-color-primary">CEO &amp; Founder - Okler</span></p>
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