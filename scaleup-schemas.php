<?php
/*
 * Plugin Name: ScaleUp Schemas
 */

define( 'SCALEUP_SCHEMAS_DIR', dirname( __FILE__ ) );
define( 'SCALEUP_SCHEMAS_VER', '0.1.0' );
define( 'SCALEUP_SCHEMAS_MIN_PHP', '5.2.4' );
define( 'SCALEUP_SCHEMAS_MIN_WP', '3.4' );

require_once( SCALEUP_SCHEMAS_DIR . '/classes/class-schemas.php' );
require_once( SCALEUP_SCHEMAS_DIR . '/classes/class-plugin-base.php' );
require_once( SCALEUP_SCHEMAS_DIR . '/functions.php' );
require_once( SCALEUP_SCHEMAS_DIR . '/template-tags.php' );