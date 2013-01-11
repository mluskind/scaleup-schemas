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

new ScaleUp_Schemas_Plugin();

register_scaleup_schema( 'Thing',           'ScaleUp_Thing_Schema',           SCALEUP_SCHEMAS_DIR . '/schemas/thing.php' );
register_scaleup_schema( 'PostalAddress',   'ScaleUp_PostalAddress_Schema',   SCALEUP_SCHEMAS_DIR . '/schemas/postal-address.php' );
register_scaleup_schema( 'ContactPoint',    'ScaleUp_ContactPoint_Schema',    SCALEUP_SCHEMAS_DIR . '/schemas/contact-point.php' );
register_scaleup_schema( 'Brand',           'ScaleUp_Brand_Schema',           SCALEUP_SCHEMAS_DIR . '/schemas/brand.php');
register_scaleup_schema( 'Rating',          'ScaleUp_Rating_Schema',          SCALEUP_SCHEMAS_DIR . '/schemas/rating.php');
register_scaleup_schema( 'AggregateRating', 'ScaleUp_AggregateRating_Schema', SCALEUP_SCHEMAS_DIR . '/schemas/aggregate-rating.php' );
register_scaleup_schema( 'Person',          'ScaleUp_Person_Schema',          SCALEUP_SCHEMAS_DIR . '/schemas/person.php' );
register_scaleup_schema( 'Organization',    'ScaleUp_Organization_Schema',    SCALEUP_SCHEMAS_DIR . '/schemas/organization.php' );