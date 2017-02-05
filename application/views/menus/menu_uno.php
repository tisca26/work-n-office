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
                        <a href="demo-business-consulting.html">
                            <img alt="Work n Office" width="auto" height="54" data-sticky-width="auto" data-sticky-height="40" data-sticky-top="33" src="<?php echo cdn_assets();?>assets/img/wno-menu-dark.png">
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
                                <li>
                                    <a href="#" class="dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <img src="<?php echo cdn_assets();?>assets/img/blank.gif" class="flag flag-us" alt="English"> English
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
                                        <li><a href="#"><img src="<?php echo cdn_assets();?>assets/img/blank.gif" class="flag flag-us" alt="English"> English</a></li>
                                        <li><a href="#"><img src="<?php echo cdn_assets();?>assets/img/blank.gif" class="flag flag-mx" alt="Español"> Español</a></li>
                                    </ul>
                                </li>
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
                                        <li class="active">
                                            <a href="demo-business-consulting.html">
                                                Inicio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo-business-consulting-about-us.html">
                                                Nosotros
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle"
                                               href="demo-business-consulting-expertise.html">
                                                Servicios
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="demo-business-consulting-expertise-detail.html">
                                                        Contabilidad Corporativa
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="demo-business-consulting-expertise-detail.html">
                                                        Asesoría Fiscal
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="demo-business-consulting-expertise-detail.html">
                                                        Recorridos Virtuales 360
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="demo-business-consulting-expertise-detail.html">
                                                        Desarrollo de Software
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="demo-business-consulting-expertise-detail.html">
                                                        Reclutamiento de TI
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="demo-business-consulting-expertise-detail.html">
                                                        Arquitectura Empresarial
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="demo-business-consulting-cases.html">
                                                Casos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo-business-consulting-tertimonials.html">
                                                Testimonios
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo-business-consulting-contact-us.html">
                                                Contáctanos
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
