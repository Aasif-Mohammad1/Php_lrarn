<?php
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
  $sql = "SELECT * FROM `interns` where `Intern_max_qual`='MCA'";
$result = mysqli_query($conn,$sql);
//usage of where clause to fetch the data from database
$num = mysqli_num_rows($result);
echo "$num Records found in the Database";
echo "<br>";
if($num>0){
  /*$row = mysqli_fetch_assoc($result);
  echo var_dump($row);
  echo "<br>";*/
  // we can fetch in better way using while loop
  while($row = mysqli_fetch_assoc($result)){
      echo $row['Intern_id']." " ."Hello". " ".$row['Intern_Name']." "."Welcome to yarikul!";
      echo "<br>";
  }
}
//usage of where clause to update the data
$sql = "UPDATE `interns` SET `Intern_Name` = 'Mohammad Aasif' WHERE `interns`.`Intern_id` = 123";
$result = mysqli_query($conn,$sql);
if($result){
  echo "We updated the record successfully";
}
else{
  echo "We could not update the record successfully";
}
?>