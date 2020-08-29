<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "CREATE TABLE Stock(
    sid INT(9) NOT NULL PRIMARY KEY,
    pid INT(9) NOT NULL UNIQUE KEY,
    cost INT(10)
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