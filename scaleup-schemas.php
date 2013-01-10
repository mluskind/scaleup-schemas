<?php
/*
 * Plugin Name: ScaleUp Schemas
 */

define( 'SCALEUP_SCHEMAS_DIR', dirname( __FILE__ ) );
define( 'SCALEUP_SCHEMAS_VER', '0.1.0' );
define( 'SCALEUP_SCHEMAS_MIN_PHP', '5.2.4' );
define( 'SCALEUP_SCHEMAS_MIN_WP', '3.4' );

require_once( SCALEUP_SCHEMAS_DIR . '/classes/class-plugin-base.php' );
require_once( SCALEUP_SCHEMAS_DIR . '/classes/class-schema.php' );
require_once( SCALEUP_SCHEMAS_DIR . '/classes/class-schemas.php' );
require_once( SCALEUP_SCHEMAS_DIR . '/functions.php' );

register_scaleup_schema( 'Thing',         'ScaleUp_Thing_Schema',         SCALEUP_SCHEMAS_DIR . '/classes/class-thing.php' );
register_scaleup_schema( 'PostalAddress', 'ScaleUp_PostalAddress_Schema', SCALEUP_SCHEMAS_DIR . '/classes/class-postal-address.php' );
register_scaleup_schema( 'ContactPoint',  'ScaleUp_ContactPoint_Schema',  SCALEUP_SCHEMAS_DIR . '/classes/class-contact-point.php' );
register_scaleup_schema( 'Person',        'ScaleUp_Person_Schema',        SCALEUP_SCHEMAS_DIR . '/classes/class-person.php' );