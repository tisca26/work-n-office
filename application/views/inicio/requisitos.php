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
            <h1><?php echo trans_line('requisitos_page_title');?></h1>
            <span><?php echo trans_line('requisitos_page_sub');?></span>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url_lang();?>">OVA</a></li>
                <li class="active"><?php echo trans_line('requisitos_page_title');?></li>
            </ol>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content" style="margin-bottom:0px;">
        <div class="content-wrap">
            <div class="container clearfix">
                <h3><?php echo trans_line('requisitos_titulo_1');?><strong><?php echo trans_line('requisitos_titulo_1_strong');?></strong>?</h3>
                <div>
                    <ul class="iconlist">
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_1_1');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_1_2');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_1_3');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_1_4');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_1_5');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_1_6');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_1_7');?></li>
                    </ul>
                </div>
                <div class="divider">
                    <i class="icon-circle"></i>
                </div>
                <h3><?php echo trans_line('requisitos_titulo_2');?><strong><?php echo trans_line('requisitos_titulo_2_strong');?></strong>?</h3>
                <div>
                    <ul class="iconlist">
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_2_1');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_2_2');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_2_3');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_2_4');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_2_5');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_2_6');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_2_7');?></li>
                        <li><i class="icon-file-alt"></i><?php echo trans_line('requisitos_2_8');?></li>
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
