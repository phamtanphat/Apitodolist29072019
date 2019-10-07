<?php
    require("connect.php");
    require("response.php");

    $idproject = $_POST['idproject'];

    $query = "DELETE FROM project WHERE id = '$idproject'";

    $data = mysqli_query($con , $query);
    $row = mysqli_affected_rows($con);
    
    if($data && $row > 0){
        echo json_encode(new Response(true , "Xóa thành công"));
    }else{
        echo json_encode(new Response(false , "Xóa thất bại"));
    }

?>