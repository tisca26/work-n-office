<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('menu_lang_sel')) {
    function menu_lang_sel()
    {
        $CI =& get_instance();
        $langs = $CI->config->item('lang_uri_abbr');

        $actual_lang = lang_segment();
        $flag = array('es'=>'mx','en'=>'us');
        $result = '<li><a href="#" class="dropdown-menu-toggle" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">';
        $result .= '<img src="' . cdn_assets() . '/assets/img/blank.gif" alt="' . $langs[$actual_lang] . '" class="flag flag-'.$flag[$actual_lang].'"> '.$langs[$actual_lang].' ';
        $result .= '<i class="fa fa-angle-down"></i></a><ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">';

        foreach ($langs as $key => $lang){
            if ($key != $actual_lang){
                $result .= '<li><a href="' . cambia_idioma($key) . '">';
                $result .= '<img src="' . cdn_assets() . '/assets/img/blank.gif" alt="' . $langs[$key] . '" class="flag flag-'.$flag[$key].'"> ' . $langs[$key] . '</a></li>';
            }
        }
        $result .= '</ul></li>';
        return $result;
    }
}