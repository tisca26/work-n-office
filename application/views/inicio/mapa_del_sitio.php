<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo trans_line('language');?>">
<head>
    <!-- Carga extra -->
    <?php $this->cargar_elementos_manager->carga_simple('elementos_extras/head_first'); ?>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="<?php echo OVA;?>"/>
    <meta name="description" content="<?php echo trans_line('metatag_desc'); ?>">
    <meta name="keywords" content="<?php echo trans_line('metatag_keywords'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/style.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/magnific-popup.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/responsive.css" type="text/css"/>

    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/colors.css" type="text/css"/>


    <!-- Document Title
    ============================================= -->
    <title><?php echo trans_line('title_tag'); ?></title>
    <!-- Carga extra -->
    <?php $this->cargar_elementos_manager->carga_simple('elementos_extras/head_last'); ?>

</head>

<body class="stretched no-transition">
<!-- Carga extra  -->
<?php $this->cargar_elementos_manager->carga_simple('elementos_extras/body_first'); ?>
<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Menu generado -->
    <?php $this->menu_manager->generar_menu(); ?>
    <!-- /Menu generado -->

    <section id="page-title" class="bgcolor page-title-dark page-title-mini" >
        <div class="container clearfix">
            <h1><?php echo trans_line('mapa_page_title');?></h1>
            <span><?php echo trans_line('mapa_page_sub');?></span>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url_lang();?>">OVA</a></li>
                <li class="active"><?php echo trans_line('mapa_page_title');?></li>
            </ol>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content" style="margin-bottom:0px;">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="col_one_third nobottommargin">
                    <h3><?php echo trans_line('mapa_titulo_1');?></h3>
                    <ul class="iconlist nobottommargin">
                        <li>
                            <i class="icon-home2"></i>
                            <a href="<?php echo base_url_lang();?>"><?php echo trans_line('mapa_sub_1_1');?></a>
                            <ul>
                                <li>
                                    <i class="icon-world"></i>
                                    <a href="<?php echo base_url_lang();?>oficinas-virtuales"><?php echo trans_line('mapa_sub_1_2');?></a>
                                </li>
                                <li>
                                    <i class="icon-building"></i>
                                    <a href="<?php echo base_url_lang();?>oficinas-amuebladas"><?php echo trans_line('mapa_sub_1_3');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang();?>recorrido-360"><?php echo trans_line('mapa_sub_1_5');?></a>
                                </li>
                                <li>
                                    <i class="icon-check"></i>
                                    <a href="<?php echo base_url_lang();?>requisitos"><?php echo trans_line('mapa_sub_1_7');?></a>
                                </li>
                                <li>
                                    <i class="icon-email3"></i>
                                    <a href="<?php echo base_url_lang();?>contacto"><?php echo trans_line('mapa_sub_1_6');?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col_one_third nobottommargin">
                    <h3><?php echo trans_line('mapa_titulo_2');?></h3>
                    <ul class="iconlist nobottommargin">
                        <li>
                            <i class="icon-sitemap"></i>
                            <a href="<?php echo base_url_lang();?>mapa-del-sitio"><?php echo trans_line('mapa_sub_2_1');?></a>
                        </li>
                        <li class="no">
                            <i class="icon-question"></i>
                            <a href="<?php echo base_url_lang();?>FAQ"><?php echo trans_line('mapa_sub_2_2');?></a>
                        </li>
                        <li>
                            <i class="icon-star"></i>
                            <a href="#promo" data-lightbox="inline"><?php echo trans_line('mapa_sub_2_3');?></a>
                        </li>
                        <li>
                            <i class="icon-file"></i>
                            <a href="<?php echo cdn_assets();?>assets/docs/Aviso-de-privacidad.pdf" target="_blank"><?php echo trans_line('mapa_sub_2_4');?></a>
                        </li>
                    </ul>
                </div>
                <div class="col_one_third col_last nobottommargin">
                    <h3><?php echo trans_line('mapa_titulo_6');?></h3>
                    <ul class="iconlist nobottommargin">
                        <li>
                            <i class="icon-caret-right"></i>
                            <span><?php echo SUC_1_NOMBRE;?></span>
                            <ul>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_1_NOMBRE));?>/recepcion"><?php echo trans_line('mapa_sub_rec');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_1_NOMBRE));?>/oficina"><?php echo trans_line('mapa_sub_ofi');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_1_NOMBRE));?>/sala-de-juntas"><?php echo trans_line('mapa_sub_jun');?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="icon-caret-right"></i>
                            <span><?php echo SUC_2_NOMBRE;?></span>
                            <ul>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_2_NOMBRE));?>/recepcion"><?php echo trans_line('mapa_sub_rec');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_2_NOMBRE));?>/oficina"><?php echo trans_line('mapa_sub_ofi');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_2_NOMBRE));?>/sala-de-juntas"><?php echo trans_line('mapa_sub_jun');?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="icon-caret-right"></i>
                            <span><?php echo SUC_3_NOMBRE;?></span>
                            <ul>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_3_NOMBRE));?>/recepcion"><?php echo trans_line('mapa_sub_rec');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_3_NOMBRE));?>/oficina"><?php echo trans_line('mapa_sub_ofi');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_3_NOMBRE));?>/sala-de-juntas"><?php echo trans_line('mapa_sub_jun');?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="icon-caret-right"></i>
                            <span><?php echo SUC_4_NOMBRE;?></span>
                            <ul>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_4_NOMBRE));?>/recepcion"><?php echo trans_line('mapa_sub_rec');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_4_NOMBRE));?>/oficina"><?php echo trans_line('mapa_sub_ofi');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_4_NOMBRE));?>/sala-de-juntas"><?php echo trans_line('mapa_sub_jun');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_4_NOMBRE));?>/sala-de-capacitacion"><?php echo trans_line('mapa_sub_cap');?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="icon-caret-right"></i>
                            <span><?php echo SUC_5_NOMBRE;?></span>
                            <ul>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_5_NOMBRE));?>/recepcion"><?php echo trans_line('mapa_sub_rec');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_5_NOMBRE));?>/oficina"><?php echo trans_line('mapa_sub_ofi');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_5_NOMBRE));?>/sala-de-juntas"><?php echo trans_line('mapa_sub_jun');?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="icon-caret-right"></i>
                            <span><?php echo SUC_6_NOMBRE;?></span>
                            <ul>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_6_NOMBRE));?>/recepcion"><?php echo trans_line('mapa_sub_rec');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_6_NOMBRE));?>/oficina"><?php echo trans_line('mapa_sub_ofi');?></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="icon-caret-right"></i>
                            <span><?php echo SUC_7_NOMBRE;?></span>
                            <ul>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_7_NOMBRE));?>/recepcion"><?php echo trans_line('mapa_sub_rec');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_7_NOMBRE));?>/oficina"><?php echo trans_line('mapa_sub_ofi');?></a>
                                </li>
                                <li>
                                    <i class="icon-picture"></i>
                                    <a href="<?php echo base_url_lang(); ?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_7_NOMBRE));?>/sala-de-juntas"><?php echo trans_line('mapa_sub_jun');?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- #content end -->

    <!-- Footer -->
    <?php $this->cargar_elementos_manager->carga_con_lang('footers/footer_uno'); ?>
    <!-- /Footer -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/functions.js"></script>
<!-- Carga extra  -->
<?php $this->cargar_elementos_manager->carga_simple('elementos_extras/body_last'); ?>
</body>
</html>
