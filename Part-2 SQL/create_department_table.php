<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Department(
    fid DECIMAL(9,0) NOT NULL PRIMARY KEY,
    fname VARCHAR(30) NOT NULL,
    deptid DECIMAL(2,0)
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