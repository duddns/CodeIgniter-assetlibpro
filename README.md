# CodeIgniter asset library

* fork http://code.google.com/p/assetlib-pro/
* change css minify library: https://github.com/tubalmartin/YUI-CSS-compressor-PHP-port
* use js minify library: https://github.com/rgrove/jsmin-php

## Usage

* load helper

<code>$this->load->helper('assetlibpro');</code>

* add asset

<pre><code>$css = array('base.css', 'style.css');
assetlibpro_add_css($css);
</code></pre>
