<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

function assetlibpro_add_css($args = array())
{
    $CI =& get_instance();
    $CI->load->library('assetlibpro');
    
    foreach ($args as $css) {
        if ('production' == ENVIRONMENT) {
            $CI->assetlibpro->add_css($css);
        } else {
            echo '<link rel="stylesheet" href="/'.$css.'" />';
        }
    }
    
    if ('production' == ENVIRONMENT) {
        echo $CI->assetlibpro->output('css');
    }
    
//     foreach ($args as $css) {
//         $CI->assetlibpro->add_css($css);
//     }
//     echo $CI->assetlibpro->output('css');
}