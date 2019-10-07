<?php
    require("connect.php");
    require("response.php");
    $projectname = $_POST['projectname'];
    $time = $_POST['time'];
    $iduser = $_POST['iduser'];

    $query = "INSERT INTO project VALUES (null ,'$projectname','$time','$iduser')";

    $data = mysqli_query($con , $query);
    if($data){
        echo json_encode(new Response(true , "Thêm thành công"));
    }else{
        echo json_encode(new Response(false , "Thêm thất bại"));
    }

?>