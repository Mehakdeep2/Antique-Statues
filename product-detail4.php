<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product - Antique Statue</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
		<link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Shantell+Sans:wght@300&family=Tilt+Neon&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
     <div class="container">
       <div class="hero">
         <div class="logo">
           <img src="img/logo.png" width="125px" >
           </div>
             <nav>
               <ul id="menuitems">
                 <li><a href=index.php>Home</a></li>
                 <li><a href=Product.php>Product</a></li>
                 <li><a href=aboutus.php>About Us</a></li>
                 <li><a href=Contact.php>Contact Us</a></li>
               </ul>
            </nav>
            <img src="img/6011.png" width="30px" height="30px">
            <img src="img/menu.png" class="menu-icon" 
            onclick="menutoggle()">
      </div>
    </div>  
   <hr>
    <br/>
    <br/>
    <br/>

  <!--------------single product detail---------------->
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="img/statue/5.jpeg" alt="" width="500px">
      </div>
        <div class="col-2">
          <p>Home / Product</p>
          <h1>Antique Brass Buddha Statue</h1>
          <h4>$59.00</h4>
          <a href="cart.php" class="btn">Buy Now</a>
          <h3>Product Details <i class="fa fa-indent"></i></h3><br/>
          <p>[Item] Vintage Brass Miniatures Figurines.
[Type] Home Decorations Accessories.
[Material] Metal Brass Plated.
[Size] 77*97mm / 3.0*3.8 Inch(Length*Height).
[Net Weight] About 336g.
</p>
        </div>
    </div>
    </div>
      <br/>
    <br/>
    
    <br/>
    <!----------------title------------------------->
    <div class="small-container">
      <div class="row row-2">
        <h2>Related Products</h2>
      </div>
    </div>
    <br/>
    <br/>
    <br/>
    <!-------------------product----------------->
      <div class="row">
         <div class="col-4">
          <a href=product-detail1.php><img src="img/statue/2.jpeg"></a>  
           <h4>Antique Buddha Statue</h4>
           <div class="rating">
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" aria-hidden="true"></i>
           </div>
           <p>$369.99</p>
         </div>
         <div class="col-4">
         <a href=product-detail2.php><img src="img/statue/3.jpeg">  </a>
           <h4>Antique Bronze African Statue</h4>
           <div class="rating">
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" aria-hidden="true"></i>
           </div>
           <p>$3599.99</p>
         </div>
         <div class="col-4">
        <a href=product-detail3.php><img src="img/statue/4.jpeg"></a>  
           <h4>Vintage French/statue of the 19th century</h4>
           <div class="rating">
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star" ></i>
             <i class="fa fa-star-o" aria-hidden="true"></i>
           </div>
           <p>$129.00</p>
          </div>
       </div>
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