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
  <br/>
  <br/>
  <br/>
  <main>
    <h2>Thank You for Contacting Us</h2>
    <section>
      <?php

$fname='fname';

$fname=$_GET['fname'];

echo('<p> Your Message is sent to us. '.$fname.' you get answer very soon.</p>');

?>
    </section>
  </main>
  <footer>
    <p><small>©Html, css and java All rights reserved</small></p>
  </footer>
</body>
</html>
  </main>
</body>