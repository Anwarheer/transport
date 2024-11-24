<?php    
$server  = "localhost";  
$username = "root";  
$password = ""; 
$database = "userheer";  

$conn= mysqli_connect($server, $username, $password, $database);  
if(!$conn) {
    die ("Connection Failed:" . mysqli_connect_error()); 
}
else{
    echo "Database connected";
}

$sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('ajffd', '1221', current_timestamp())";
$result = mysqli_query($conn , $sql);
if ($result)
    {

    echo "Data sucessfully stored";
    }
else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn); 
}
mysqli_close($conn);
?>