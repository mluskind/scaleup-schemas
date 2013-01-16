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
      foreach ( $schemas as $schema => $post_types ) {
        $html[] = "<li><h4>$schema</h4>";
        $html[] = "<ul>";
        foreach ( $post_types as $name => $fields ) {
          $html[] = "<li><strong>Post Type</strong>: $name</li>";
          $html[] = "<ul>";
          foreach ( $fields as $field_name => $field_options ) {
            $html[] = "<li>$field_name</li>";
          }
          $html[] = "</ul>";
        }
        $html[] = "</ul>";
        $html[] = "</li>";
      }
      $html[] = "</ul>";

      echo join("\n", $html);
    }
  }

}