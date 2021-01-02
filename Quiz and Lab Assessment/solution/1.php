<?php

$connection = new mysqli("localhost","root", "","cse311l_section_2_fall_20");

if($connection->connect_error)
{
    echo "Not Connected, error:".$mysqli_connection->connect_error;
}
else{
    echo "Connected";
}

$sql = "SELECT First_Name,min(Salary),max(Salary),sum(Salary),avg(Salary) from employees group by Job_Id";

$result=mysqli_query($connection, $sql);
while($row = mysqli_fetch_array($result)){
    print_r($row);
}

?>