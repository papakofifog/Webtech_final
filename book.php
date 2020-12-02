<?php
  include_once 'connect_db.php';

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home</title>
        <link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href=".bootstrap-3.3.6/dist/css/bootstrap.css">
        <script type="text/javascript" src=".bootstrap-3.3.6/js/location.js">-->

        </script>

    </head>


    <body>
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Port OF Tema</a>
              </div>
              <ul class="nav navbar-nav" style="float:right">

                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="book.php">Book a service</a></li>
                <li><a href="process.php">Process</a></li>
                <li><a href="about.html">About</a></li>
              </ul>
            </div>
          </nav>
          <div class="container">
            <h3>Export with us</h3>
            <section>
                Have you already looked at the process page <br> <strong>if you haven't </strong>please <a href="process.php">click here</a>
                If you have seen the document and you still want to continue, <strong> please fill the form </strong> to give us your details.
            </section>
          </div>
          <div class="container">
            <form style="width:300px" action="connect_db.php" method="post" role="form" >
              <div class =form-group>
              <label for="compname">Company/Individual name</label>
              <input  id="compname" name="compname" type= "text" class="form-control" placeholder="Enter Company name" value="">
            </div>

            <div class="form-group">
              <label for="namelogistic">Name of Logistics</label>
              <input  id="namelogistic" name="namelogistic" type="text" class="form-control" placeholder="Logistic name" value="">
            </div>

            <div class="form-group">
              <label for="weight" >weight</label>
              <input id="weight" name="weight" type="text" class="form-control" placeholder="weight of object" value="">
            </div>

            <div class="form-group">
              <label for="locationproduct">Location of the product</label>
              <input id="locationproduct" name="locationproduct" type="text" placeholder="Enter the point on the map" value="">
            </div>

              <button type="submit" class="btn btn-default" name="details"> Submit</button>


            </form>
          </div>

          


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>






    </body>
</html>






