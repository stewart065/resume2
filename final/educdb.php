<?php

        require_once "connection.php";

        if($_GET){

            
            $yr = $_GET['Year'];
            $schl = $_GET['school'];
           

            $sql="INSERT INTO `educ`( `year`, `school`) VALUES ('$yr','$schl')";
            $res = $con->query($sql);
                if($res)
                        header("Location:crtf.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>