<?php
    require("connect.php");
    require("response.php");

    $iduser = $_POST['iduser'];
    class Work {
        function __construct($id,$projectname,$time){
            $this->id=$id;
            $this->projectname=$projectname;
            $this->time=$time;
        }
    }

    $query = "SELECT * FROM project WHERE iduser = '$iduser'";

    $data = mysqli_query($con , $query);

    $arrayWork = [];

    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayWork,new Work($row['id'],
                                        $row['projectname'],
                                        $row['time'],));
    }

    if(sizeof($arrayWork) > 0 ){
        echo json_encode(new Response(true , $arrayWork)); 
    }else{
        echo json_encode(new Response(false , "Không có công việc")); 
    }
    

?>