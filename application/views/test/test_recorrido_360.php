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
    <link rel="stylesheet" href="<?php echo cdn_assets(); ?>assets/css/panorama.css" type="text/css"/>


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
            <h1><?php echo SUC_1_NOMBRE;?></h1>
            <span><?php echo trans_line('suc_page_sub');?></span>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url_lang();?>">OVA</a></li>
                <li><a href="<?php echo base_url_lang();?>recorrido-360"><?php echo trans_line('suc_recorrido');?></a></li>
                <li><a href="<?php echo base_url_lang();?>recorrido-360/<?php echo strtolower(str_replace(' ','-',SUC_1_NOMBRE));?>"><?php echo SUC_1_NOMBRE;?></a></li>
                <li class="active"><?php echo trans_line('suc_recorrido_2');?></li>
            </ol>
        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content" style="margin-bottom:0px;">
        <div class="content-wrap">

            <div class="container clearfix">
                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <div id="panorama"></div>

                    <input id="panoramaValue" type="text" value="assets/images/recorrido/" class="form-control input-sm">
                    <input class="button button-rounded button-small" type="button" value="Cargar" onclick="document.getElementById('panorama').innerHTML='';panorama.viewer('panorama', {'type': 'equirectangular','panorama': '<?php echo cdn_assets();?>'+document.getElementById('panoramaValue').value,'preview': '<?php echo cdn_assets();?>'+document.getElementById('panoramaValue').value,'hotSpotDebug': true})">

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget_links clearfix">

                            <h4><?php echo trans_line('suc_sucursales_titulo_1');?></h4>
                            <ul>
                                <li><a href="<?php echo base_url_lang(); ?>recorrido-360/cdmx/<?php echo strtolower(str_replace(' ','-',SUC_1_NOMBRE));?>"><div><?php echo SUC_1_NOMBRE;?></div></a></li>
                                <li><a href="<?php echo base_url_lang(); ?>recorrido-360/cdmx/<?php echo strtolower(str_replace(' ','-',SUC_2_NOMBRE));?>"><div><?php echo SUC_2_NOMBRE;?></div></a></li>
                                <li><a href="<?php echo base_url_lang(); ?>recorrido-360/cdmx/<?php echo strtolower(str_replace(' ','-',SUC_3_NOMBRE));?>"><div><?php echo SUC_3_NOMBRE;?></div></a></li>
                                <li><a href="<?php echo base_url_lang(); ?>recorrido-360/cdmx/<?php echo strtolower(str_replace(' ','-',SUC_4_NOMBRE));?>"><div><?php echo SUC_4_NOMBRE;?></div></a></li>
                                <li><a href="<?php echo base_url_lang(); ?>recorrido-360/cdmx/<?php echo strtolower(str_replace(' ','-',SUC_5_NOMBRE));?>"><div><?php echo SUC_5_NOMBRE;?></div></a></li>
                                <li><a href="<?php echo base_url_lang(); ?>recorrido-360/queretaro/<?php echo strtolower(str_replace(' ','-',SUC_6_NOMBRE));?>"><div><?php echo SUC_6_NOMBRE;?></div></a></li>
                                <li><a href="<?php echo base_url_lang(); ?>recorrido-360/queretaro/<?php echo strtolower(str_replace(' ','-',SUC_7_NOMBRE));?>"><div><?php echo SUC_7_NOMBRE;?></div></a></li>
                            </ul>
                        </div>

                        <div class="widget widget_links clearfix">

                            <h4><?php echo trans_line('suc_sucursales_titulo_2');?></h4>
                            <ul>
                                <li><a href="<?php echo base_url_lang(); ?>oficinas-virtuales"><div><?php echo trans_line('suc_otros_1');?></div></a></li>
                                <li><a href="<?php echo base_url_lang(); ?>oficinas-amuebladas"><div><?php echo trans_line('suc_otros_2');?></div></a></li>
                            </ul>
                        </div>


                        <div class="widget clearfix">

                            <h4><?php echo trans_line('suc_sucursales_contacto');?></h4>
                            <ul class="iconlist">
                                <li><i class="icon-call"></i><?php echo TEL_VENTAS;?></li>
                                <li><i class="icon-mail"></i><?php echo MAIL_CONTACTO;?></li>
                            </ul>

                            <a href="<?php echo FACEBOOK_OVA;?>" target="_blank" class="social-icon si-colored si-small si-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>

                            <a href="<?php echo TWITTER_OVA;?>" target="_blank" class="social-icon si-colored si-small si-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>

                            <a href="<?php echo GOOGLE_PLUS_OVA;?>" target="_blank" class="social-icon si-colored si-small si-gplus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google+">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>

                        </div>

                    </div>
                </div><!-- .sidebar end -->

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
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/panorama.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="<?php echo cdn_assets(); ?>assets/js/functions.js"></script>
<script>
    panorama.viewer('panorama', {
        "type": "equirectangular",
        "panorama": "<?php echo cdn_assets();?>assets/images/null.jpg",
        "hotSpotDebug": true
    });
</script>
<!-- Carga extra  -->
<?php $this->cargar_elementos_manager->carga_simple('elementos_extras/body_last'); ?>
</body>
</html>
