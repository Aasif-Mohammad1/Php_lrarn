<?php
//connecting to database

$servername="localhost";
$username="root";
$password="";
$database="yarikul";
//create a connection
$conn = mysqli_connect($servername,$username,$password,$database);
//Die if connection was not successful
if(!$conn){
die("sorry we failed to connect: " .mysqli_connect_error());
}
else{
echo "Connection was successful <br>";
}

$sql = "SELECT * FROM `interns`";
$result = mysqli_query($conn,$sql);
//find the no. of records returned
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";
//Display the no. of rows returned by sql query
if($num>0){
    /*$row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>";*/
    // we can fetch in better way using while loop
    while($row = mysqli_fetch_assoc($result)){
        echo $row['Intern_id']." " ."Hello". " ".$row['Intern_Name']." "."Welcome to yarikul!";
        echo "<br>";
        echo "<br>";
    }
}
?>