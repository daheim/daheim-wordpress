<?php
/*
Plugin Name: Daheim Image URL
Plugin URI: http://daheimapp.de
Description: Disable srcsets and allow Azure Storage https CNAMEs
Author: Gergő Ertli 
Version: 1.0
*/

// srcset urls always point to wp-content
add_filter('wp_calculate_image_srcset_meta', '__return_null');
add_filter('windows_azure_storage_allow_cname_https', '__return_true');
