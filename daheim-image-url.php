<?php
/*
Plugin Name: Daheim Image URL
Plugin URI: http://daheimapp.de
Description: Normalize images uploaded to Azure
Author: Gergő Ertli 
Version: 1.0
*/

// srcset urls always point to wp-content
add_filter('wp_calculate_image_srcset_meta', '__return_null');
