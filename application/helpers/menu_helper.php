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

if (!function_exists('footer_lang_sel')) {
    function footer_lang_sel()
    {
        $CI =& get_instance();
        $langs = $CI->config->item('lang_uri_abbr');

        $actual_lang = lang_segment();
        $result = '<div class="dropup btn-group nomargin" data-class-xs="pull-right" data-class-xss="pull-right">';
        $result .= '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
        $result .= '<img src="' . cdn_assets() . '/assets/images/icons/flags/' . $actual_lang .'.png" alt="' . $langs[$actual_lang] . '"></a>';
        $result .= ' <span class="caret"></span></button><ul class="dropdown-menu dropdown-menu-right" role="menu">';

        foreach ($langs as $key => $lang){
            if ($key != $actual_lang){
                $result .= '<li><a class="text-uppercase" href="' . cambia_idioma($key) . '">';
                $result .= '<img src="' . cdn_assets() . '/assets/images/icons/flags/' . $key .'.png" alt="' . $langs[$key] . '"> ' . $key . '</a></li>';
            }
        }
        $result .= '</ul></div>';
        return $result;
    }
}