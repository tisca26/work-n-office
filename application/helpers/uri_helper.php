<?php
if ( ! function_exists('lang_segment'))
{
    function lang_segment()
    {
        $CI =& get_instance();
        return $CI->config->item('language_abbr') . '/';
    }
}