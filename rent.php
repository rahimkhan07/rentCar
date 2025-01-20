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
<link rel="stylesheet" href="rent.css">
   

    <title>Rent</title>
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
                    <li class="nav-item" style="border-color: black;"><a href="gallery.php" class="nav-link" style="color: black;"  > Gallery</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="service.php" class="nav-link" style="color: black;"  > Service</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="contect.php" class="nav-link" style="color: black;"  > Contect</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="booking.php" class="nav-link" style="color: black;"  >  Booking</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="offers.php" class="nav-link" style="color: black;"  > Offers%</a></li>
                    <!--<li class="nav-item" style="border-color: black;"><a href="offers.php" class="nav-link" style="color: black;"  > Offers%</a></li>-->
                    <input type="button" class="btn btn-danger" value=" LogIn/Registration" data-toggle="modal" data-target="#myModal" style="border-bottom-left-radius: 20px; border-top-right-radius: 20px; ">
                   
                </ul>
                
                
     </nav> 
   </div>

   <!--start modal-->
   <div class="container">
    <h2>Modal Example</h2>
   
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <h5>LogIn</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
             
            <form action="">
                <div class="container">
                   
                    <form action="/action_page.php">
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                      </div>
                      
                      <button type="submit" class="btn-sm btn-danger" style="width: 435px;">LogIn</button>
                    </form>
                   <div style="text-align: center;">
                    <small style="text-align: center; margin-top: 50px;" >Don't have an account?<a href="signup1.php"> SignUp here</a> <br> <a href="#" style="text-align: center;">  Forgot Password?</a></small>
                   </div>
                  </div>
            </form>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    
  </div>

   <!--end modal-->
 <!--end nav bar-->


 

<!--start jumbo-->
     <section id="">
        <div class="jumbotron">
                <h1 class="head" style="margin-top: 50px;">Car Rental – Search, Compare & Save</h1>
                <h6 ><i class="fa fa-check" aria-hidden="true"></i>Free cancellations on most bookings <br> <br>  <i class="fa fa-check" aria-hidden="true"></i>Customer support 24*7</h4>
               <div class="ham"> <a href="booking.php" style="text-align: center;"><button style=" margin-top: 10px;">Manage Booking</button></a></div>   
                
        </div>
     </section>



<!--end jumbo-->


<!--start show case-->
<section>
    <div class="showcase">
        <img src="images/car.jpeg">
    </div>
</section>

<!--end show case-->

<!--start show case-->
     <section>
         
         <div class="black">
            
         </div>
       <div class="tags">
            <h2>FIND THE RIGHT <br> CAR FOR YOU.</h2> <br>
            <p>We have more then a thousand <br> cars for you to choose.</p>
            <a href="#"><button>Read more-></button></a>
            
        </div>
     </section>
<!--end show case-->
 <br> <br>
<!--all Cars start -->
<section class="container">
    <div class="all">
        <h3>Find the Best <b>CarForYou</b></h3> <br> 
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusantium voluptas excepturi ipsa distinctio aut. Debitis, voluptas quod. Architecto aliquam autem, nulla nostrum voluptatem eius!</p>
    </div>


  
</section>
<!--all cars end-->

<!--three col start-->
<section>

  

  <div >
    <div class="column1" style="background-color:rgb(164, 187, 255);">
      <h2><i class="fa fa-question-circle" aria-hidden="true"></i></h2>
      <p><a href="works.html">How it works?</a></p>
    </div>
    <div class="column1" style="background-color:rgb(164, 187, 255);">
      <h2><i class="fa fa-microphone" aria-hidden="true"></i></h2>
      <p><a href="#">Help</a></p>
    </div>
    <div class="column1" style="background-color:rgb(164, 187, 255);">
      <h2><i class="fa fa-shield" aria-hidden="true"></i></h2>
      <p><a href="#">Safety</a></p>
    </div>
  </div>
 
</section>

<!--three col end-->



<!--advantage start-->

<div class="sec">
  <h2 style="margin-top: 150px; text-align: center;">THE rentCAR ADVANTAGE</h1>
  <p style="text-align: center;">We simplified car rentals, so you can focus on what's important to you.</p>
</div>


<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/fuel.png" height="100px" width="100px" style="margin-left: 80px;">
      <h4>Fuel Cost Included</h3>
      <p style="width: 250px;">One size never fits all! Choose a balance of time and kilometers that works best for you.</p>
      
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/zoom.jpg" height="100px"  width="100px" style="margin-left: 80px;">
      <h4>No Hidden Charges</h3>
        <p style="width: 200px; height: 70px; text-align: center;">We have round-the-clock,pan India partners. Help is never far away from you.</p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/gift.jpg" height="100px"  width="100px" style="margin-left: 80px;">
      <h5>Flexi Pricing Packages</h3>
        <p style="width: 200px;  height: 70px;">One size never fits all! Choose a balance of time and kilometers that works best for you.</p>
      
    </div>
  </div>
  
  
</div>



<div class="row" style="margin-top: 50px;">
  <div class="column">
    <div class="card" style="border-style: groove;">
      <img src="images/fuel.png" height="100px" width="100px" style="margin-left: 80px;">
      <h4>Fuel Cost Included</h3>
      <p style="width: 250px;">One size never fits all! Choose a balance of time and kilometers that works best for you.</p>
      
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/zoom.jpg" height="100px"  width="100px" style="margin-left: 80px;">
      <h4>No Hidden Charges</h3>
        <p style="width: 200px; height: 70px; text-align: center;">We have round-the-clock,pan India partners. Help is never far away from you.</p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/gift.jpg" height="100px"  width="100px" style="margin-left: 80px;">
      <h5>Flexi Pricing Packages</h3>
        <p style="width: 200px;  height: 70px;">One size never fits all! Choose a balance of time and kilometers that works best for you.</p>
      
    </div>
  </div>
  
  
</div>

 <br> <br> <br> 

<!--advantage end-->



<!--search box start-->

<div class="search">
  <form action="connect.php" method="post">
    <div class="form-group">
       <h3 style=" margin-left: 400px;">Connect with us:</h3>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="Email"> <br>
     
      <input class="btn btn-danger"  type="submit" name="button" id="" value="Send   ">
     
    </div>

  </form>
</div>



<!--search end-->


<!--footer start-->
 <div class="footer"> <br> 
     <div class="logo">
      <h1 style=" color: rgba(177, 34, 34, 0.877);  margin-left: 80px; ">rentCar.com</h2>
        <p style="width: 240px;  margin-left: 80px; color: rgb(0, 0, 0);">It is located in Lorem ipsum dolor sit amet consectetur adipisicing. dolor sit amet consectetur adipisicing.dolor sit amet consectetur adipisicing. </p>
      </div>

      <div class="logo1">
        <h1 style=" color: rgba(177, 34, 34, 0.877);  margin-left: 80px; ">Quick Links</h2>
         <div  style="margin-left: 150px;">
           <a class="links" href="rent.php" style="color: black;"><b>>Home</b></a> <br>
           <a class="links" href="gallery.php" style="color: black;"><b>>Gallery</b></a> <br>
           <a class="links" href="rent.php" style="color: black;"><b>>Service</b></a> <br>
           <a class="links" href="contect.php" style="color: black;"><b>>Contect</b></a> <br>
           <a class="links" href="offers.php" style="color: black;"><b>>Offers%</b></a> <br>
          
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


  <div style="background-color: rgb(164, 187, 255); height: 40px; margin-top: 10px;" class="by">
    <p style="margin-top: 5px; text-align: center;">By: <a href="admin/adminportal.php">Rahim Khan </a></p>
  </div>


</body>
</html>