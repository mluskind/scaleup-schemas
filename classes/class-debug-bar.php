<?php
if ( class_exists( 'Debug_Bar') ) {

  class ScaleUp_Schemas_Debug_Bar_Panel extends Debug_Bar_Panel {

    function init() {
      $this->title( __( 'ScaleUp Schemas', 'scaleup-schemas' ) );
    }

    function prerender() {

    }

    function render() {

      $html = array();
      $html[] = '<h3>Registered schemas</h3>';
      $schemas = ScaleUp_Schemas::get_available_schemas();
      $html[] = "<ul>";
      foreach ( $schemas as $schema => $fields ) {
        $html[] = "<li><h4>$schema</h4>";
        $fields = get_schema_fields( $schema );
        $html[] = "<ul>";
        foreach ( $fields as $name )
          $html[] = "<li>$name</li>";
        $html[] = "</ul>";
        $html[] = "</li>";
      }
      $html[] = "</ul>";

      echo join("\n", $html);
    }
  }

}