<?php
// Sample sales data
$sales_data = array(
    array('Month', 'Sales'),
    array('January', 0),
    array('February', 0),
    array('March', 0),
    array('April', 0),
    array('May', 19)
);

// Convert data to JSON format
$sales_json = json_encode($sales_data);

// Google Charts API URL
$api_url = 'https://www.google.com/jsapi';

// Load the Google Charts API
echo '<script type="text/javascript" src="'.$api_url.'"></script>';
echo '<script type="text/javascript">';
echo 'google.load("visualization", "1", {packages:["corechart"]});';
echo 'google.setOnLoadCallback(drawChart);';

// Draw the chart
echo 'function drawChart() {';
echo 'var data = google.visualization.arrayToDataTable('.$sales_json.');';
echo 'var options = {title: "Sales Report", width: 600, height: 400};';
echo 'var chart = new google.visualization.BarChart(document.getElementById("chart_div"));';
echo 'chart.draw(data, options);';
echo '}';
echo '</script>';

// Display the chart
echo '<div id="chart_div"></div>';
?>
