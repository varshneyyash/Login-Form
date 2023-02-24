<?php
$servername="localhost";
$username="root";
$password="";
$database_name="growthscribe";

$conn=mysqli_connect($servername,$username,$password,$database_name);
// now check the connection
if(!$conn){
    die('Connection Failed : '. mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];

    $sql_query = "INSERT INTO `registration` (`email`,`first_name`,`last_name`,`address`)VALUES ('$email', '$first_name', '$last_name', '$address')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "New Details inserted successfully!";
    }
    else{
        echo "Error: " .$sql ."" . mysqli_error($conn);
    }
    mysqli_close($conn);
    
}
?>