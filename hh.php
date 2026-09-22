<?php 
session_start();
$json = file_get_contents("php://input");
$data1 = json_decode($json,true);

if ($data1["user"] == "sulaf" && $data1["pass"] ==123 )
    {
              $_SESSION['user'] = $data1["user"];

        echo json_encode(
            [
              "Succes" =>true  
            ]     
             );
    }
else {
        echo json_encode(
            [
              "Succes" =>false  
            ]     
            );
}
?>
