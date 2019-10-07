<?php
    require("connect.php");
    require("responseLogin.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = "SELECT id FROM user WHERE username = '$username' AND password = '$password'";

    $query = mysqli_query($con , $login);

    $row = mysqli_num_rows($query);

    if($row > 0){
        $data = mysqli_fetch_assoc($query);
        $id = $data["id"];
        echo json_encode(new ResponseLogin(true , $id));
    }else{
        echo json_encode(new ResponseLogin(false , -1 ));
    }
    
    
?>
