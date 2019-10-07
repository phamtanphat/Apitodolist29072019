<?php
    require("connect.php");
    require("response.php");
    $projectname = $_POST['projectname'];
    $time = $_POST['time'];
    $idproject = $_POST['idproject'];

    $query = "UPDATE project SET projectname = '$projectname' , Time = '$time' WHERE id = '$idproject'";

    $data = mysqli_query($con , $query);
    $row = mysqli_affected_rows($con);
    
    if($data && $row > 0){
        echo json_encode(new Response(true , "Cập nhật thành công"));
    }else{
        echo json_encode(new Response(false , "Cập nhật thất bại"));
    }

?>