<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>BulkApp</title>
		<link rel="stylesheet" href="../css/uptown.css">
	</head>
	<body>
		<main>
		  <header>
		  	<h1>Locations</h1>
		  </header>
		  <section>
		  	<div class="columns has-sections card">
			  <ul class="tabs">
			    <li><a href="products.php">Products</a></li>
			    <li class="active"><a href="locations.php">Locations</a></li>
			    <li><a href="shipping.php">Shipping</a></li>
			    <li><a href="region.php">Region</a></li>
			    <li><a href="order-log.php">Order Log</a></li>
			  </ul>
			  <div class="card-section">
			    <div class="overflow-container">
			    	<table>
					  <thead>
					    <tr>
				    	  <th><input type="checkbox"></th>
					      <th><b>Market</b></th>
					      <th><b>Address</b></th>
					      <th><b>Email</b></th>
					      <th><b>City</b></th>
					      <th><b>Managed By</b></th>
					      <th><b>Action</b></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $count = 0; while($count++ < 10){?>
					    <tr>
					      <th><input type="checkbox"></th>
				    	  <td></td>
					      <td>15 Commerce Road</td>
					      <td>siteuser@lapineinc.com</td>
					      <td>Connecticut</td>
					      <td>siteadmin@lapineinc.com</td>
					      <td>
					      	<!-- <button class="secondary1 tip icon-edit" data-hover="Edit"></button>&nbsp; | &nbsp;<button class="secondary1 tip icon-redo" data-hover="Sync"></button> -->
					      	<span class="button-group">
					      		<button class="secondary tip icon-edit" data-hover="Edit"></button>
					      		<button class="secondary tip icon-close" data-hover="Remove"></button>
				      		</span>
					      </td>
					    </tr>
					    <?php } ?>
					  </tbody>
					</table>
			    </div>
			    <!-- <br> -->
			    <!-- <article> -->
					<div class="column-eight pagination">
						<span class="input-group" style="justify-content: center;">
							<button class="secondary tip icon-prev" disabled="disabled" data-hover="First"><i class="icon-prev"></i></button>
							<button class="secondary tip icon-prev" disabled="disabled" data-hover="Prev"></button>
							<span class="append" style="font-size:8px; color: #c3cfd8;">&#9899;&#9899;&#9899;</span>
							<button class="secondary1">1</button>
							<button class="secondary" data-href="page.php">2</button>
							<button class="secondary">3</button>
							<span class="append" style="font-size:8px; color: #c3cfd8;">&#9899;&#9899;&#9899;</span>
							<button class="secondary tip icon-next" data-hover="Next"></button>
							<button class="secondary tip icon-next" data-hover="Last"><i class="icon-next"></i></button>
						</span>
					</div>

					<!-- <div class="column four hide">
						<div class="input-group">
						  <input type="number" min="1" max="7" placeholder="Go to Page" style="max-width:100px;"/>
						  <button class="secondary1">Go</button>
						</div>
					</div> -->
				<!-- </article> -->
			  </div>
			</div>
		  </section>
		  <footer>

		  </footer>
		</main>
	</body>
</html>