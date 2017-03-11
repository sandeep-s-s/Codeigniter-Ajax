<!DOCTYPE html>
<html>
	<head>
		<title>update</title>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<style type="text/css">
			form{
				padding-top: 50px;
			}
			#row1{
				padding-top: 30px;
				padding-bottom: 40px;
			}
			h1{
				background-color: grey; 
				color: white;
			}
			#div4{
				padding-top: 100px;
			}
			
		</style>		
		<script type="text/javascript">
			$(document).ready(function(){
			    $("#submit").click(function(event){
			    	event.preventDefault();
			    	var username = $("#user").val();
			    	var password = $("#pass").val();
			        $.ajax(
			        {
			        	type: "POST",
						url: "<?php echo base_url(); ?>" + "dbupdatecontroller/updateDatas",
						dataType: 'html',
						data: {user: username, pwd: password },
						success: function(result) {
							$("#row2").html(result);
						},
						error: function() { 
						    alert("error");
						}
			        });
			    });
			});	
		</script>
	</head>
	<body>
		<div class="container">
			<div class="row" id="row1">
			<h1 class="text-center login-title">update</h1>
				<div class="col-md-4 col-md-offset-4">
	                 <form>
	                       <label>Username</label>
	                       <input name="name" id="user" type="text" class="form-control" placeholder="username" >
	                       <label>Password</label>
	                       <input name="password" id="pass" class="form-control" placeholder="Password" >
	                       <div id="div4">
	                          <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block" id="submit">
	                       </div>
	                </form>
				</div>
			</div>
			<div class="row" id="row2" align="center" style="background-color:green">
			</div>	
		</div>
	</body>
</html>