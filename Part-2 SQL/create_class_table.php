<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Class(
    name VARCHAR(40) NOT NULL PRIMARY KEY,
    meets_at VARCHAR(20) NOT NULL,
    room VARCHAR(10),
    fid DECIMAL(9,0) UNIQUE KEY
    )";

if(mysqli_query($link, $sql))
{
    echo "Table Created";
}

else
{
    echo "Error: Could not able to create Table." .mysqli_error($link);
}

mysqli_close($link)

?>