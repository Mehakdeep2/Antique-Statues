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
   <br/>
   <section>
				<h3>Terms Of Use</h3>
				<p>Turpis nunc eget lorem dolor sed. Vel facilisis volutpat est velit egestas dui id. Quam quisque id diam vel quam. Mauris a diam maecenas sed enim. Tortor posuere ac ut consequat. Sed adipiscing diam donec adipiscing tristique risus nec feugiat. Mi quis hendrerit dolor magna eget est lorem ipsum dolor. Vitae elementum curabitur vitae nunc sed velit. Mollis nunc sed id semper. Diam vel quam elementum pulvinar. Ultrices gravida dictum fusce ut.</p>
<br/>
				<h4>Warranty</h4>
     <br/>
				<p>Pellentesque sit amet porttitor eget. Aliquam ultrices sagittis orci a scelerisque purus semper eget duis. Dictum fusce ut placerat orci nulla pellentesque dignissim. Rhoncus mattis rhoncus urna neque viverra. Id semper risus in hendrerit gravida rutrum quisque non tellus. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt lobortis.</p>
<br/>
				<h4>Indemnification</h4>
     <br/>
				<p>Lorem mollis aliquam ut porttitor leo a diam. Elementum eu facilisis sed odio morbi quis commodo. Suspendisse interdum consectetur libero id faucibus nisl. Tempus urna et pharetra pharetra. Vitae justo eget magna fermentum iaculis eu non diam phasellus. Mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Sed faucibus turpis in eu mi bibendum. Sollicitudin aliquam ultrices sagittis orci.</p>
<br/>
				<h4>Arbitration</h4>
     <br/>
				<p>Nam suscipit egestas porta. Aliquam pellentesque mauris a sem euismod, id sollicitudin dolor elementum. Proin ullamcorper tortor est, hendrerit congue risus aliquet ac. Sed consequat turpis nec ultricies ullamcorper. Nullam nec viverra ipsum. Sed placerat quam quis fermentum molestie. In urna tellus, volutpat id mollis ut, vestibulum vel quam. Proin arcu odio, tempor id sapien sit amet, mollis tincidunt tellus. Donec pulvinar accumsan diam, nec dignissim enim vulputate maximus.</p>
<br/>
				<h4 id="limitation-liability">Limitation of Liability</h4><br/>
				<p>Nunc sit amet mauris leo. Nullam bibendum quam a gravida consectetur. Integer viverra ipsum sit amet ligula elementum, eget faucibus ante ornare. Aenean at fermentum enim. Vestibulum lacinia vestibulum nibh, eleifend sodales augue pulvinar quis. Mauris tincidunt, nibh ac elementum interdum, risus leo vestibulum mauris, non mattis dui quam quis est. Quisque placerat pellentesque tincidunt. Proin consectetur congue vehicula. Morbi blandit dolor et convallis feugiat.</p>
			</section>
   <br/>
 </div>
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