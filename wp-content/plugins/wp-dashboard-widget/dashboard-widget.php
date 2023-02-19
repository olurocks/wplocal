<?php
/*
 * Plugin Name: Dashboard Widget (Rank Math)
 * Description: A WordPress dashboard widget to display sample static data from database using Recharts and WP REST API.
 * Version: 1.0
 * Author: Ayoola Olayiwola
 */

function fetch_sample_data($request)
{
    global $wpdb;
    $duration = intval($request->get_param('duration'));

    $table_name = $wpdb->prefix . 'sample';

    $current_date = date("Y-m-d");

    // Calculate the start date based on the duration
    $start_date = date("Y-m-d", strtotime("-$duration days", strtotime($current_date)));

    // Query the database to retrieve data between the start and current date
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM $table_name WHERE date BETWEEN %s AND %s ORDER BY date ASC",
            $start_date,
            $current_date
        )
    );
    return json_encode($results);
}







// Register the REST API endpoint
add_action('rest_api_init', function () {
    register_rest_route('dashboard-widget/v1', '/sample-data/(?P<duration>\d+)', array(
        'methods' => 'GET',
        'callback' => 'fetch_sample_data',
    ));
});

// Register the custom dashboard widget
add_action('wp_dashboard_setup', 'register_sample_dashboard_widget');

function register_sample_dashboard_widget()
{
    wp_add_dashboard_widget('sample_dashboard_widget', 'Graph Widget', 'render_sample_dashboard_widget');
}

function render_sample_dashboard_widget()
{
    echo '<div id="root"></div>';

    // Enqueue the ReactJS and Recharts scripts
    wp_enqueue_script('dashboard-widget-bundle', plugins_url('/client/public/js/main.js', __FILE__), array(), '1.0', true);
}
