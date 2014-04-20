<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
* AssetLibPro - A CodeIgniter Asset Class
*
* @version of AssetLibPro:    1.0.5
*/

/*
|--------------------------------------------------------------------------
| Asset storage
|--------------------------------------------------------------------------
|
| The path to where to storage the joined assets.
| alp_cache_dir_css = "/assets/compressed/" (as example)
|
*/
$config['alp_asset_dir'] = '/public/';
$config['alp_cache_dir_css'] = '/public/assets/';
$config['alp_cache_dir_js'] = '/public/assets/';

$config['alp_fix_css_urls'] = FALSE;

/*
|--------------------------------------------------------------------------
| Asset default groups
|--------------------------------------------------------------------------
|
| This allows you set a default group adding assets without having to
| particularly specify the group on every "add_css()" or "add_js()"
|
*/
$config['alp_default_group_css'] = 'screen';
$config['alp_default_group_js'] = 'default';

/*
|--------------------------------------------------------------------------
| Toggle CSSTidy/JSMin Compression
|--------------------------------------------------------------------------
|
| Whether to run compression using csstidy or jsmin
|
*/
$config['alp_enable_cssmin'] = TRUE;
$config['alp_enable_jsmin'] = TRUE;

/*
|--------------------------------------------------------------------------
| Alternative development server configuration
|--------------------------------------------------------------------------
|
| Allows you to use different settings for your development (localhost?) server
|
*/
if ('production' != ENVIRONMENT) {
    $config['alp_enable_csstidy'] = FALSE;
    $config['alp_enable_jsmin'] = FALSE;
    
    $config['alp_gzip_compress_css'] = FALSE;
    $config['alp_gzip_compress_js'] = FALSE;
    
    error_reporting(E_ALL);//Comment it out if not wanted.
}

/*
|--------------------------------------------------------------------------
| CSSmin Config
|--------------------------------------------------------------------------
|
| Enter the path to your jsmin.php file. (relative from BASEPATH)
|
| jsmin = "/system/plugins/jsmin1.1.1.php" (as example)
|
*/
$config['alp_cssmin'] = "/third_party/cssmin.php";

/*
|--------------------------------------------------------------------------
| JSmin Config
|--------------------------------------------------------------------------
|
| Enter the path to your jsmin.php file. (relative from BASEPATH)
|
| jsmin = "/system/plugins/jsmin1.1.1.php" (as example)
|
*/
$config['alp_jsmin'] = "/third_party/jsmin.php";

?>