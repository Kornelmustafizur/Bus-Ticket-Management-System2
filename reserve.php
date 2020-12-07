
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reservation</title>
    <link rel="icon" type="text/css" href="pics/logo.png">
    <link rel="stylesheet" href="reserve_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
			<img src="pics/bus1.png" class="bus">
			<h2>Search for Bus</h2>

			<form action="bus.php" method="POST">
				<p>From</p>
				<input type="text" name="from" value="" placeholder="Enter city ">
				<p>To</p>
				<input type="text" name="to" value="" placeholder="Enter city">
        <p>Date of Journey</p>
				<input type="Date" name="journey" value="" placeholder="Pick a date">
        <p>Date of Return</p>
				<input type="Date" name="return" value="" placeholder="Pick a date">
				<input type="submit" name="" value="Search Bus">
				<a href="home.html">Back to home</a>

        <!-- <form action="insert.php" method="POST">
            From: <input class="" type="text" name= "From" value=""/> <br>
            To: <input class="" type="text" name= "To" value=""/> <br>
            Date of Journey <input class="" type="date" name= "Date of Journey" value=""/> <br>
            Date of Return <input class="" type="date" name= "Date of Return" value=""/> <br>
            <button class="" onclick="myFunction()">Register</button> -->
			</form>
		</div>
  </body>
</html>
