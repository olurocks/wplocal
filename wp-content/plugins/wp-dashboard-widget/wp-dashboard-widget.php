<?php
/*
Plugin Name: WP Dashboard Widget
Author: Ezekiel Olumide Samson
Description: Wordpress Dashboard plugin using react with WP REST API and recharts
*/
function react_app_container() {
    echo '<div id="react-app-container"></div>';
    wp_enqueue_script('dashboard-widget-bundle', plugins_url('/client/build/static/js/main.7a17f91f.js',__FILE__), array(), '1.0', true);
}


function get_chart_data($request) {
  global $wpdb;
  $wpdb = new wpdb('psychval','wpsecret','wp_db','localhost');
  $duration = intval($request->get_param('duration'));
  $table_name = 'staticData';
  $start_date = date("Y-m-d", strtotime("-$duration days", strtotime($current_date)));
  $current_date = date("Y-m-d");


  $result = $wpdb->get_results(
    $wpdb->prepare(
      "SELECT * FROM $table_name WHERE date BETWEEN %s AND %s ORDER BY date ASC",
      $start_date,
      $current_date
    )
  );
  return json_encode($result);
}

console.log(get_chart_data);
// Register a custom endpoint
add_action( 'rest_api_init', function () {
    register_rest_route( 'getsdata/v1', '/chart_data/?P<duration>\d+', array(
      'methods' => 'GET',
      'callback' => 'get_chart_data', 
    ) );
  } );


function register_react_dashboard_widget() {
    wp_add_dashboard_widget( 'react_dashboard_widget', 'React Dashboard Widget', 'react_app_container' );
}
add_action( 'wp_dashboard_setup', 'register_react_dashboard_widget' );