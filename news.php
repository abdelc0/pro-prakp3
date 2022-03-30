<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.01">
    <title>utrecht pizza</title>
    <!-- End Google fonts css -->
    <link href="script.js" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="background_styles.css">
  </head>
  <body>
    


 
      <h1>referenties</h1>
      <h1>vul hier onder je mening over utrecht pizza</h1>
     <div class="read"><a href="read.php">read</a></div>
      <div class="container">
      <form action="creath.php" method="post">
      
          <div class="kleintext"> <label for="fname">klein text</label>
          <input type="hallo" id="kleintext" name="kleintext" placeholder="Your name..">
      
          <label for="hoodtext"> hoofdtext</label>
          <input type="hallo" id="hoodtext" name="hoodtext" placeholder="Your last name.."></div>

    </header>

        </form>
        <div class="read"></div>
        <div class="container">  
  <form id="contact" action="creath.php" method="post">
    <h3>Nieuwe Nieuws</h3>
    <h4>Als een editor kunt u hier nieuwe nieuws toevoegen.</h4>
    <fieldset>
      <input placeholder="Klein text" type="text" tabindex="1" id="kleintext" name="kleintext" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Hoofd text" type="text" tabindex="2" id="hoodtext" name="hoodtext" required>
    </fieldset>
    <fieldset>
      <input placeholder="img" type="text" id="img" tabindex="3" name="img" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="read more" tabindex="10" id="readmore" type="text" name="readmore" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
      </div>
      
      <style>
        * {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#555;
}

.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}

      .dark-mode {
        background-color: black;
        background-color: darkgray;
        bottom: 0;
        left: 0;
      }
      .light-mode {
        background-color: white;
        color: black;
        bottom: 0;
        left: 0;
      }
      

      </style>     

      <script>     
         function darkMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "dark-mode";
        content.innerText = "Dark Mode is ON";
      }
      function lightMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "light-mode";
        content.innerText = "Dark Mode is OFF";
      }</script>
</body>
</html>


