<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="padding-top:50px; padding-bottom:60px;">
<?php

    //Connect to the database
    $host =  getenv('IP');;   //See Step 3 about how to get host name
    $user = "lagzda";                     //Your Cloud 9 username
    $pass = "";                                 //Remember, there is NO password!
    $db = "project";                          //Your database name you want to connect to
    $port = 3306;                               //The port #. It is always 3306

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

    //And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM Majors";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The Major is: " . $row['Name'];
    }
?>
      
      
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Project</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
        <h1>Major explorer</h1>
        <div class="col-xs-8">
            <div class="panel panel-primary">
              <div class="panel-heading">Major information</div>
              <div class="panel-body">
                    <b>Major name:</b> Computing<br/>
                    <b>Modules: </b><br/>
                <ul>
                   
                    <li><a href="./module.html"><b>Java</b></a> <!--TODO--></li> 
                    <li><a href="./math.html"><b>Mathematics</b></a> <!--TODO--></li> 
                    <li><a href="#"><b>Business</b></a> <!--TODO--></li> 
                    <li><a href="#"><b>Project management</b></a> <!--TODO--></li> 
                </ul>
              </div>
            </div>
        </div>
        <div class="col-xs-4">
            
            <div class="panel panel-info">
              <div class="panel-heading">Major notifications</div>
              <div class="panel-body" style="padding:0">
                <ul class = "list-group" style="margin-bottom:0">

               <li class = "list-group-item">
                  <span class = "badge">2016/03/30</span>
                  Mathematics is cancelled tommorow
               </li>
               <li class = "list-group-item">
                  <span class = "badge">2016/03/27</span>
                  Sign up for basketball this wednesday
               </li>

            </ul>
              </div>
            </div>
        </div>
    </div>
      
    <div id="footer" class="container">
        <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="navbar-inner navbar-content-center">
                <p class="text-muted credit" style="padding: 10px; margin-top:10px;">
                    Coventry University and Guangdong University
                </p>
            </div>
        </nav>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

