<?php

    require_once('inc/open_connection.php');

    include('inc/function.php');

    $req_method = $_SERVER["REQUEST_METHOD"];

    if ($req_method == "GET") {
        $data = get_account_list();

        echo $data;
    } else {
        $data = [
            'status' => 405,
            'message' => $req_method." Not Allowed!"
        ];
        header("HTTP/1.0 405 Method not Allowed");

        echo json_encode($data);
    }

    require_once('inc/close_connection.php');
?>