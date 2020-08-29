<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "INSERT INTO Class VALUES
('Database Systems','MWF 12:30-1:45','1320 DCL','142519864'),
('Air Quality Engineering','TuTh 10:30-11:45','R15','011564812'),
('Introductory Latin','MWF 3-4:15','R12','248965255'),
('American Political Parties','TuTh 2-3:15','20 AVW','619023588'),
('Social Cognition','Tu 6:30-8:40','R15','159542516'),
('Patent Law','F 1-2:50','R128','090873519'),
('Dairy Herd Management','TuTh 12:30-1:45','R128','356187925'),
('Communication Networks','MW 9:30-10:45','20 AVW','141582651'),
('Optical Electronics','TuTh 12:30-1:45','R15','254099823'),
('Intoduction to Math','TuTh 8-9:30','R128','489221823')";

if(mysqli_query($link, $sql))
{
    echo "VALUES INSERED";
}

else
{
    echo "Error: Could not able to insert values." .mysqli_error($link);
}

mysqli_close($link)

?>