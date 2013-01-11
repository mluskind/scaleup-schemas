<?php
if ( class_exists( 'Debug_Bar') ) {

  class ScaleUp_Schemas_Debug_Bar_Panel extends Debug_Bar_Panel {

    function init() {
      $this->title( __( 'ScaleUp Schemas', 'scaleup-schemas' ) );
    }

    function prerender() {

    }

    function render() {

      $scaleup_schemas = ScaleUp_Schemas::this();


    }
  }

}