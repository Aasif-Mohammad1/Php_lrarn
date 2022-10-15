<?php
//include '_dbconnect.php';
require '_dbconnect.php';
$sql = "SELECT * FROM `interns`";
$result = mysqli_query($conn,$sql);
//find the no. of records returned
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";
while($row = mysqli_fetch_assoc($result)){
    echo $row['Intern_id']." " ."Hello". " ".$row['Intern_Name']." "."Welcome to yarikul!";
    echo "<br>";
    echo "<br>";
}
?>