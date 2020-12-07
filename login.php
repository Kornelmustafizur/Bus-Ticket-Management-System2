<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="icon" type="text/css" href="pics/logo.png">
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .parallax {
            /* The image used */
           background-image: url("pics/p5.jpg");



            /* Set a specific height */
            height: 800px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;



        }
    </style>


  </head>
  <body>
    <!-- Nabvar-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"></a>
                <a class="navbar-brand" style="color:white" href="#"><em>RSKT</em> <span style="margin-left: 20px">Bus Service</span></a>

            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="home.html">Home</a></li>
                <li><a href="reserve.php">Book a Ticket</a></li>
                <li><a href="cancelticket.php">Cancel Ticket</a></li>
                <li><a href="#">Routes</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <!--navbar ends-->


    <div class="loginBox">
			<img src="pics/user.png" class="user">
			<h2>Log In</h2>
			<form>
				<p>Email</p>
				<input type="text" name="" placeholder="Enter Email">
				<p>Password</p>
				<input type="password" name="" placeholder="••••••">
				<input type="submit" name="" value="Sign In">

        <br>
        <br>
				<a href="#">Forget Password</a>
        <br>
        <br>
        <br>
        <a href="index.html">Back to home</a>
			</form>
		</div>



  </body>
</html>
