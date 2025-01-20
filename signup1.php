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


input{
    width: 300px;
    margin-left: 450px;
}
.lable{
    margin-left: 450px;
}
.jumbotron{
    margin-top: 100px;
}
.btnn{
    border-bottom-left-radius: 20px;
    border-top-right-radius: 20px;
}
</style>
    <title>SignUp</title>
</head>
<body>
    <!--start nav bar-->
   <div class="navi">
    <nav class="navbar navbar-expand-sm  navbar-dark fixed-top"  >
        <h2 style="color: rgba(177, 34, 34, 0.877);">rentCar.com</h2>
        <small>Drive safe</small>
        <button class="navbar-toggler" data-target="#mynavi" data-toggle="collapse">
            <span class="navbar-toggler-icon" style="color: black;"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavi">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item" style="border-color: black;"><a href="#" class="nav-link" style="color: black;"  > Home</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="gallery.html" class="nav-link" style="color: black;"  > Gallery</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="service.html" class="nav-link" style="color: black;"  > Service</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="contect.html" class="nav-link" style="color: black;"  > Contect</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="booking.html" class="nav-link" style="color: black;"  >  Booking</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="offers.html" class="nav-link" style="color: black;"  > Offers%</a></li>
                    
                   
                </ul>
                
                
     </nav> 
   </div>

   <!--end nav-->

   <!--form start-->
   <div class="jumbotron">
       <h1 style="text-align: center; margin-bottom: 50px;"><u>SignUp Form:</u></h1>
            <div>
                <form action="signup.php" method="post">
                    <label class="lable">Enter your Name:</label> <br>
                    <input type="text" name="Name" id="Name" placeholder="Enter your Name" required> <br>
                    <label class="lable">Enter your Email:</label> <br>
                    <input type="email" name="Email" id="Email" placeholder="Enter your Email" required> <br>
                    <label class="lable">Enter your Ph.no:</label> <br>
                    <input type="Phone" name="Phone" id="Phone" placeholder="Enter your Ph.no" required> <br>
                    <label class="lable">Enter your Password:</label> <br>
                    <input type="Password" name="Password" id="Password" placeholder="Enter your Password" required>  <br> <br>
                    <input class="btnn" style="background-color: brown; color: white;" type="Submit" name="Submit" id="Submit" value="SignUp">
                </form>
            </div>
   </div>
   <!--form  end-->
</body>
</html>