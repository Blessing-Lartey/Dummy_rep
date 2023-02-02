<?php
include('submit.php');
$query = "SELECT `name`, email, FROM User_table";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="layout.css">
</head>
<body class="image container">
    <h1>Here you are, a little introduction makes the journey interesting
        <form class='container' method="post" action="submit.php">
            <label for="name">Name</label> 
            <input required type="text" name="name"> <br>

            <label for="email">Email</label> 
            <input required type="email" name="email"> <br>

            <label for="password">Password</label> 
            <input required type="password" name="code"> <br>

            <button type='submit' name="done">Submit</button>


            <?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $sn; ?> </td>
   <td><?php echo $data['name']; ?> </td>
   <td><?php echo $data['email']; ?> </td>
   <td><?php echo $data['code']; ?> </td>
 <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
            

        </form>
    </h1>
</body>
</html>