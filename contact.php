<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us - Antique Statue</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
		<link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Shantell+Sans:wght@300&family=Tilt+Neon&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    
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
  <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
</div>
    <hr>
    <br/>
<div class="contact">
  <input type="hidden" name="contact-us" value="1" />
  <h1> Contact Us</h1>
  <br/>
  <br/>
  <form id="contact-us" action="action_page.php" method="get">
   <input type="hidden" name="contact-us" value="1" />
<br/>
              <br/>
        <!-- From here i start to make a form -->      
              <fieldset>  
              <legend>Your Information</legend>
                <br/>
                <br/>
                    <div>
                    <label for= "fname">First Name : </label>
                    <input type="text" name="fname" id="fname" required size=15 maxlength=25 placeholder="First Name" /><br/>
                      
                    </div>
                <br/>
                <br/>
                    <div>
                        <label for= "lname">Last Name : </label>
                      <input type="text" name="lname" id="lname" required size=15 maxlength=25 placeholder="Last Name" /><br/>
                         
                    </div>
                    <br/>
                <br/>
                    <div>
                    <label for="emailaddress">E-mail Address : </label>
                    <input id="emailaddress" type="text" name="emailaddress" required />
                    </div>
                <br/>
                <br/>
<br/>
                <br/>
                <div>
                <label for="msg">Message : </label>
      <textarea id="msg" name="user_message"></textarea>
              </div>
              </fieldset>
              <div class="button">
              <button class="btn" type="submit">Submit</button>
              </div>
              
    </form>
</div>
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