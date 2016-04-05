<?php 
@session_start();
  if($_SESSION['user'] != ""){
 	header( 'Location: /module.php' ) ;  }
?>
<!DOCTYPE html>
<head>
	<title>Login</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">	

	<script type="text/javascript">
	
	
		function CheckForm()
		{
			
			if (document.form.username.value=="")
			{
				alert("please input your id！");
				return false;
			}

			if (document.form.password.value=="")
			{
				alert("please input your password！");
				return false;
			}
						
			return true;
					
		}
    
     </script>


</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">

			<h1 class="margin-bottom-15">Login</h1>

			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30"  action="login.php?action=login1" method="post" name="form" onSubmit="return CheckForm()">	
			
			    


		        <div class="form-group">
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">

		            	<label for="username" class="control-label fa-label"><i class="fa fa-user fa-medium"></i></label>

		            	<input name="username" type="text" class="form-control" id="username" placeholder="username">
                        
		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">

		            	<label for="password" class="control-label fa-label"><i class="fa fa-lock fa-medium"></i></label>
		            	<input name="password" type="password" class="form-control" id="password" placeholder="password">

		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
	             	<div class="checkbox control-wrapper">
	                	<label>
	                  		<input type="checkbox"> Remember me
                		</label>
	              	</div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">

		          		<input type="submit" value="Log in" class="btn btn-info">

		          		<a href="forgot-password.html" class="text-right pull-right">Forgot password?</a>

		          	</div>
		          </div>
		        </div>
		   
		      </form>


		      <div class="text-center">

		      	<a href="create-account.html" class="templatemo-create-new">Create new account <i class="fa fa-arrow-circle-o-right"></i></a>
				
		      </div>
		</div>
	</div>


</body>
</html>