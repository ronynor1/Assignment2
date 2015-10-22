<?php
$db_host = null;
$db_user = "abington";
$db_pass = "Abing2015";
$db_name = "abington_rony";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) 
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


