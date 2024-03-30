<?php

    $dbcon = mysqli_connect('localhost','root','','cms_db');

    if($dbcon==false)
    {
        echo "Database is not Connected!";
    }
   
?>