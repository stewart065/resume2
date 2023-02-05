<?php

        require_once "connection.php";

        if($_GET){

            
            $cpmy = $_GET['Comapny'];
            $pstn = $_GET['Position'];
            $yr = $_GET['Year'];
            $eprc = $_GET['Experience'];
           

            $sql="INSERT INTO `expr`(`ComapnyName`, `Position`, `YearMonth`, `Experience`) VALUES ('$cpmy','$pstn','$yr','$eprc')";
            $res =$con->query($sql);
                if($res)
                        header("Location:index2.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>