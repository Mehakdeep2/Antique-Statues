<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antique Statue</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
		<link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Shantell+Sans:wght@300&family=Tilt+Neon&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

        
    <div class="header">
      
 <div class="container">
 
    
<div class="hero">
  <div class="logo">
    <img src="img/logo.png" width="125px" >
  </div>
<nav>
  <ul id="menuitems">
    <li><a href=index.php>Home</a></li>
    <li><a href=Product.php>Product</a></li>
    <li><a href=navigation.php>About Us</a></li>
    <li><a href=Contact.php>Contact Us</a></li>
    </ul>
</nav>
  <img src="img/6011.png" width="30px" height="30px">
  <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
</div>
   <hr>
   <div class="row">
     <div class="col-2">
     <h1>What is Antique Statue ?</h1>
       <h2>An antique statue is a sculpture that is typically over 100 years old and is considered a valuable piece of art due to its age, historical significance, and aesthetic beauty. These statues were created by skilled artists in ancient or earlier eras and were often made using materials such as marble, bronze, or wood.</h2>
       <a href="Product.php" class="btn">Explore Now &#8594;</a>
     </div>
     <div class="col-2">
       <img src="img/main.jpeg" width="300px" style="float:right">
     </div>
     <br/>
   </div>
     <h1 style="float:middle"> What we are ?</h1>
     <br/>
     <br/>
     <h2>An antique statue shop is a fascinating place that showcases a range of beautifully crafted sculptures from different eras and regions of the world. These shops are typically filled with exquisite pieces of art, ranging from Greek and Roman classical statues to medieval European sculptures, and even Asian and African artifacts. Walking through an antique statue shop is like taking a trip back in time, where you can appreciate the incredible skill and artistry that went into creating these pieces. Collectors and enthusiasts often visit these shops to find unique and rare statues to add to their collections or decorate their homes. Overall, an antique statue shop is a wonderful place to explore and appreciate the beauty of historical art.</h2>
   </div>
 </div>
   </div>
    <br/>
    <br/>
    <br/>
    




    <br/>
    <br/>
    <!-----------footer----------->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Ancient Statue</h3>
            <p>We provide a Ancient Sculpture or Statue<br/> which are make by our ancestors. </p>
          </div>
          <div class="footer-col-2">
            <img src="img/logo.png">
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <a href="Contact.php"><li>Contact us</li></a>
              <a href="privacy-policy.php"><li>Privacy-policy</li></a>
              <a href="return-policy.php"><li>Return Policy</li></a>
              <a href="term-&-Conditions.php"><li>Term & Conditions</li></a>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow Us</h3>
            <ul>
              <a href="https://www.facebook.com/profile.php?id=100090602011543"<li>Facebook</li></a>
              <a href="https://www.instagram.com/mehakdeep.2412"><li>Instagram</li></a>
              <a href="https://www.linkedin.com/in/mehakdeep-kaur-29518b261/"><li>LinkedIn</li></a>
            </ul>
          </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2023 - HTML, CSSand JAVA</p>
      </div>
    </div>
    <!---------------js for toggle menu-------->
    <script>
      var menuitems = document.getElementById("menuitems");
      menuitems.style.maxHeight = "0px";
      function menutoggle(){
        if (menuitems.style.maxHeight == "0px")
        {
           menuitems.style.maxHeight = "200px";
        }
        else
        {menuitems.style.maxHeight = "0px";}
      }
        
    </script>
    </body>
      
</html>