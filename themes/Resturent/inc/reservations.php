<?php

function resturent_save_reservation() {

    global $wpdb;

    if(isset($_POST['submit']) && $_POST['hidden'] == "1") {


        $name = $_POST['name'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $table =  $wpdb->prefix . "wp_reservations";

        $data   =   array (

            'name'    =>    $name,
            'date'    =>    $date,
            'email'   =>    $email,
            'phone'   =>    $phone,
            'message' =>    $message  
            
        );

        $format = array (

            '%s',            
            '%s',
            '%s',
            '%s',
            '%s'

        );

        $wpdb->insert($table, $data, $format);

       
    }
}

add_action('init', 'resturent_save_reservation');

?>

