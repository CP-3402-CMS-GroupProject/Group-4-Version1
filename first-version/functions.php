<?php
// functions.php

// Login function
function login($username, $password) {
    // Replace these values with your actual database credentials
    $db_host = 'your_database_host';
    $db_user = 'your_database_user';
    $db_password = 'your_database_password';
    $db_name = 'your_database_name';

}



// Location selection function
function select_city($city = 'Singapore') {
    // Your logic here to handle the selected city
    return "Your current location: " . $city;
}

// Datetime function
function custom_datetime($format = '24', $city = 'Singapore') {
    date_default_timezone_set('Asia/Singapore'); // Replace 'Asia/Singapore' with your timezone
    $date = new DateTime();
    $selected_city = select_city($city);

    if ($format == '24') {
        return $selected_city . ', ' . $date->format('Y-m-d H:i:s');
    } else {
        return $selected_city . ', ' . $date->format('Y-m-d h:i:s A');
    }
}


?>