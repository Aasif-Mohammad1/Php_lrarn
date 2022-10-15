<?php
//start the session and get the data
session_start();
if(isset($_SESSION['username'])){
echo "Welcome".$_SESSION['username'];
echo "<br>Your favorite category is".$_SESSION['category'];
}
else{
    echo "Please Login to Continue";
}

?>