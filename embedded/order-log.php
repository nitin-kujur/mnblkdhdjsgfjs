<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>BulkApp</title>
		<link rel="stylesheet" href="../css/uptown.css">
	</head>
	<body>
		<main>
		  <header>
		  	<h1>Order Log List</h1>
		  </header>
		  <section>
		  	<div class="columns has-sections card">
			  <ul class="tabs">
			    <li><a href="products.php">Products</a></li>
			    <li><a href="locations.php">Locations</a></li>
			    <li><a href="shipping.php">Shipping</a></li>
			    <li><a href="region.php">Region</a></li>
			    <li class="active"><a href="order-log.php">Order Log</a></li>
			  </ul>
			  <div class="card-section">
			    <div class="overflow-container1">
			    	<br>
			    	<div class="input-group">
					  <select>
					  	<option>All</option>
					  	<option>ID</option>
					  	<option>Shopify Order Id</option>
					  	<option>Customer</option>
					  	<option>Order Date</option>
					  	<option>Status</option>
					  </select>
					  <input type="search" />
					  <button class="secondary tip icon-close" data-hover="Clear"></button>
					  <button class="secondary tip icon-search" data-hover="Search"></button>
					</div>
					<br>
			    	<table>
					  <thead>
					    <tr>
					      <th><b>ID</b></th>
					      <th><b>Shopify Order Id</b></th>
					      <th><b>Customer</b></th>
					      <th><b>Qty.</b></th>
					      <th><b>Order Date</b></th>
					      <th><b>Status</b></th>
					      <th><b>Action</b></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $count = 0; while($count++ < 10){?>
					    <tr>
					      <td>1538</td>
					      <td>5259617873</td>
					      <td>Sureshsha Sureshsha</td>
					      <td>2</td>
					      <td>2017-05-11 20:19:24 UTC</td>
					      <td><span class="tag green">Completed</span></td>
					      <td>
					      	<a href="admin/orders/5259617873"><button class="secondary">View</button></a>
					      	<!-- <span class="button-group">
					      		<button class="secondary tip icon-edit" data-hover="Edit"></button>
					      		<button class="secondary tip icon-redo" data-hover="Sync"></button>
				      		</span> -->
					      </td>
					    </tr>
					    <?php } ?>
					  </tbody>
					</table>
			    </div>
			    <!-- <br> -->
			    <!-- <article> -->
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