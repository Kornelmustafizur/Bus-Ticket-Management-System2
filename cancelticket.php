<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cancel Ticket</title>
    <link rel="icon" type="text/css" href="pics/logo.png">
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="cancel_style.css">
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

    <div class="parallax">
        <div class="container">
            <div class="row">
                <div class="Reservation">


                    <h1 style="text-align: center; color:antiquewhite"><b>Cancel a Ticket</b></h1>



                    <form name="myform" style="border-style: solid;
  border-width: 5px; text-align: center;padding: 30px; background-color: antiquewhite;" action="index.html" method="post" onsubmit="return validateForm()">
                        Date: <input type="date" name="date" placeholder="date" value=""> <br><br>
                        From: <input type="text" name="From" placeholder="From"><br><br>

                        To: <input type="text" name="To" placeholder="To"><br><br>

                        Coach Type: <input type="text" name="coachtype" placeholder="coachtype"><br><br>





                        Your Number: <input type="number" name="number" placeholder="number" value="">
                        <br><br>



                        <input type="submit" style="padding: 10px;" name="submit" value="Submit">





                    </form>





                </div>

            </div>




        </div>

    </div>










</body>


</html>
