<!DOCTYPE html>
<html>
  <head>
    <title>student information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="admin/css/styles.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->
<style type="text/css">
		body{
    		background-image: url('admin/images/w1.jpg');
    	}
</style>

    <script type="text/javascript">
	$(document).ready(function(){
		$('form').submit(function(e){
			 var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
           	if(data != 1){

               alert(data); 
               // show response from the php script.
           	}
           	else{
              alert("your registration is succesful");
           		location.href="login.php";
           	}
           }
         });

    e.preventDefault();
		})
	})
</script>
  </head>
  <body >
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box" style="margin-top: 100px;">
			            <div class="content-wrap">
			                <h6>Sign Up</h6>
			              
	                        <form action="reg_b.php" method="post">
			                <input class="form-control" type="text" placeholder="username" name="uname"><br>
                      <input class="form-control"  type="email" name="gm" placeholder="mail@gamil.com"><br>
			                <input class="form-control" type="password" placeholder="Password" name="pass">
			                <input type="submit" value="Register" class="btn btn-primary">       
			                </form> <br>
                      <p>login to this site?<span><a href="login.php">Login</a></span></p>       
			            </div>
			        </div>

			      
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 
  </body>
</html>