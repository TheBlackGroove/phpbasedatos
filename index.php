<!DOCTYPE html>
 	<html>
	<head>
		<title>UPC PHP</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	</head>
 <body>
	<div class="jumbotron text-center">
		<h1>UPC</h1>
		<p>Exígete innova</p>
	</div>

	<div class="container" style="margin-top: 200px">	
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
		 	<h1 style="text-align:center;">Alumnos</h1>
			 	<table class="table table-hover slideanim">
			 		<thead>
			 			<tr>
			 				<th>ID</th>
			   		     	<th>Firstname</th>
			        		<th>Lastname</th>
			        		<th>Email</th>
			        		<th></th>
			      		</tr>
			 		</thead>
			 		<tbody>
				 		<?php
							$servername = "us-cdbr-iron-east-03.cleardb.net";
							$username = "b74ba3320e82ec";
							$password = "2d194843";
							$dbname = "ad_bb6ddb2f34daf52";
							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							// Check connection
				  			if ($conn->connect_error) {
				    			die("Connection failed: " . $conn->connect_error);
				  			}
				  			$sql = "SELECT * from empleados";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
				    			// output data of each row
				      			while($row = $result->fetch_assoc()) {?>
				      			<?php echo "<tr>"; ?>
				  	    			<?php echo "<td>", $row['employee_id'], "</td>"; ?>
				  	    			<?php echo "<td>", $row['first_name'], "</td>"; ?>
				  	    			<?php echo "<td>", $row['last_name'], "</td>"; ?>
				  	    			<?php echo "<td>", $row['email'], "</td>"; ?>
				  	    			<?php echo "<td><a href=\"\" title=\"" , $row['first_name'] , " " , $row['last_name'],"\" data-toggle=\"popover\" data-trigger=\"focus\" data-content=\" Alumno \">Click me</a></td>"; ?>
				      			<?php echo "</tr>"; ?>
				    	 	<?php }
							} 
							else {
				   		    	echo "0 results";
				  			}
				  			$conn->close();
							?> 
			 		</tbody>
				</table>
			</div>
		 </div>
	 </div>
	 <div class="container-fluid bg-grey" style="margin-top: 200px;">
	 	<div class="row">
    		<div class="col-sm-6 col-sm-offset-2">
    			<h2>Matrícula</h2>
    			<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>      
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
      			<button class="btn btn-default btn-lg">Get in Touch</button>
    		</div>
    		<div class="col-sm-4">
    			<span class="glyphicon glyphicon-list-alt logo slideanim"></span>
    		</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2" >
				<span class="glyphicon glyphicon-globe logo slideanim"></span>
			</div>
			<div class="col-sm-6">
				<h2>Our Values</h2>
				<h4><strong>MISSION:</strong> Our mission lorem ipsum..</h4>      
				<p><strong>VISION:</strong> Our vision Lorem ipsum..</p>
			</div>
		</div>
	</div>
	<div clas="container-fluid">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>Comentarios</h2>
				
				<div class="media">
					<div class="media-left">
						<img src="../images/avatars/1.jpg" class="media-object" style="width: 60px;">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Jhon Doe <small><i>Comentado el 29 de abril del 2017</i></small> </h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<div class="media">
							<div class="media-left">
								<img src="../images/avatars/2.jpg" class="media-object" style="width: 60px;">
							</div>
							<div class="media-body">
								<h4 class="media-heading">Jhon Doe <small><i>Comentado el 29 de abril del 2017</i></small> </h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<div class="media">
									<div class="media-left">
										<img src="../images/avatars/3.jpg" class="media-object" style="width: 60px;">
									</div>
									<div class="media-body">
										<h4 class="media-heading">Jhon Doe <small><i>Comentado el 29 de abril del 2017</i></small> </h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
						</div>			
					</div>
							
				</div>
				<div class="media">
					<div class="media-left">
						<img src="../images/avatars/4.jpg" class="media-object" style="width: 60px;">
					</div>
					<div class="media-body">
						<h4 class="media-heading">Jhon Doe <small><i>Comentado el 29 de abril del 2017</i></small> </h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<div class="media">
							<div class="media-left">
								<img src="../images/avatars/5.jpg" class="media-object" style="width: 60px;">
							</div>
							<div class="media-body">
								<h4 class="media-heading">Jhon Doe <small><i>Comentado el 29 de abril del 2017</i></small> </h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){
		    $('[data-toggle="popover"]').popover();   
		});

		$(window).scroll(function() {
  			$(".slideanim").each(function(){
    			var pos = $(this).offset().top;
    			var winTop = $(window).scrollTop();
			    if (pos < winTop + 600) {
     				 $(this).addClass("slide");
    			}
  			});
		});
	</script>
	 
 </body>
 </html>