<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - Antique Statue</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
		<link rel="stylesheet" href="styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Shantell+Sans:wght@300&family=Tilt+Neon&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body>
  <header>
			<h1>Antique Statue</h1>
		</header>
    <hr>
     <form id="personal-detail" action="cart2.php" method="get">
    <br/>
    <br/>
    <div class="main">
      <div class="black">
     <h2>Please fill a personal detail to confirm your order</h2>
      </div>
            <form id="personal-detail" action="cart2.php" method="get">
                
                <input type="hidden" name="personal-detail" value="1" />
<br/>
              <br/>
        <!-- From here i started to make a form -->      
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
                    <label for="address">Address : </label>
                    <input id="address" type="text" name="address" required />
                    </div>
                <br/>
                <br/>
                    <div>
                  <label for="phoneno">Phone No. : </label>
                    <input id="phoneno" type="number" name="phoneno" required />
                    </div>
<br/>
                <br/>
                <div>
                <label for="msg">Message : </label>
      <textarea id="msg" name="user_message"></textarea>
              </div>
              </fieldset>
              <div class="button">
              <button class="btn" type="reset">Reset</button>
              <button class="btn" type="submit">Submit</button>
              </div>
              <a href="index.php" class="btn1">Go to home page</a>
    </form>
    </body>
      
</html>
