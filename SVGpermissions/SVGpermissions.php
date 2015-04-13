<?php
/*
Plugin Name: SVGpermissions
Plugin URI: http://thegameadventurers.com
Description: Adds permissions to upload SVG files directly into wordpress media uploader
Version: 1.0
Author: Nzureuz
Author URI: http://yhegameadventurers.com/
License: GPL
Copyright: Nzureuz
*/
function SVGpermissions($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'SVGpermissions');
?>