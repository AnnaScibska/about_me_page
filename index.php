<!DOCTYPE html>
<html lang="en">

  <html>
  
    <head>
	
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1"> 
	  
	  <title>Anula | About me</title>
	  
	  <link href="vendor/bootstrap/bootstrap.css" rel="stylesheet">
      <link href="main.css" rel="stylesheet">
	  
	  <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">	
	  <link href="https://fonts.googleapis.com/css?family=Kavivanar&amp;subset=latin-ext" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Carrois+Gothic+SC" rel="stylesheet">
	  <link rel="icon" href="img/favicon.png" type="image/x-icon"></link>	  
	  
	</head>
	
	<body id="page-top">
	
	  <div class="container-fluid">
		<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="colorChange">
		  <a href="#page-top" class="navbar-header">Anula</a>
		  <button class="navbar-toggler navbar-toggler-color-change" type="button" data-toggle="collapse" data-target="#myNavbar">
		  Menu<span class="navbar-toggler-icon icon-color-change "></span>
		  </button>
		  <div class="collapse navbar-collapse" id="myNavbar">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item">
				<a class="nav-link nav-link-color-change" href="#about">about </a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link nav-link-color-change" href="#badges">learning badges</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link nav-link-color-change" href="#code">code sample</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link nav-link-color-change" href="#contact">contact</a>
			  </li>
			</ul>
		  </div>
		</nav>
	  </div>
	  
	  <header>
		<h1>Anula</h1>
	  </header>
	  
	  <section id="about">
		<div class="pwrap">
		  <p class="temporary">/ about / <br/> work still in progress</p>
		</div>
	  </section>
	  
	  <section id="badges">
	    <div class="pwrap">
		  <p class="temporary">/ badges / <br/> work still in progress</p>
		</div>
	  </section>
	  
	  <section id="code">
	    <div class="pwrap">
		  <p class="temporary">/ code / <br/> work still in progress</p>
		</div>
	  </section>
	  
	  <section id="contact">
	    <div class="pwrap">
		  <p class="temporary">Contact me!</p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."#contact");?>" id="contactForm"> 
			  <div class="container">
				<div class="row">
				  <div class="form-group d-flex flex-column col-md-4">
					<label for="contactname">Name :</label>
					<input type="text" name="contactname" id="contactname" placeholder="Google" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Google'" required>
					<label for="contactemail">Email :</label>
					<input type="email" name="contactemail" id="contactemail" placeholder="google@google.com" onfocus="this.placeholder=''" onblur="this.placeholder='google@google.com'" required>
				  </div>
				  <div class="form-group d-flex flex-column col-md-8">
					<label for="message">Message :</label>
					<textarea name="message" rows="6" id="message" placeholder="We want to hire you as a CEO. Or as a Very Junior Web Developper. Contact us ASAP!" onfocus="this.placeholder=''" onblur="this.placeholder='We want to hire you as a CEO. Or as a Very Junior Web Developper. Contact us ASAP!'" ></textarea>
				  </div>
				</div>
				<button type="submit" name="submit" form="contactForm" value="Submit" class="submitBtn">SEND</button> 
			  </div>
			</form>
		  
		  	<?php
			  $servername = ********;
			  $username = ********;
			  $password = ********;
			  $dbname = ********;
				
			  $conn = new mysqli($servername, $username, $password, $dbname);
			  if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			  }
				
			  if (isset($_POST['submit'])) {
				$contactname = $_POST['contactname'];
				$contactemail = $_POST['contactemail'];
				$message = $_POST['message'];
					
				$sql = "INSERT INTO contactRecords (contactnameSQL, contactemailSQL, messageSQL) VALUES ('$contactname', '$contactemail', '$message')";

				if ($conn->query($sql) === TRUE) {
				  echo "<p class='thxMessage'>Thank you for sending a message :)</p>";
				} else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}
			  }
			?>
			
		</div>
	  </section>
	  
	  <footer>
	    <p>Copyright &copy; Anula 2017</p>
	  </footer>

	  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="vendor/bootstrap/bootstrap.js"></script>
	  <script src="main.js"></script>
	
	</body>
	
  </html>