<?php

        require_once "connection.php";

        if($_GET){

            
            $date = $_GET['Date'];
            $plce = $_GET['Place'];
            $sts = $_GET['states'];
            $ctzh = $_GET['Citizenships'];
            $rgs = $_GET['Religions'];
            $hs = $_GET['Heights'];
            $whs = $_GET['Weights'];
            $rts = $_GET['Father'];
            $mtr = $_GET['Mother'];
            $abt = $_GET['me'];

            $sql="INSERT INTO `personaldetail`(`Date`, `Birth`, `Status`, `Citizenship`, `Religion`, `Height`, `Weight`, `Father`, `Mother`, `About`) VALUES ('$date','$plce','$sts','$ctzh','$rgs','$hs','$whs','$rts','$mtr','$abt')";
            $res = $con->query($sql);
                if($res)
                        header("Location:educ.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>