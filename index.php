<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/theme/">
    <title>Invoice Maker</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body>    
	<div class="container-fluid">
	  <div class="row">		
		<div class="col-md-12">
			<div>		
			  <div class="form-group">
				 <label>Amount</label>		
					<div class="input-group">			   
					<input type="hidden" class="form-control" id="txtid">	
					<span class="input-group-addon">$</span>
					<input id="txtamount" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">			 
				  </div>
			  </div>			  			 
				<div class="form-group">
					<label>Date</label>
					<input type="text" class="form-control" id="txtdate" placeholder="Date">
				</div>		
				<button type="button" onclick="reload()" class="btn btn-default" title="Add Invoice">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add...
				</button>
				<button type="button" onclick="update()" class="btn btn-default" title="Update Invoice">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update
				</button>
				<button type="button" onclick="del()" class="btn btn-default" title="Remove Invoice">
					<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Remove
				</button>
			</div>
		</div>	  
		<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr> 
						<th>Amount</th>
						<th>Date</th> 
					</tr> 
				</thead> 
				<tbody></tbody> 
			</table>
		</div>
	  </div>
	</div>   
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="js/index.js"></script>
  </body>
</html>
