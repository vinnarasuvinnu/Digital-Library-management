<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>



		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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



 $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable

 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search("^" + $(this).val() + "$", true, false, true)
                    .draw();
            }
        } );
    } );





         
          $.ajax({
        url:"admin/alltoo.php",
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
    '<td><a href="admin/read.php?file='+value.bpath+'"><img src="admin/'+value.path+'" height="50" width="50"></a></td>' +
    '<td>'+value.des+'</td>' +
    '<td id='+value.id+' onclick="call(this.id)"><a href="admin/down.php?file='+value.bpath+'&id='+value.id+'">Download</a>||<a href="admin/read.php?file='+value.bpath+'">View pdf</a></td>' +
        '<td>'+value.download+'</td>' +



    

  



    '</tr>'
)).draw(false);
        

    });


        }
    })

















      })
    </script>
		<style type="text/css">
			body{
    		background-image: url('admin/images/w1.jpg');
    	}
		</style>
    </head>
	<body>
	
		<!-- /HEADER -->

		<nav class="navbar navbar-default" style="background-color: white">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Digital Library</a>
    </div>
    <ul class="nav navbar-nav" style="float: right;">
      <li><a href="" style="color: black" class="btn btn-primary" >download page</a></li>
      
    </ul>
  </div>
</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
				
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-12">
						<!-- store top filter -->
					
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row table-responsive">
							<!-- product -->


					
  					<table  class="table table-striped table-bordered" id="example" style="color: blue" >
						<thead>
							<tr>
								<th>Bookname</th>
								<th>Author name</th>
								<th>Image</th>
                <th>Description</th>
                <th>Book to download</th>
                <th>Total downloads</th>
								
							</tr>
						</thead>


						<tbody>
						
							</tbody>

							<tfoot>
								<tr>
								<th>Bookname</th>
								<th>Author name</th>
								<th>Image</th>
                <th>Description</th>
                <th>Book to download</th>
                <th>Total downloads</th>
								
							</tr>
								

							</tfoot>
					</table>
  			

							<!-- /product -->

							<!-- product -->
							
							<!-- /product -->



					
							<!-- /product -->

							<!-- product -->
							
							<!-- /product -->

						

							<!-- product -->
						
						<!-- /store products -->

						
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->

				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Dgital library<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">gov college dharmpauri</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

	
	</body>
</html>
