<?php

    class ResponseLogin{
        function __construct($success,$iduser){
            $this->success=$success;
            $this->iduser=$iduser;
        }
    }
?>