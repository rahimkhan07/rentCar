<?php
$conn = mysqli_connect("localhost" , "root" , "" , "rentcar");
if(!$conn){
  echo "cannot connect";
}

header('location:successful.php'); 


  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Phone = $_POST['Phone'];
  $Password = $_POST['Password'];
  
  

 

  $sql = "INSERT INTO  signup (Name,Email,Phone,Password) VALUES ('$Name', '$Email', '$Phone', '$Password' )";
  if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>