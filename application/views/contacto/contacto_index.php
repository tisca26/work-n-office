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
                        <h1>- Contacto <span>Envíanos un E-mail o llámanos</span></h1>
                        <ul class="breadcrumb breadcrumb-valign-mid">
                            <li><a href="<?php echo base_url_lang(); ?>">Inicio</a></li>
                            <li class="active">Contacto</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row pt-xs pb-xl mb-md">
                <div class="col-md-8">

                    <h2 class="font-weight-bold text-color-dark">- Envíanos un correo</h2>
                    <p>
                        Ponte en contacto con nosotros, aclararemos todas tus dudas y podemos generar una cotización sin compromiso. Confía en nuestros expertos.
                    </p>

                    <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                        <strong>¡Éxito!</strong> Tu mensaje fue enviado.
                    </div>

                    <div class="alert alert-danger hidden mt-lg" id="contactError">
                        <strong>¡Error!</strong> Hubo un error al enviar tu mensaje.
                        <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                    </div>

                    <form id="contactForm" class="custom-contact-form-style-1" action="php/contact-form.php" method="POST">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="custom-input-box">
                                        <i class="icon-user icons text-color-primary"></i>
                                        <input type="text" value="" data-msg-required="Ingrese su nombre por favor." maxlength="100" class="form-control" name="name" id="name" placeholder="Nombre*" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="custom-input-box">
                                        <i class="icon-envelope icons text-color-primary"></i>
                                        <input type="email" value="" data-msg-required="Ingrese su correo electrónico por favor" data-msg-email="Ingrese un correo electrónico válido por favor" maxlength="100" class="form-control" name="email" id="email" placeholder="Email*" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="custom-input-box">
                                        <i class="icon-bubble icons text-color-primary"></i>
                                        <textarea maxlength="5000" data-msg-required="Ingrese su mensaje por favor." rows="10" class="form-control" name="message" id="message" placeholder="Mensaje*" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Enviar ahora" class="btn btn-borders custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase mb-xlg" data-loading-text="Cargando...">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">

                    <div class="row mb-xl">
                        <div class="col-md-12">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon mt-xs">
                                    <i class="icon-location-pin icons"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h2 class="font-weight-bold text-color-dark">- Dirección</h2>
                                    <p class="font-size-lg">
                                        <?php echo WNO_DIRECCION;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-xl">
                        <div class="col-md-12">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon mt-xs">
                                    <i class="icon-phone icons"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h2 class="font-weight-bold text-color-dark">- Teléfono</h2>
                                    <p class="font-size-lg">
                                        <?php echo TEL_VENTAS;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-xl">
                        <div class="col-md-12">
                            <div class="feature-box feature-box-style-2">
                                <div class="feature-box-icon mt-xs">
                                    <i class="icon-envelope icons"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h2 class="font-weight-bold text-color-dark">- Email</h2>
                                    <p class="font-size-lg">
                                        <a href="<?php echo base_url_lang(). 'contacto';?>" class="text-decoration-none"><?php echo MAIL_CONTACTO;?></a><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map mt-xlg mb-none"></div>


    </div>

    <!-- Footer -->
        <?php $this->cargar_elementos_manager->carga_con_lang('footers/footer_uno'); ?>

    </div>

    <!-- External JavaScripts
    ============================================= -->

    <!-- Carga extra  -->
    <?php $this->cargar_elementos_manager->carga_simple('elementos_extras/body_last'); ?>
    <script>
        $(document).ready(function(){$("#notSimple").remove();});
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo MAPS_KEY;?>"></script>
    <script>

        // Map Markers
        var mapMarkers = [{
            address: "Calzada General Mariano Escobedo 510, Anzures, Ciudad de México, México",
            html: "<strong><?php echo WNO;?></strong><br><?php echo WNO_DIRECCION;?>",
            icon: {
                image: "<?php echo cdn_assets();?>/assets/img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            },
            popup: true
        }];

        // Map Initial Location
        var initLatitude = 19.4318968;
        var initLongitude = -99.1832036;

        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: (($.browser.mobile) ? false : true),
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 16
        };

        var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');

        // Map Center At
        var mapCenterAt = function(options, e) {
            e.preventDefault();
            $('#googlemaps').gMap("centerAt", options);
        };

    </script>
</body>
</html>
