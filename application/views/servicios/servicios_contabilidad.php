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
                        <h1>- Corporate Finance <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="demo-business-consulting.html">Home</a></li>
                            <li><a href="demo-business-consulting-expertise.html">Expertise</a></li>
                            <li class="active">Corporate Finance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-xs pb-xl mb-md">
                <div class="col-md-8">

                    <p class="lead mb-xl">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

                    <p class="clearfix">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper.</p>

                    <div class="row pb-xl">
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Certified Professionals</li>
                                <li><i class="fa fa-chevron-right"></i> Former Chief Executives</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Real Estate Professionals</li>
                                <li><i class="fa fa-chevron-right"></i> Chartered Financial Analysts</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list list-icons list-icons-style-3 list-tertiary">
                                <li><i class="fa fa-chevron-right"></i> Nobel Laureate Economists</li>
                                <li><i class="fa fa-chevron-right"></i> Former Political Leaders</li>
                            </ul>
                        </div>
                    </div>

                    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

                    <div class="panel-group without-bg custom-accordion-style-1 pt-xl pb-xl" id="accordion7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion7" href="#collapse7One" aria-expanded="true">
                                        Praesent sit amet quam a lorem commodo tincidunt.
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7One" class="accordion-body collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Two" aria-expanded="false">
                                        Integer ac elit id est euismod pellentesque.
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7Two" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Three" aria-expanded="false">
                                        Cras interdum neque sit amet justo maximus, ut sollicitudin eros.
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7Three" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion7" href="#collapse7Four" aria-expanded="false">
                                        Pellentesque in ex molestie, convallis nulla ut, ornare erat.
                                        <span class="custom-accordion-plus"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse7Four" class="accordion-body collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat.</p>

                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>/assets/img/demos/business-consulting/cases/case-5.jpg" class="img-responsive mb-xl" alt="">

                    <h4 class="font-weight-bold text-color-dark mt-xlg pt-sm">- Our Strategy</h4>
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav numbered-dots pl-xs pr-xs" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
                        <div>
                            <div class="custom-step-item">
										<span class="step text-uppercase">
											Step
											<span class="step-number text-color-primary">
												01
											</span>
										</span>
                                <div class="step-content">
                                    <h4 class="mb-xlg">The first meeting<br> <strong>Understanding the Problem</strong></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-step-item">
										<span class="step text-uppercase">
											Step
											<span class="step-number text-color-primary">
												02
											</span>
										</span>
                                <div class="step-content">
                                    <h4 class="mb-xlg">The second meeting<br> <strong>Business Plan Consultant</strong></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="custom-step-item">
										<span class="step text-uppercase">
											Step
											<span class="step-number text-color-primary">
												03
											</span>
										</span>
                                <div class="step-content">
                                    <h4 class="mb-xlg">The final meeting<br> <strong>Problem Solved</strong></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper risus luctus. Nunc et feugiat arcu, in placerat risus. Phasellus condimentum sapien vitae odio.</p>
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