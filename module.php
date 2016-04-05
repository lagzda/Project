<?php
 @session_start();
 require "config1.inc.php";
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Module information</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="padding-top:50px; padding-bottom:60px;">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="/">Hao useful</a>



    <?php 
    
    

     if($_SESSION['user']=="")
      {
       echo'
           <div class="navbar-brand"><span class="name">Please Login<?echo $?></span></div>';
      }
      else
      {
           echo'<p class="navbar-text navbar-right">';echo 'Hi '; echo  $_SESSION['name'];echo '! Your major is ';echo $_SESSION['major_name'] ;echo'!</p>';
       
      }


    ?>


        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <div class="pull-right">
              <form action="/logout.php" method="get">
                <button class="btn btn-default navbar-btn">Log out</button>
              </form>
          </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
        <h1>Module information</h1>
        <div class="col-xs-12 col-md-8">
    <?php
      $module_row=$_SESSION['module_row'];
      //echo count($module_row);
      //echo $module_row[0][0];
      
      foreach ($module_row as $module) {
        $module=$module[0];
        echo '<div>
              <div class="panel panel-primary">';
        echo '<div class="panel-heading">';
        echo  $module;

        echo '</div>
              <div class="panel-body" style="padding:0">
                  <table class = "table table-bordered" style="margin-bottom:0">
  
        <thead>
          <tr>
          <th>Teacher</th>
          <th>Classroom</th>
          <th>Time</th>
          </tr>
          </thead>
   


          <tbody>';

         
         $sql="select * from module where module_name='$module'";
         $result = mysql_query($sql);
         $module_info=mysql_fetch_row($result);
         if($module_info){
          echo'<tr>';
         echo '<td>';
         echo $module_info['2'];
         echo '</td>';
         
        
         
         echo '<td>';
         echo $module_info['3'];
         echo '</td>';
         

         
         echo '<td>';
         echo $module_info['4'];
         echo '</td>';
         
         echo '</tr>';



          echo '     
   </tbody>
  
</table>

</div>
            </div>
        </div>

';
         }
         else{
          echo 'can not find ';
         }
         
         
       }
 
 
?>
      
        </div>
        <div class="col-xs-12 col-md-4">
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
            <br>
            <div class="panel panel-info">
              <div class="panel-heading">help forum</div>
              <div class="panel-body" style="padding:0">
                <ul class = "list-group" style="margin-bottom:0">

               <li class = "list-group-item">
                  <span class = "badge">2016/03/30</span>
                  I do not know how to ..
               </li>
               <li class = "list-group-item">
                  <span class = "badge">2016/03/27</span>
                  I have problem in ..
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
