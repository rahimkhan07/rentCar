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
<link rel="stylesheet" href="booking.css">
    <title>Booking</title>
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
                    <li class="nav-item" style="border-color: black;"><a href="rent.php" class="nav-link" style="color: black;"  > Home</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="gallery.php" class="nav-link" style="color: black;"  > Gallery</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="service.php" class="nav-link" style="color: black;"  > Service</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="contect.php" class="nav-link" style="color: black;"  > Contect</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="booking.php" class="nav-link" style="color: black;"  >  Booking</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="offers.php" class="nav-link" style="color: black;"  > Offers%</a></li>
                    
                   
                </ul>
                
                
     </nav> 
   </div>
<!--end of nav bar-->

<!--booking form start-->

<div class="jumbotron">

    <h1><b>Book your ride:</b></h1>
   
    <form action="book.php" method="post">
       
        <label class="lable"> Enter your tour date:</label><br>
        <input type="date" name="date" id="date" required> <br>
        <label class="lable" for="">Totle no. of travellers:</label> <br> 
        <input type="number" name="numberofperson" id="numberofperson" placeholder=" no. of travellers" required> <br>
        <label class="lable" for="">Enter your number:</label> <br>
        <input type="phone" name="phone" id="phone" placeholder="Ph.no" required> <br>
        <label class="lable" for="">Select Vechile </label><br>
        <select class="lable" style="width: 300px;" name="vechile" id="vechile" required>
            <option name="vechile" disable >Select vechile</option>
            <option name="vechile">Volkswagen</option>
            <option name="vechile">Hyundai Verna</option>
            <option name="vechile">Toyota Innova</option>
            <option name="vechile">Ford Endeavour</option>
            <option name="vechile">Honda Jazz</option>
            <option name="vechile">Honda City ZX</option>
            <option name="vechile">Volkswagen Polo Sedan</option>
            <option name="vechile">Toyota Fortuner</option>
            <option name="vechile">Skoda Laura</option>
            <option name="vechile">Maruti S-Cross</option>
            <option name="vechile">Maruti Wagon R</option>
            <option name="vechile">Renault Duster </option>
            <option name="vechile">MG Hector </option>
            
        </select> <br>
        <label class="lable" for="">Enter your Email:</label> <br>
        <input type="email" name="email" id="email" placeholder="Enter your email" required> <br>
        <label class="lable" for="">Departure city:</label> <br>
        <input type="city" name="departure" placeholder="Departure city (Pick-up)" required> <br>
        <label class="lable" for="">Destination city</label> <br>
        <input type="text" name="destination" placeholder="Destination city (Drop)" required> <br> <br>
        <input style="background-color: rgba(177, 34, 34, 0.877) ; color:white;" type="submit" name="submit" value="Book">

           
    </form>
</div>
<div class="showcase">
    <img src="images/path.jpeg" >
</div>

<!--booking form end-->


<!--footer start-->
<div class="footer"> <br> 
    <div class="logo">
     <h1 style=" color: rgba(177, 34, 34, 0.877);  margin-left: 80px; ">rentCar.com</h2>
       <p style="width: 240px;  margin-left: 80px; color: rgb(0, 0, 0);">It is located in Lorem ipsum dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisicing.dolor sit amet consectetur adipisicing. </p>
     </div>

     <div class="logo1">
       <h1 style=" color: rgba(177, 34, 34, 0.877);  margin-left: 80px; ">Quick Links</h2>
        <div  style="margin-left: 150px;">
          <a class="links" href="rent.html" style="color: black;"><b>>Home</b></a> <br>
          <a class="links" href="gallery.html" style="color: black;"><b>>Gallery</b></a> <br>
          <a class="links" href="rent.html" style="color: black;"><b>>Service</b></a> <br>
          <a class="links" href="contect.html" style="color: black;"><b>>Contect</b></a> <br>
          <a class="links" href="rent.html" style="color: black;"><b>>Offers%</b></a> <br>
         
        </div>
       </div>

       <div class="logo2">
         <h1 style=" color: rgba(177, 34, 34, 0.877);  margin-left: 180px; ">Contect Us</h2>
          
             
             <tr><h5 style="margin-left: 190px;"><i class="fa fa-map-marker" style="color: red;" aria-hidden="true"></i> <b>Lorem,ipsum dolor.</b></h2></tr> 
             <tr><h5 style="margin-left: 190px;"><i class="fa fa-phone" style="color: green;" aria-hidden="true"></i> <b>1234567890</b></h2></tr>
             <tr><h5 style="margin-left: 190px;"><i class="fa fa-envelope-o" style="color: rgb(211, 97, 3);" aria-hidden="true"></i><b> lorem@gmail.com</b></h2></tr> 
             <tr><h5 style="margin-left: 190px;"><i class="fa fa-instagram" style="color: rgb(90, 5, 5);" aria-hidden="true"></i><b> @rentCar_001_</b></h4></tr>   
             
         </div>
         </div>


</div>
<!--footrer end-->
</body>
</html>