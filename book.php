<?php
$conn = mysqli_connect("localhost" , "root" , "" , "rentcar");
if(!$conn){
  echo "cannot connect";
}

header('location:done.php'); 


  $date = $_POST['date'];
  $numberofperson = $_POST['numberofperson'];
  $phone = $_POST['phone'];
  $vechile = $_POST['vechile'];
  $email = $_POST['email'];
  $departure = $_POST['departure'];
  $destination = $_POST['destination'];
  
  

 

  $sql = "INSERT INTO  Booking (date, numberofperson, phone, vechile, email, departure, destination  ) VALUES ('$date' , '$numberofperson' , '$phone' , '$vechile' , '$email' , '$departure' , '$destination' )";
  if (mysqli_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>