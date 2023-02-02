<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "root";
  $dbname = "Hanggs";

if (isset($_POST ['name, email, code'])){
  $name = $_POST ['name'];
  $email = $_POST ['email'];
  $code = $_POST ['code'];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    console.log("what is happening");
  }
  echo "Connected successfully";

  $sql = "INSERT INTO `User_table` (`id`, `Name`, `Email`, `Password`) VALUES (null, '$name', '$email', '$code')";
  $execute = mysqli_query($conn, $sql);

  if ($execute){
   

  } else {
    echo "We'll make it: " . mysqli_error($conn);
  }

  $SELECT = "SELECT 'Name', email, From `User_table`";
   $result = mysqli_query($conn, $SELECT);

if ($result){
  echo "it worked";
} else{
  echo "eishhh";
}
  // mysqli_close($conn);
 }
?>
