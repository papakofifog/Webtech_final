<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Home</title>
        <link rel="stylesheet" href=".bootstrap-3.3.6/dist/css/bootstrap.min.css">
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
              <ul class="nav navbar-nav">

                <li class="active"><a href="#">Home</a></li>
                <li><a href="book.php">Book a service</a></li>
                <li><a href="process.php">Process</a></li>
                <li><a href="about.html">About</a></li>
              </ul>
            </div>
          </nav>
          <div class="container">
            <h3>Export with us</h3>
            <section>Have you already looked at the process page <br> <strong>if you haven't</strong>please <a href="process.php">click here</a> </section>


            <form action="book.php" method="post" role="form" >
              <div class =form-group>
              <label for="comp_name">Company/Individual name</label>
              <input type="text" name="comp_name" value="">
            </div>

            <div class="form-group">
              <label for="name_logistic">Name of Logistics</label>
              <input type="text" name="name_logistic" value="">
            </div>

            <div class="form-group">
              <label for="Weight of the product">weight</label>
              <input type="number" name="weight" value="">
            </div>
            <div class="form-group">
              <label for="location_product">Location of the product</label>
              <input type="location" name="location_product" value= getLocation()>
            </div>

              <button type="submit" class="btn btn-primary"> Submit</button>


            </form>
          </div>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>






    </body>
</html>
