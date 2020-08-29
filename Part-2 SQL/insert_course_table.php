<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect." .mysqli_connect_error());
}

$sql = "INSERT INTO Course VALUES
('348121549','Database Systems'),
('455798411','Operating System Design'),
('112348546','Operating System Design'),
('115987938','Operating System Design'),
('322654189','Operating System Design'),
('567354612','Data Structures'),
('552455318','Communication Networks'),
('301221823','Perception'),
('556784565','Air Quality Engineering'),
('099354543','Patent Law'),
('574489456','Urban Economics')";

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