<?php
session_start();
if(!isset($_SESSION['aname'])){
	echo '<script>';
	echo 'alert("please login via login form");location.href="login.php"';
	echo '</script>';
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.jqueryui.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	body{
    		background-image: url('images/w1.jpg');
    	}
      img{
        height: 30;
        width: 30;
      }
    </style>
    <script type="text/javascript">
        function call(id) {
      location.reload();
setTimeout(function(){ location.reload(); }, 3000);
        // body...
      }
      $(document).ready(function(){
            var table=$('#example').DataTable();

          $.ajax({
        url:"alltoo.php",
        method:"post",
        data:{},
        success:function(data){
            console.log(data);

            var data=JSON.parse(data);
            data=data.result;
            console.log(data);
                $.each(data, function(key,value) {



            table.row.add($(
    '<tr>' +
    '<td>'+value.bname+'</td>' +
        '<td>'+value.aname+'</td>' +
    '<td><a href="read.php?file='+value.bpath+'"><img src="'+value.path+'" height="50" width="50"></a></td>' +
    '<td>'+value.des+'</td>' +
 '<td id='+value.id+' onclick="call(this.id)"><a href="down.php?file='+value.bpath+'&id='+value.id+'">Download</a></td>' +
             '<td>'+value.download+'</td>' +



    

  



    '</tr>'
)).draw(false);
        

    });


        }
    })
      })
    </script>
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	     	
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Digital library admin</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                       
	                          <li><a href="logout.php" class="btn btn-warning">Logout</a></li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		 <div class="col-lg-2">
     </div>
		  <div class="col-md-10">

		  

  	


  			<div class="content-box-large">
  				<div class="container">
  					<div class="row">
  						<div class="col-lg-6 col-sm-6">
  							<div class="card">
  								<h3 class="text-center">Add book</h3>
  								<form class="from-group" action="upload.php" method="post" enctype="multipart/form-data">
  								<lable>Enter book name</lable>
  								<input type="text" name="book" class="form-control">
  								<br>
  								<lable>Enter Author name</lable>
  								<input type="text" name="auth" class="form-control">
  								<br>
  								<lable>Enter book image</lable>
  								<input type="file" name="pimage" class="form-control">
  								<br>
  								<lable>Enter book description</lable>
  								<input type="text" name="des" class="form-control" style="height: 100px;">
  								<br>
                  <lable>Insert book pdf</lable>
                  <input type="file" name="bpdf" class="form-control" >
                  <br>
  								<input type="submit" class="btn btn-primary">
  							</form>
  							</div>
  						</div>
  					</div>
  				</div>
  			
  			</div>

  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Books list</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" style="color: blue">
						<thead>
							<tr>
								<th>Bookname</th>
								<th>Author name</th>
								<th>Image</th>
                <th>Description</th>
                <th>Book to download</th>
                <th>Total Downalod</th>
								
							</tr>
						</thead>
						<tbody>
						
							</tbody>
					</table>
  				</div>
  			</div>



		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
  </body>
</html>