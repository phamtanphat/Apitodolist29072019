<?php
    require("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $insertAccount = "INSERT INTO user VALUES (null , '$username' , '$password')";

    $data = mysqli_query($con,$insertAccount);

// 1 : UserResponse -> class cho viec tra ve
    class UserResponse{
        function __construct($success , $message){
            $this->success=$success;
            $this->message=$message;
        }
    }
    // { "success " : true , "message" : "Thanh cong"}
    // { "success " : false , "message" : "That bai"}

    if(mysqli_error($con)){
        echo json_encode(new UserResponse(false,"That bai"));
    }else{
        echo  json_encode(new UserResponse(true,"Thanh cong"));
    }
   

?>