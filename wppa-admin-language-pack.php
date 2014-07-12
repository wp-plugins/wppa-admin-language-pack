<?php
/*
Plugin Name: Wppa Admin Language Pack
Description: Adds admin language files to Wp Photo Album Plus
Version: 5.4.1
Author: J.N. Breetvelt a.k.a OpaJaap
Author URI: http://wppa.opajaap.nl/
Plugin URI: http://wordpress.org/extend/plugins/wppa-admin-language-pack/
*/

if ( ! defined( 'ABSPATH' ) ) die( "Can't load this file directly" );

global $wppa_admin_langs_root;

$wppa_admin_langs_root = basename( dirname( __FILE__ ) ) . '/langs/';
