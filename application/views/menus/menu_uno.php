<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<header id="header"
        class="header-narrow header-semi-transparent header-transparent-sticky-deactive custom-header-transparent-bottom-border"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}"
        style="min-height:125px;">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-logo">
                        <a href="<?php echo base_url_lang(); ?>">
                            <img alt="<?php echo WNO;?>" width="163" height="40" data-width="210" data-height="54" data-mobile-width="163" data-mobile-height="40" data-sticky-width="163" data-sticky-height="40" data-sticky-top="33" src="<?php echo cdn_assets();?>/assets/img/wno-menu-dark.png">
                        </a>
                    </div>
                </div>
                <div class="header-column">
                    <div class="header-row">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="hidden-xs">
                                    <span class="ws-nowrap"><i class="fa fa-phone"></i> <?php echo TEL_VENTAS;?></span>
                                </li>
                                <li class="hidden-xs hidden-sm">
                                    <span class="ws-nowrap"><i class="fa fa-envelope"></i> <?php echo MAIL_CONTACTO;?></span>
                                </li>
                                <?php echo menu_lang_sel();?>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-row">
                        <div class="header-nav header-nav-dark-dropdown">
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                    data-target=".header-nav-main">
                                <i class="fa fa-bars"></i>
                            </button>
                            <div class="header-nav-main header-nav-main-square custom-header-nav-main-effect-1 collapse">
                                <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="<?php echo ($menu_root=='inicio')?'active':'';?>">
                                            <a href="<?php echo base_url_lang();?>">
                                                <?php echo trans_line('menu_inicio');?>
                                            </a>
                                        </li>
                                        <li class="<?php echo ($menu_root=='nosotros')?'active':'';?>">
                                            <a href="<?php echo base_url_lang();?>nosotros">
                                                <?php echo trans_line('menu_nosotros');?>
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-primary <?php echo ($menu_root=='servicios')?'active':'';?>">
                                            <a class="dropdown-toggle"
                                               href="<?php echo base_url_lang();?>servicios">
                                                <?php echo trans_line('menu_servicios');?>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="<?php echo base_url_lang();?>servicios/coaching-empresarial">
                                                        <?php echo trans_line('menu_serv_coaching');?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url_lang();?>servicios/contabilidad-corporativa">
                                                        <?php echo trans_line('menu_serv_contabilidad');?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url_lang();?>servicios/asesoria-juridica">
                                                        <?php echo trans_line('menu_serv_juridico');?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url_lang();?>servicios/recorridos-virtuales">
                                                        <?php echo trans_line('menu_serv_recorridos');?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url_lang();?>servicios/desarrollo-de-software">
                                                        <?php echo trans_line('menu_serv_software');?>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url_lang();?>servicios/reclutamiento-de-ti">
                                                        <?php echo trans_line('menu_serv_reclutamiento');?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="<?php echo ($menu_root=='casos')?'active':'';?>">
                                            <a href="<?php echo base_url_lang();?>casos">
                                                <?php echo trans_line('menu_casos');?>
                                            </a>
                                        </li>
                                        <li class="<?php echo ($menu_root=='testimonios')?'active':'';?>">
                                            <a href="<?php echo base_url_lang();?>testimonios">
                                                <?php echo trans_line('menu_testimonios');?>
                                            </a>
                                        </li>
                                        <li class="<?php echo ($menu_root=='contacto')?'active':'';?>">
                                            <a href="<?php echo base_url_lang();?>contacto">
                                                <?php echo trans_line('menu_contacto');?>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
