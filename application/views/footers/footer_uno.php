<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section id="notSimple" class="section section-text-light section-background m-none"
         style="background: url('<?php echo cdn_assets(); ?>/assets/img/demos/business-consulting/contact/contact-background.jpg'); background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-weight-bold">- <?php echo trans_line('know_title'); ?></h2>
                <p class="custom-opacity-font"><?php echo trans_line('know_desc'); ?></p>
                <div class="col-md-6 pl-none">
                    <h4 class="mb-xs"><?php echo trans_line('know_call'); ?></h4>
                    <a href="tel:<?php echo TEL_VENTAS; ?>" class="text-decoration-none" target="_blank"
                       title="<?php echo trans_line('know_call'); ?>">
                        <span class="custom-call-to-action-2 text-color-light text-sm custom-opacity-font">
                            <?php echo trans_line('know_call_sub'); ?>
                            <span class="info text-lg">
                                <?php echo TEL_VENTAS; ?>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 pl-none custom-sm-margin-top">
                    <h4 class="mb-xs"><?php echo trans_line('know_loc'); ?></h4>
                    <p class="custom-opacity-font"><?php echo WNO_DIRECCION; ?></p>
                </div>
                <div class="col-md-6 pl-none">
                    <h4 class="mb-xs"><?php echo trans_line('know_mail'); ?></h4>
                    <a href="mail:<?php echo MAIL_CONTACTO; ?>" class="text-decoration-none" target="_blank"
                       title="<?php echo trans_line('know_mail'); ?>">
                        <span class="custom-call-to-action-2 text-color-light text-sm custom-opacity-font">
                            <?php echo trans_line('know_mail_sub'); ?>
                            <span class="info text-lg">
                                <?php echo MAIL_CONTACTO; ?>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-6 pl-none custom-sm-margin-top">
                    <h4 class="mb-xs"><?php echo trans_line('know_social'); ?></h4>
                    <ul class="social-icons custom-social-icons-style-1 custom-opacity-font">
                        <li class="social-icons-facebook">
                            <a href="<?php echo FACEBOOK_WNO; ?>" target="_blank" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="social-icons-twitter">
                            <a href="<?php echo TWITTER_WNO; ?>" target="_blank" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social-icons-googleplus">
                            <a href="<?php echo GOOGLE_PLUS_WNO; ?>" target="_blank" title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 custom-sm-margin-top">
                <h2 class="font-weight-bold">- <?php echo trans_line('form_title'); ?></h2>
                <?php echo form_open(base_url_lang() . 'contacto/enviar_correo', 'id="contactForm" class="custom-contact-form-style-1"') ?>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="custom-input-box">
                                <i class="icon-user icons text-color-primary"></i>
                                <input type="text" value="" data-msg-required="Please enter your name."
                                       maxlength="100" class="form-control" name="nombre" id="nombre"
                                       placeholder="<?php echo trans_line('form_name'); ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="custom-input-box">
                                <i class="icon-phone icons text-color-primary"></i>
                                <input type="text" value="" data-msg-required="Ingrese su teléfono."
                                       maxlength="100" class="form-control" name="telefono" id="telefono"
                                       placeholder="<?php echo trans_line('form_tel'); ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="custom-input-box">
                                <i class="icon-envelope icons text-color-primary"></i>
                                <input type="email" value=""
                                       data-msg-required="Please enter your email address."
                                       data-msg-email="Please enter a valid email address." maxlength="100"
                                       class="form-control" name="email" id="email"
                                       placeholder="<?php echo trans_line('form_mail'); ?>"
                                       required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="custom-input-box">
                                <i class="icon-bubble icons text-color-primary"></i>
                                <textarea maxlength="5000" data-msg-required="Please enter your message."
                                          rows="10" class="form-control" name="mensaje" id="mensaje"
                                          placeholder="<?php echo trans_line('form_mes'); ?>" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" value="<?php echo trans_line('form_button'); ?>"
                               id="btnSumbitContactFooter"
                               class="btn btn-borders custom-border-width btn-primary custom-border-radius font-weight-semibold text-uppercase"
                               data-loading-text="<?php echo trans_line('form_sending'); ?>.">
                    </div>
                </div>
                <?php form_close(); ?>
            </div>
        </div>
    </div>
</section>
</div>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <p><?php echo trans_line('copyright'); ?></p>
            </div>
        </div>
    </div>
</footer>