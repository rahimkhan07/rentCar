<?php
$conn = mysqli_connect("localhost" , "root" , "" , "rentcar");
if(!$conn){
  echo "cannot connect";
}

header('location:rent.php'); 


  $Email = $_POST['Email'];
  
  

 

  $sql = "INSERT INTO  connectwithus (Email) VALUES ('$Email' )";
  if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>