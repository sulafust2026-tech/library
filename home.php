<?php



session_start();

if (isset($_SESSION['user'])) {
    echo json_decode(
        ["authenticated" => true ]);
        else {
            echo json_decode(["authenticated" => false]);
        }
}


?>