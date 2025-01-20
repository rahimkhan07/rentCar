<?php
$conn = mysqli_connect("localhost" , "root" , "" , "rentcar");
if(!$conn){
  echo "cannot connect";
}

header('location:contect1.php'); 


  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Number = $_POST['Number'];
  $Message = $_POST['Message'];
  
  

 

  $sql = "INSERT INTO  contactus (Name,Email,Number,Message) VALUES ('$Name', '$Email', '$Number', '$Message' )";
  if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>