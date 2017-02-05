<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
 * Variable para mensajes de alerta
 */
defined('BOOTSTRAP_ALERT_SUCCESS')  OR define('BOOTSTRAP_ALERT_SUCCESS', 'success');
defined('BOOTSTRAP_ALERT_INFO')     OR define('BOOTSTRAP_ALERT_INFO', 'info');
defined('BOOTSTRAP_ALERT_WARNING')  OR define('BOOTSTRAP_ALERT_WARNING', 'warning');
defined('BOOTSTRAP_ALERT_DANGER')   OR define('BOOTSTRAP_ALERT_DANGER', 'danger');

/*
 * Redes sociales
 */
defined('FACEBOOK_WNO')             OR define('FACEBOOK_WNO', 'https://www.facebook.com/');
defined('TWITTER_WNO')              OR define('TWITTER_WNO', 'https://twitter.com/');
defined('GOOGLE_PLUS_WNO')          OR define('GOOGLE_PLUS_WNO', 'https://plus.google.com/');

/*
 * Elementos WNO
 */
defined('WNO')                      OR define('WNO','Work n\' Office');
defined('MAPS_KEY')                 OR define('MAPS_KEY','AIzaSyCHynOAAKAhh9wRBi5ychItPqUei9DQhxo');
defined('TEL_VENTAS')               OR define('TEL_VENTAS', '55 5564 5333');
defined('MAIL_VENTAS')              OR define('MAIL_VENTAS', 'ventas@oficinas-virtuales-amuebladas.com');
defined('MAIL_CONTACTO')            OR define('MAIL_CONTACTO', 'contacto@oficinas-virtuales-amuebladas.com');
defined('PROMO_FISCAL')             OR define('PROMO_FISCAL', '599');
defined('PROMO_FISCAL_BASICO')      OR define('PROMO_FISCAL_BASICO', '810');
defined('PROMO_FISCAL_PLUS')        OR define('PROMO_FISCAL_PLUS', '1,042');

/*
 * SUCURSALES
 */
defined('SUC_5_NOMBRE')                 OR define('SUC_5_NOMBRE','Polanco');
defined('SUC_5_DIR')                    OR define('SUC_5_DIR','Calzada General Mariano Escobedo 510, Anzures, Ciudad de México');
defined('SUC_5_TEL_EXPRESS')            OR define('SUC_5_TEL_EXPRESS','55 7269 7992');
defined('SUC_5_PRECIO_FISCAL_BASICO')   OR define('SUC_5_PRECIO_FISCAL_BASICO','810');
defined('SUC_5_PRECIO_FISCAL')          OR define('SUC_5_PRECIO_FISCAL','599');
defined('SUC_5_PRECIO_FISCAL_PLUS')     OR define('SUC_5_PRECIO_FISCAL_PLUS','1,042');
defined('SUC_2_NOMBRE')                 OR define('SUC_2_NOMBRE','Condesa');
defined('SUC_2_DIR')                    OR define('SUC_2_DIR','Baja California 255, Hipódromo, Ciudad de México');
defined('SUC_2_TEL_EXPRESS')            OR define('SUC_2_TEL_EXPRESS','55 7269 7992');
defined('SUC_2_PRECIO_FISCAL_BASICO')   OR define('SUC_2_PRECIO_FISCAL_BASICO','810');
defined('SUC_2_PRECIO_FISCAL')          OR define('SUC_2_PRECIO_FISCAL','599');
defined('SUC_2_PRECIO_FISCAL_PLUS')     OR define('SUC_2_PRECIO_FISCAL_PLUS','1,042');
defined('SUC_1_NOMBRE')                 OR define('SUC_1_NOMBRE','Barranca del Muerto');
defined('SUC_1_DIR')                    OR define('SUC_1_DIR','Insurgentes Sur 1677, Guadalupe Inn, Ciudad de México');
defined('SUC_1_TEL_EXPRESS')            OR define('SUC_1_TEL_EXPRESS','55 7269 7992');
defined('SUC_1_PRECIO_FISCAL_BASICO')   OR define('SUC_1_PRECIO_FISCAL_BASICO','810');
defined('SUC_1_PRECIO_FISCAL')          OR define('SUC_1_PRECIO_FISCAL','599');
defined('SUC_1_PRECIO_FISCAL_PLUS')     OR define('SUC_1_PRECIO_FISCAL_PLUS','1,042');
defined('SUC_4_NOMBRE')                 OR define('SUC_4_NOMBRE','Insurgentes Sur');
defined('SUC_4_DIR')                    OR define('SUC_4_DIR','Insurgentes Sur 586, Colonia del Valle Centro, Benito Juárez, Ciudad de México');
defined('SUC_4_TEL_EXPRESS')            OR define('SUC_4_TEL_EXPRESS','55 7269 7992');
defined('SUC_4_PRECIO_FISCAL_BASICO')   OR define('SUC_4_PRECIO_FISCAL_BASICO','810');
defined('SUC_4_PRECIO_FISCAL')          OR define('SUC_4_PRECIO_FISCAL','599');
defined('SUC_4_PRECIO_FISCAL_PLUS')     OR define('SUC_4_PRECIO_FISCAL_PLUS','1,042');
defined('SUC_3_NOMBRE')                 OR define('SUC_3_NOMBRE','Del Valle');
defined('SUC_3_DIR')                    OR define('SUC_3_DIR','Miguel Laurent 15, Tlacoquemecatl del Valle, Ciudad de México');
defined('SUC_3_TEL_EXPRESS')            OR define('SUC_3_TEL_EXPRESS','55 7269 7992');
defined('SUC_3_PRECIO_FISCAL_BASICO')   OR define('SUC_3_PRECIO_FISCAL_BASICO','810');
defined('SUC_3_PRECIO_FISCAL')          OR define('SUC_3_PRECIO_FISCAL','599');
defined('SUC_3_PRECIO_FISCAL_PLUS')     OR define('SUC_3_PRECIO_FISCAL_PLUS','1,042');
defined('SUC_6_NOMBRE')                 OR define('SUC_6_NOMBRE','Fontana');
defined('SUC_6_DIR')                    OR define('SUC_6_DIR','Sierra de Zimapán 4, Villas del Sol, Santiago de Querétaro');
defined('SUC_6_TEL_EXPRESS')            OR define('SUC_6_TEL_EXPRESS','55 7269 7992');
defined('SUC_6_PRECIO_FISCAL_BASICO')   OR define('SUC_6_PRECIO_FISCAL_BASICO','810');
defined('SUC_6_PRECIO_FISCAL')          OR define('SUC_6_PRECIO_FISCAL','599');
defined('SUC_6_PRECIO_FISCAL_PLUS')     OR define('SUC_6_PRECIO_FISCAL_PLUS','1,042');
defined('SUC_7_NOMBRE')                 OR define('SUC_7_NOMBRE','Zaragoza');
defined('SUC_7_DIR')                    OR define('SUC_7_DIR','Calle Ignacio Zaragoza 279, Del Prado, 76039 Santiago de Querétaro, Qro.');
defined('SUC_7_TEL_EXPRESS')            OR define('SUC_7_TEL_EXPRESS','55 7269 7992');
defined('SUC_7_PRECIO_FISCAL_BASICO')   OR define('SUC_7_PRECIO_FISCAL_BASICO','810');
defined('SUC_7_PRECIO_FISCAL')          OR define('SUC_7_PRECIO_FISCAL','599');
defined('SUC_7_PRECIO_FISCAL_PLUS')     OR define('SUC_7_PRECIO_FISCAL_PLUS','1,042');


