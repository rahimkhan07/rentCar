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

@media screen and (max-width: 600px){
   small{
       display: none;
   }
   .uppercase img{
       margin-bottom: 20px;
       width: 500px;
       
   }
   
   
}


  .uppercase img{
      margin-top: 70px;
      width: 100%;
      height: 200px;
      
  }
  .form input{
      width: 400px;
  }
  .loco{
      float: right;
      margin-top: -650px;
      margin-right: 250px;
  }

  @media screen and (max-width: 600px){
      .loco{
          margin-top: 100px;
          margin-left: 100px;
          
          
      }
      .loco tr{
          width: 300px;
      }
  }


  /* footer start*/
  .footer{
       background-color: rgb(164, 187, 255);
       width: 100%;
       height: 300px;
       border-top-left-radius: 120px;
   }

 .logo h1{
      margin-top: 40px;

  }

.logo1{
    margin-left: 400px;
    margin-top: -215px;
}

.logo2 {
    margin-left: 700px;
    margin-top: -175px;
}

@media screen and (max-width: 600px){

    .footer{
        height: 900px;
    }
    .logo1{
        margin-top: 120px;
        margin-left: -10px;
        
    }

    .logo2{
        margin-top: 120px;
        margin-left: -100px;
    }
}
/*footer end */
</style>
    <title>contect</title>
</head>
<body>

<?php
class greeting {
  public static function welcome() {
    echo "hello";
  }
}

// Call static method
greeting::welcome();
?>
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
                    <li class="nav-item" style="border-color: black;"><a href="rent.html" class="nav-link" style="color: black;"  > Home</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="gallery.html" class="nav-link" style="color: black;"  > Gallery</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="service.html" class="nav-link" style="color: black;"  > Service</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="contect.html" class="nav-link" style="color: black;"  > Contect</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="booking.html" class="nav-link" style="color: black;"  >  Booking</a></li>
                    <li class="nav-item" style="border-color: black;"><a href="offers.html" class="nav-link" style="color: black;"  > Offers%</a></li>
                    
                   
                </ul>
                
                
     </nav> 
   </div>


    <div class="uppercase">
       <img src="images/banner1.jpg" >
    </div>

    <div class="jumbotron" style="margin-left: 40px; margin-top: 40px; width: 460px;border-radius: 0px; border-top-right-radius: 80px; border-bottom-left-radius: 80px; background-color:rgb(164, 187, 255); ">
        <div class="form">
           
                <form action="contect.php" method="post">
                    <div >
                        <h4 style="width: 500px;"><b>Get in touch using the form below</b></h2>
                    </div>
                        <div class="form-group">
                            <label for="email">Full Name:</label>
                            <input type="text" class="form-control" id="Name" placeholder="Full Name" name="Name" required>
                          </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="Email" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Phone Number:</label>
                        <input type="number" class="form-control" id="email" placeholder="Phone Number" name="Number" readonly>
                      </div>
                      <div class="form-group">
                        <label for="pwd">Message:</label>
                       
                        <textarea style="width: 400px;" class="form-control" name="Message" placeholder="Write Message" id="Message" name="Message" cols="5" rows="5" required></textarea>
                        
                      </div>
                      <input type="submit" style="text-align: center; margin-left: -1px; border-radius: 0px; border-bottom-left-radius: 30px; border-top-right-radius: 30px;" class="btn btn-danger" name="send" id="submit" value="Send message">
                </form>
        </div>
    </div>

    <div class="map" style="margin-left: 620px; margin-top: -600px; " >
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.8461518656869!2d83.56339552917989!3d25.934850898972417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39918af1c4ad02b3%3A0x639dcce8d3427f0a!2sMunshi%20Pura%2C%20Mau%2C%20Uttar%20Pradesh%20275101!5e1!3m2!1sen!2sin!4v1628359823928!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <br>
    <br> <br> <br> <br> <br> <br>




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