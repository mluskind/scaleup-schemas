<?php
class ScaleUp_Schemas {

  private static $_schemas;

  private static $_this;

  public static function this() {
    return self::$_this;
  }

  /**
   * Register a schema.org type with ScaleUp Schemas
   * For the sake of consistency, $type should be capitalized the same way as on schema.org
   * @see http://schema.org/ Schema.org
   *
   * @param $type
   * @param $classname string
   * @param $path
   * @return true|WP_Error
   */
  public static function register( $type, $classname, $path ) {
    if ( file_exists( $path ) )
      include_once( $path );
    else
      return new WP_Error( 'file_not_found', __( sprintf( 'File not found: %s', $path ) ) );

    if ( class_exists( $classname ) )
      self::$_schemas[ $type ][ $classname ];
    else
      return new WP_Error( 'class_not_found', __( sprintf( 'Class not found: %s', $classname ) ) );

    return true;
  }

  /**
   * Returns array of all registered schemas
   *
   * @return array
   */
  public static function available_schemas() {
    return array_keys( self::$_schemas );
  }

}