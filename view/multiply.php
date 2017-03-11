<!DOCTYPE html>
<html>
	<head>
		<title>multiply</title>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- css -->
		<style type="text/css">
			.form-inline{
				padding-top: 200px;
			}
			#row1{
				padding-top: 30px;
			}
			h1{
				background-color: grey; 
				color: white;
			}	
		</style>	

			<!--ajax using jQuery  -->
		<script type="text/javascript">
			$(document).ready(function(){
			    $("#submit").click(function(event){
			    	event.preventDefault();
			    	var firstno = $("#firstnumber").val();
			    	var secondno = $("#secondnumber").val();
			        $.ajax(
			        {
			        	type: "POST",
						url: "<?php echo base_url(); ?>" + "multiplycontroller/calculateMultiply",
						dataType: 'json',
						data: {first: firstno, second: secondno },
						success: function(result) {
							
						},
						error: function() { 
						    alert("error");
						} 
			        });
			    });
			});	
		</script>
	</head>
	<!-- body part -->
	<body>
		<div class="container">
			<div class="row" id="row1">
				<h1 align="center">multiplication</h1>	
				<div align="center">
					<form class="form-inline" role="form">
				        <div class="form-group">
				            <label>firstno</label>
				            <input type="text" class="form-control" id="firstnumber" placeholder="firstno">
				            <label>secondnumber</label>
				            <input type="text" class="form-control" id="secondnumber" placeholder="second">
				            <label>output</label>
				            <input type="text" class="form-control" id="output">  
				        </div>
				        <input type="submit" class="btn btn-primary" id="submit" value="submit">
				    </form>
				</div>		
			</div>
		</div>
	</body>
</html>