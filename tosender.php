<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "josefinaterrera@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo '<html>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 <link rel="stylesheet" href="css/main.css">
 
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<body> 
	<div class="container tosender">      
		<h1 class="text-center">U&B</h1>
	<div class="row">
		<div class=""><h3>Thank You for contacting us! We will respond to your message shortly.</h3></div>
		<div class="button-div">
			<a class="text-center center-block" href="index.php"><button class="">Go back to Site</button></a></div>
	</div>
</div>


<div class="footer-container">

  <div class="row">
    <div class="footer-social col-md-12">
      <ul class="social-icons">
        <li>
          <a href="" class="social-icon"> <i class="fa fa-facebook"></i>
          </a>
        </li>
        <li>
          <a href="" class="social-icon"> <i class="fa fa-twitter"></i>
          </a>
        </li>
        <li>
          <a href="" class="social-icon"> <i class="fa fa-youtube"></i>
          </a>
        </li>
        <li>
          <a href="" class="social-icon"> <i class="fa fa-google-plus"></i>
          </a>
        </li>
      </ul>
    </div>
</body> 
</html>';
?>