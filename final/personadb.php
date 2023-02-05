<?php

        require_once "connection.php";

        if($_GET){

            
            $fname = $_GET['fname'];
			$lname = $_GET['lasN'];
            $midles = $_GET['middles'];
			$phone = $_GET['phon'];
			$email = $_GET['emails'];
            $gender = $_GET['gender'];
			$street = $_GET['stret'];
			$city = $_GET['cty'];
			$state = $_GET['states'];
			$ZipC = $_GET['zipc'];

            $sql="INSERT INTO `personal`(`firstname`, `lastname`, `middlename`, `phone`, `email`, `gender`, `street`, `city`, `state`, `zip`) VALUES ('$fname','$lname','$midles','$phone','$email','$gender','$street','$city','$state','$ZipC')";
            $res = $con->query($sql);
                if($res)
                        header("Location:personaldata.php");
                else
                        echo "NO DATA STORED!"; 
        }
?>