<?php
  
    $file_path = "uploads/";

    $data = array("project_id" => $_REQUEST['project'], "flag" => $_REQUEST['flag'], "description" => $_REQUEST['description']);

    $file_path = $file_path . basename( $_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
        echo json_encode($data);
    } else{
        echo "";
    }
 ?>