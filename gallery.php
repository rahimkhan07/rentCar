<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

.banner img{
    width: 100%;
    height: 220px;
    margin-top: 70px;
}
.banner h1{
    color: white;
    margin-top: -190px;
    padding-left: 20px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-weight: bolder;
    font-size: 100px;
}

@media screen and (max-width: 600px){
   small{
       display: none;
   }

   .banner{
       display: none;
   }
}

/*  gallery start*/

div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 8px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
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
    <title>Gallery</title>
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
                <li class="nav-item" style="border-color: black;"><a href="rent.html" class="nav-link" style="color: black;"  > Home</a></li>
                <li class="nav-item" style="border-color: black;"><a href="gallery.html" class="nav-link" style="color: black;"  > Gallery</a></li>
                <li class="nav-item" style="border-color: black;"><a href="service.html" class="nav-link" style="color: black;"  > Service</a></li>
                <li class="nav-item" style="border-color: black;"><a href="contect.html" class="nav-link" style="color: black;"  > Contect</a></li>
                <li class="nav-item" style="border-color: black;"><a href="booking.html" class="nav-link" style="color: black;"  >  Booking</a></li>
                <li class="nav-item" style="border-color: black;"><a href="offers.html" class="nav-link" style="color: black;"  > Offers%</a></li>
                
               
            </ul>
                
     </nav> 
   </div>

   <div class="banner">
       <img src="images/galleryTop.png">
       <h1>Image Gallery</h1>
   </div>

<!--startv gallery -->
   <div style="margin-top: 100px; ">
    <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="images/carlogo.jpeg">
            <img src="images/allion_w610_01.jpg" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_forest.jpg">
            <img src="images/allion_w610_01.jpg" alt="Forest" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      
      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_mountains.jpg">
            <img src="images/allion_w610_01.jpg" alt="Mountains" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <a target="_blank" href="img_lights.jpg">
            <img src="images/allion_w610_01.jpg" alt="Northern Lights" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
        </div>
      </div>
      
      <div class="clearfix"></div>
      
   </div>
  <br> <br> <br>

   <!--end gallery-->




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
        
        <a class="links" href="offers.html" style="color: black;"><b>>Offers%</b></a> <br>
       
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