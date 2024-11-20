<!DOCTYPE html>
<html>
<head>
	<title>Ibrahim Abas/ Stock</title>
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/bootstrap-table.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/toast.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/product.css') }}" rel="stylesheet">



</head>
<body>

	<div class="container">
		<h4>Add New Product</h4>

		<form action="{{ route('stock.save') }}" method="POST">
    @csrf

		<table class="table">
		  	<tbody>
			    <tr >
			      	<td>
				      	<div class="form-group " id="productName">
							<label for="Product Name:">Product Name:</label>
							<input class="form-control" placeholder="Enter Product Name" name="productName" type="text" required="required">
							<br />
							<span class="text-danger"></span>
						</div>
			      	</td>
			      	<td>
		      			<div class="form-group " id="quantity">
							<label for="Quantity in stock:">Quantity In Stock:</label>
							<input class="form-control" placeholder="Enter Quantity" name="quantity" type="number" required="required">
							<br />
							<span class="text-danger"></span>
						</div>
			      	</td>
			      	<td>
			      		<div class="form-group " id="pricePerItem">
							<label for="Price per Item:">Price Per Item:</label>
							<input class="form-control" placeholder="Enter Price per Itrm" name="pricePerItem" type="number" required="required">
							<br />
							<span class="text-danger"></span>
						</div>
			      	</td>
			      	<td>
			      		<div class="form-group ">
			      			<br />
		      				<button class="btn btn-success" type="submit">Save</button>
			      		</div>
			      	</td>
			    </tr>
		  	</tbody>
		</table>

		</form>
		<h4>Product Listing</h4>
		<table class="table" id="productTable" style ="text-align: center;">
			<thead>
				<tr>
					<th scope="col" style ="text-align: center;">SR#</th>
					<th scope="col" style ="text-align: center;">Product Name</th>
					<th scope="col" style ="text-align: center;">Quantity in stock</th>
					<th scope="col" style ="text-align: center;">Price per Item</th>
					<th scope="col" style ="text-align: center;">Date submitted</th>
					<th scope="col" style ="text-align: center;">Json File</th>
					<th scope="col" style ="text-align: center;">Total Value number</th>
					<th scope="col" colspan="3" style ="text-align: center;">Actions</th>
				</tr>
			</thead>
		  	<tbody id="productsTableData"></tbody>

		  	<thead>
		  		<tr>
		  			<td></td>

		  			<td>
		  				<div class="form-group ">
							<label for="Sum:">Sum:</label>
						</div>
		  			</td>
		  			<td>
		  				<div class="form-group ">
							<label for="sumOfQuantity:" id="sumOfQuantity"></label>
						</div>
		  			</td>
		  			<td>
		  				<div class="form-group ">
							<label for="totalSum:" id="totalSum">Sum:</label>
						</div>
		  			</td>
		  			<td></td>
		  			<td></td>
		  		</tr>
		  	</thead>
		</table>
	</div>
	<div id="overlay">
	  	<div class="cv-spinner">
	    	<span class="spinner"></span>
	 	</div>
	</div>
</body>
	<!-- Scripts -->
	<script type="text/javascript">
	 var AppURL = "<?php echo rtrim(config('app.url'), '/') . '/'; ?>";
	</script>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-table.min.js') }}"></script>
    <script src="{{ URL::asset('js/toast.js') }}"></script>
    <script src="{{ URL::asset('js/product.js') }}"></script>
</html>
