
<?php
$conn = mysqli_connect("localhost" , "root" , "" , "rentcar");
if(!$conn){
  echo "cannot connect";
}


$sql = "SELECT * FROM `booking`";
$result = mysqli_query($conn, $sql);

//find the rec

$num = mysqli_num_rows($result);
echo $num;
echo"<br>";

//display from db.
if($num > 0){
  

   while($row = mysqli_fetch_assoc($result)){
    
      echo $row['S.No'] . $row['date'] . $row['numberofperson'] . $row['phone'] . $row['vechile'] . $row['email'] . $row['departure'] . $row['destination'];
       echo"<br>";
   }
}
?>

