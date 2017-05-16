<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Bulk Order</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
		<link rel="stylesheet" href="css/custom-style.css">

		<style>
			.btn-print{
			  
			  -moz-appearance: none;
			    -moz-user-select: none;
			    background-color: #ae040f;
			    border: 1px solid transparent;
			    border-radius: 2px;
			    color: #fff;
			    cursor: pointer;
			    display: inline-block;
			    font-family: "Montserrat","HelveticaNeue","Helvetica Neue",sans-serif;
			    font-size: 1em;
			    font-style: normal;
			    font-weight: 400;
			    line-height: 1.42;
			    margin: 0;
			    padding: 8px 16px;
			    text-align: center;
			    text-decoration: none;
			    text-transform: uppercase;
			    vertical-align: middle;
			    white-space: nowrap;
			}

			.btn-print:hover{
				background-color: #e00513;
				color: #fff;
			}

			.parent {
			  position: relative;
			  height: inherit;
			}
			.child {
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  transform: translate(-50%, -50%);
			}

			.row-height {
			  display: table;
			  table-layout: fixed;
			  height: 100%;
			  width: 100%;
			}
			.col-height {
			  display: table-cell;
			  float: none;
			  height: 100%;
			}

		</style>

	</head>
	<body>
	<nav id="navbar" class="navbar navbar-default navbar-fixed-top1">
		<div class="container-fluid">
			<h6>&nbsp;</h6>
			<div class="row hidden">
				<!-- <div class="col-md-2 col-sm-2 col-xs-2">
					<a class="disabled" style="font-size:20px; text-decoration:none !important; color:1a1a1a !important;">Ship to Location</a>	
				</div> -->
				<div class="col-md-2 col-sm-2 col-xs-2" style="max-width:165px;">
					<a href="javascript:;" class="disabled"><h5>Choose Locations</h5></a>	
				</div>
				<!-- <div class="col-md-1 col-sm-1 col-xs-1" style="max-width:60px;">
					<h5><i class="fa fa-caret-right text-gray"></i></h5>
				</div> -->
				<!-- <div class="col-md-2 col-sm-2 col-xs-2" style="max-width:165px;">
					<a href="product.html" class=" text-gray"><h5>Select Products</h5></a>	
				</div> -->
				<div class="col-md-1 col-sm-1 col-xs-1" style="max-width:60px;">
					<h5><i class="fa fa-caret-right text-gray"></i></h5>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2" style="max-width:165px;">
					<a href="productAllocation.html" class=" text-gray"><h5>Product Allocation</h5></a>	
				</div>
				<div class="col-md-1 col-sm-1 col-xs-1" style="max-width:60px;">
					<h5><i class="fa fa-caret-right text-gray"></i></h5>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-3" style="min-width:190px; max-width:190px;">
					<!-- <a href="shipping.html" class=" text-gray">Shipping</a> -->
					<div class="select-wrapper">
						<select class="form-control text-center" style="font-size:13px; height:30px;">
							<option disabled selected>Shipping Class</option>
							<option>option 1</option>
							<option>option 2</option>
							<option>option 3</option>
						</select>
						<div class="next-icon" style=""><i class="fa fa-caret-down"></i></div>
					</div>	
				</div>
				
				<div class="col-md-3 col-sm-3 col-xs-3 pull-right">
					<a href="#" class="btn btn-success pull-right" style=""><span style="margin-left:25px; margin-right:25px;">Clear Bulk Order</span></a>	
				</div>
			</div>
			<hr class="hr-full">
			<button type="button" class="btn btn-primary pull-right">continue</button>
		</div>
	</nav>

		<div class="container-fluid">
			
				
			<div class="container-fluid">
				<label>Search in:</label>
				<label><input type="checkbox" name="search"> All</label>
				<label><input type="checkbox" name="search"> Region</label>
				<label><input type="checkbox" name="search"> City</label>
				<label><input type="checkbox" name="search"> State</label>
				<div class="input-group">
					<input type="text" class="form-control" name="text" />
					<span class="input-group-btn">
						<button class="btn btn-secondary" type="submit">Search</button>	
					</span>
				</div>
				
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="row-height">
						<div class="col-md-5" style="height:400px;">
						
						</div>
						<div class="col-md-2 parent col-height">
							<div class="child">
								<button type="button" class="btn btn-primary"><i class="fa fa-caret-left"></i><i class="fa fa-caret-left"></i></button>
								<br><br>
								<button type="button" class="btn btn-primary"><i class="fa fa-caret-right"></i><i class="fa fa-caret-right"></i></button>		
							</div>
						</div>
						<div class="col-md-5" style="height:400px;">
								
						</div>		
					</div>
				</div>
			</div>

			  <h4>&nbsp;</h4>
			  <div class="container-fluid">
		  		<!-- <div class="col-md-2 col-sm-2 col-xs-2"> -->
		  			<a href="#" class=""><button type="button" class="btn btn-primary">Add New Location</button></a>		
		  		<!-- </div> -->
		  		<!-- <div class="col-md-2 col-sm-2 col-xs-2"> -->
		  			<button class="btn btn-primary" data-toggle="collapse" data-target="#csv-upload">Add Bulk Locations</button>		
		  		<!-- </div> -->
		  		<!-- <div class="col-md-2 col-sm-2 col-xs-2"> -->
		  			<a href="#" class=""><button type="button" class="btn btn-primary">Download Template</button></a>		
		  		<!-- </div> -->
			  </div>

			  <h2>&nbsp;</h2>

			  <div id="csv-upload" class="collapse">
			  	<div class="form-group">
			    	<div class="col-md-12">
			    		<div class="col-md-4">
				    		<label for="concentrations"><strong>Bulk Location file Upload</strong></label>
		    				<input type="text" class="form-control" id="csv_upload_txt" disabled placeholder="No file Selected...">
				    		<span class="w3-tiny pull-right">(Supported format: csv, xls, xlsx)</span>
				    		<h6></h6>
				      	</div>
				      	<div class="col-md-1">
				      		<p style="font-size:1px;">&nbsp;</p>
				      		<input id="csv_upload" type="file" class="form-control" name="csv_upload" accept=".csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" style="opacity:0; height:0px;">
				      		<input type="button" class="form-control" id="" value="Upload" onclick="this.previousElementSibling.click();" style="display:inline;">
				      	</div>
			    	</div>
			  </div>

		</div>
		<h2>&nbsp;</h2>
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/jquery.bootstrap-duallistbox.js"></script>
		<script type="text/javascript">

			$( document ).ready(function() {
			  $("#distributors").bootstrapDualListbox({
			    // bootstrap2Compatible: false,
			    // selectedFilter: "4975133585"
			  });

			  $('.btn-primary').addClass('btn-print');
			  $('.btn-print').removeClass('btn btn-primary');
		  	});

			csv_upload = document.getElementById("csv_upload");
			csv_upload_txt = document.getElementById("csv_upload_txt");

			csv_upload.onchange = function(e){
				    var ext = csv_upload.value.match(/\.([^\.]+)$/)[1];
				    switch(ext)
				    {
				        case 'csv':
				        case 'xls':
				        case 'xlsx':
				            // alert('allowed');
				            break;
				        default:
				            alert('invalid file type');
				            this.value='';
				    }
				    csv_upload_txt.value = csv_upload.value.replace("fakepath","..");
			};
		</script>
	</body>
</html>