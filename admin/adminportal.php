<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navi{
   
    
   z-index: 1;
   
}
small{
  padding: 10px;
   margin-right: 50px;
}
.navi .navbar{
   background-color: rgb(164, 187, 255);
   border-bottom-left-radius: 30px;
   border-top-right-radius: 30px;
   
}

.btn{
   margin-left: 320px;
   text-align: end;
}
ul li a :hover{
   color: rgb(255, 255, 255);
}

td{
    text-align: center;
    margin-left: 20px;
    margin-right: 20px;
    
}

    </style>
    <title>admin</title>
</head>
<body>
    <!--start nav bar-->
   <div class="navi">
    <nav class="navbar navbar-expand-sm  navbar-dark fixed-top"  >
        <h2 style="color: rgba(177, 34, 34, 0.877);">rentCar.com (AdminPage)</h2>
        <small>Drive safe</small>
        <button class="navbar-toggler" data-target="#mynavi" data-toggle="collapse">
            <span class="navbar-toggler-icon" style="color: black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavi">
                <ul class="navbar-nav mx-auto">
                   <!-- <li class="nav-item" style="border-color: black;"><a href="rent.php" class="nav-link" style="color: black;"  > Home</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="gallery.html" class="nav-link" style="color: black;"  > Gallery</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="service.html" class="nav-link" style="color: black;"  > Service</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="contect.html" class="nav-link" style="color: black;"  > Contect</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="booking.html" class="nav-link" style="color: black;"  >  Booking</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="offers.html" class="nav-link" style="color: black;"  > Offers%</a></li>-->
                   
                   
                </ul>
                
                
     </nav> 
   </div>

   <!--end of nav-->

   <!--start table-->
   <br> <br> <br> <br> <br> <br>
   <h1 style="text-align: center; color: rgba(177, 34, 34, 0.877);">All Bookings</h1>
   <div class="container">
    <table class="table table-striped table-hover" style="margin-left: 20px;">
        <tr style="text-align: center; " >
            <th>S.No </th>
            <th>Booking Date  </th>
            <th>Number of person </th>
            <th>Phone.No </th>
            <th>Vechile </th>
            <th>Email Address-</th>
            <th>Departure-(Pick-up)</th> <br>
            <th>Destination-(Drop) </th>
        </tr>
   </div>

      
<?php
$conn = mysqli_connect("localhost" , "root" , "" , "rentcar");
if(!$conn){
  echo "cannot connect";
}


$sql = "SELECT * FROM `booking`";
$result = mysqli_query($conn, $sql);

//find the rec

$num = mysqli_num_rows($result);
//echo $num;
echo"<br>";

//display from db.
if($num > 0){
  

   while($row = mysqli_fetch_assoc($result)){
    
     echo "<tr><td>". $row["S.No"] . "</td><td>" . $row["date"] . "</td><td>" . $row["numberofperson"] . "</td><td>" . $row["phone"] . "</td><td>".  $row["vechile"] . "</td><td>".  $row["email"] . "</td><td>". $row["departure"] . "</td><td>".  $row["destination"] ."</td><td>";
   }
}
?>


   </table>

   <!--end table-->

   <br> <br> <br> <br> <br> <br>
</body>
</html>