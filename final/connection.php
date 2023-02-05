<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'final';

    $con = mysqli_connect($servername,$username,$password,$dbname);

        if(!$con){
            die("Connection failed:" . mysqil_connect_error());
        }
