<?php
class ScaleUp_Schema_Adaptors {

  private static $_this;

  var $adaptors;

  function __construct() {

    self::$_this = $this;

  }

  function init() {

    $this->adaptors = apply_filters( 'register_schema_adaptors', array() );

  }

  public static function this() {
    return self::$_this;
  }

}