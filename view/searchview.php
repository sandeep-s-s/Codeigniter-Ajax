 <!DOCTYPE html>
<html>
	<head>
		<title>search</title>
		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- css -->

		<style type="text/css">
			#custom-search-input {
			        margin:0;
			        margin-top: 100px;
			        padding: 0;
			    }
			 
			    #custom-search-input .search-query {
			        padding-right: 3px;
			        padding-right: 4px \9;
			        padding-left: 3px;
			        padding-left: 4px \9;
			        /* IE7-8 doesn't have border-radius, so don't indent the padding */
			 
			        margin-bottom: 0;
			        -webkit-border-radius: 3px;
			        -moz-border-radius: 3px;
			        border-radius: 3px;
			    }
			 
			    #custom-search-input button {
			        border: 0;
			        background: none;
			        padding: 2px 5px;
			        margin-top: 2px;
			        position: relative;
			        left: -28px;
			        margin-bottom: 0;
			        -webkit-border-radius: 3px;
			        -moz-border-radius: 3px;
			        border-radius: 3px;
			        color:#D9230F;
			    }
			    h2{
			    	padding-top: 150px;
			    	color: 
			    }
			
		</style>
		
			

			<!--ajax using jQuery  -->
		<script type="text/javascript">
			$(document).ready(function(){
			    $("#cityvalue").keyup(function(event){
			    	
			    	var citydata = $("#cityvalue").val();
			        $.ajax(
			        {
			        	type: "POST",
						url: "<?php echo base_url(); ?>" + "searchcontroller/citySearch",
						dataType: 'json',
						data: {city: citydata},
						success: function(result) {
							$.each(result, function() {
							  $.each(this, function(k, v) {
							    var thehtml = '<p> ' + v.city + '<p><br>';
							         $('#list').html(thehtml);
							  });
							});
						}
						// error: function() { 
						//     alert("error");
						// } 
			        });
			    });
			});	
		</script>
	</head>
	<!-- body part -->
	<body>
		<div class="container">
			<div class="row">
				<h2 align="center">citysearch.com</h2>
				<form>
	           		<div id="custom-search-input">
	                    <div class="input-group col-md-12">
	                        <input type="text" class="search-query form-control" placeholder="Search" id="cityvalue" />
	                    </div>
	                </div>
                </form>
                <div id="div5">
                	<ul>
                		<li id="list"></li>
                	</ul>
                </div>
			</div>
		</div>
	</body>
</html>