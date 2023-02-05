<?php
        require_once "connection.php";
        if($_GET){

            $name = $_GET['Dname'];
            $user = $_GET['Duser'];
            $pass = $_GET['Dpass'];

            $sql="INSERT INTO `register`(`name`, `username`, `password`) VALUES ('$name','$user','$pass')";
            $res = $con->query($sql);
                if($res)
                        header("Location:personal.php");
                else
                        echo "NO DATA STORED!";  
        }
?>