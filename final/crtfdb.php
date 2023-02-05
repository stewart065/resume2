<?php

        require_once "connection.php";

        if($_GET){

            
            $Ref = $_GET['Reference'];
            $tit = $_GET['title'];
            $cns = $_GET['cn'];
            $Emails = $_GET['Emailsss'];
            $Ref2 = $_GET['Reference2'];
            $tit2 = $_GET['title2'];
            $cns2 = $_GET['cn2'];
            $Emails2 = $_GET['Emailsss2'];

            $sql="INSERT INTO `characterse`(`Reference`, `title`, `comapnyname`, `Email`, `Reference2`, `title2`, `comapnyname2`, `Email2`) VALUES ('$Ref','$tit','$cns','$Emails','$Ref2','$tit2','$cns2','$Emails2')";
            $res = $con->query($sql);
                if($res)
                        header("Location:expr.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>