<?php
// Purpose: 
$full_name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$servername = "mysql.hostinger.ph";
$username = "u710095918_contactForm";
$password = "RaiyanTech0101#";
$dbname = "u710095918_contactForm";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO contact (Name, Email, Message)
  VALUES ('$full_name', '$email', '$message')";
  // use exec() because no results are returned
  $conn->exec($sql);
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About/Contact</title>
    <link rel="icon" type="image/x-icon" href="hn.webp">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
    .info-section {
      padding: 50px 0;
      color: #eee8e8;
    }
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#">HCPSSNotifier</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
			aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ms-auto">
			  <li class="nav-item">
				<a class="nav-link" href="index.html">Home</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">About/Contact</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="privacy.html">Privacy Policy</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="disclaimer.html">Disclaimer</a>
			  </li>
			</ul>
		  </div>
		</div>
	</nav>
	<!-- About section -->
    <div class="container-fluid bg-dark text-light py-5">
        <div class="row justify-content-center">
          <div class="col-md-6">
          <h2 id="aboutTitle">About Us</h2>
          <p class="aboutText">I am Raiyan Zaman, a programmer and book/movie enthusiast. This website is dedicated to reviewing various books and movies, as well as other things. Our goal is to provide honest and unbiased reviews to help you make informed decisions about what to read or watch next.</p>
          <p class="aboutText">Our goal is to provide thoughtful and insightful reviews that will help you make informed decisions about what to read or watch next. We believe that books and movies have the power to inspire, educate, and entertain, and we are passionate about sharing our love for these mediums with others.</p>
		      <p class="aboutText">Thank you for visiting our website, and we hope you enjoy our content!</p>
		      <p class="aboutText">Sincerely,<br> Raiyan Zaman</p>
          </div>
          <div class="col-md-6">
            <h2>Contact Us</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="contact-form">
              <div class="form-group">
                <label class="formName" for="inputName">Name</label>
                <input name="name" type="text" class="form-control" id="inputName" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label class="formName" id="formItems" for="inputEmail">Email address</label>
                <input name="email" type="email" class="form-control" id="inputEmail" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label class="formName" id="formItems" for="inputMessage">Message</label>
                <textarea name="message" class="form-control" id="inputMessage" rows="10" placeholder="Enter your message"></textarea>
              </div>
              <button id="formItems" type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
    </div>      
	<footer class="bg-dark text-center text-white">
		<div class="container p-4">
		  <div class="row">
			<div class="col-lg-12">
			  <p class="mb-0">© 2023 Property of Raiyan. All rights reserved.</p>
			</div>
		  </div>
		</div>
	</footer>
</body>
</html>