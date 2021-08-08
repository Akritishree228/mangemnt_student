<?php
  include( "db.php" );
  $sql = "SELECT * FROM invoice;";
  $stmt = $con->prepare( $sql );
  $stmt->execute();
  $res = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
  <title>INVOICE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<body>

	<div class="bgimg32">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
	  <div class="row" style="margin-left: 5px;width: 100%;">
		<a href="" class="navbar-brand text-warning font-weight-bold">STUDENTsCorneR</a>

		<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse text-center" id="collapsenavbar">
		  <ul class="navbar-nav ml-auto">

			<li class="nav-item">
			  <a href="#" class="nav-link text-white">Student wise fee</a>
			</li>
			<li class="nav-item navsetting">
			  <a href="#" class="nav-link text-white">Manage Expense</a>
			</li>
			<li class="nav-item">
			  <a href="#" class="nav-link text-white">Expense Category</a>
			</li>

		  </ul>
		</div> -->
	  </div>
	</nav>
  </div><br>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#" style="margin-top:48px">
	<i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper" style="margin-top:50px">
	<div class="sidebar-content">
	  <?php include("header.php") ?>
	  <!-- sidebar-header  -->
	  
	  <!-- sidebar-search  -->
	  <?php include("sidebar.php") ?>
	  <!-- sidebar-menu  -->
	</div>
	<!-- sidebar-content  -->
	<?php include("footer.php") ?>
  </nav>
  
  <!-- sidebar-wrapper  -->
  <main class="page-content ">
	
	  <div class="navbar navbar-expand-md  mt-5">
		<div class="container">
		  <div class="col-6">
			<h2 style="float: left;margin: 2px;padding: 2px;font-weight: bold; ">INVOICE</h2>
		  </div>
		  <div class="col-6">
			<input type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg"  style="float: right" value="View Invoice">
		  </div>
		</div>
	  </div>
			<div class="topnav mt-4">
		<a class="active" href="#home">
		  <i class="fa fa-paper-plane" aria-hidden="true"> Export</i>
		</a>
		<a href="#about">
		  <i class="fa fa-reply" aria-hidden="true"> Import</i>
		</a>
		<div class="search-container">
		  <form action="/action_page.php">
			<input type="text" placeholder="Search.." name="search">
			<button type="submit"><i class="fa fa-search"></i></button>
		  </form>
		</div>
	  </div>


				<div class="row mt-3">
				  
					<div class="col-md-12">
						<ul class="nav nav-tabs ml-10">
							<li class="nav-item">
								<a class="nav-link active show" href="#invoice_table" data-toggle="tab">Invoice/Payment List</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  " href="#add_invoice" data-toggle="tab">Add Invoice/Payment</a>
							</li>
							
						</ul>
					</div>
				</div><br><br>

			<div class="tab-content container">
				<div class="tab-pane active show" id="invoice_table">
					<div class="table-responsive mt-3">
						<table class="table table-striped table-bordered table-hover">
									<thead class="thead-light">
										<tr >
											<th>
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="selectAll">
													<label class="custom-control-label" for="customCheckThis"></label>
												</div>
											</th>
											<th>Invoice Id</th>
											<th>Student Name</th>
											<th>Title</th>
											<th>Description</th>
											<th>Amount</th>
											<th>Due Date</th>
											<th>Option</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>  
								<?php
								  foreach( $res as $invoice ){
									  $val = json_encode( $invoice );
									echo( "
									<tr>
										<td>   
										  <div class=\"custom-control custom-checkbox\">
												<input type=\"checkbox\" value=\"\" class=\"custom-control-input selectAll_row\">
												   <label class=\"custom-control-label\" for=\"customCheckThis\"></label>
											</div>
										</td>
										<td><input type=\"button\" class=\"btn btn-info\" value=\"{$invoice["order_ids"]}\"></td>
										<td>{$invoice["student_name"]}</td>
										<td>{$invoice["title"]}</td>
										<td>{$invoice["description"]}</td>
										<td>{$invoice["amount"]}</td>
										<td>{$invoice["due_date"]}</td>
										<td><button class=\"btn btn-success\" style=\"border-radius: 16px;\">Active</button></td>
										<td><button class=\"btn btn-danger\" style=\"border-radius: 16px;\">Unpaid</button></td>
										<td>
										  <span><i data-val='$val' class=\"fa fa-pencil-square-o edit_invoice \" data-toggle=\"modal\" data-target=\"#editModal\" aria-hidden=\"true\"></i></span>
										  <span><i class=\"fa fa-trash\" data-toggle=\"modal\" data-target=\"#deleteModal\" aria-hidden=\"true\"></i></span>
										</td>
									</tr>
									" );
								  }
								?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane" id="add_invoice">
							<form>
							<div class="form-group row">
							  <label for="name" class="col-sm-2 col-form-label">Invoice Id</label>
							  <div class="col-sm-10">
								<input type="text" class="form-control" >
							  </div>
							</div>
							<div class="form-group row">
							  <label for="name" class="col-sm-2 col-form-label">Student Name*</label>
							  <div class="col-sm-10">
								<input type="text" class="form-control" >
							  </div>
							</div>

							<div class="form-group row">
							  <label for="Exam" class="col-sm-2 col-form-label">Payment Title</label>
							  <div class="col-sm-10">
								<input type="text" class="form-control">
							  </div>
							</div>
							<div class="form-group row">
							  <label for="Exam" class="col-sm-2 col-form-label">Payment Description</label>
							  <div class="col-sm-10">
								<input type="text" class="form-control">
							  </div>
							</div>
							<div class="form-group row">
							  <label for="Class" class="col-sm-2 col-form-label">Class</label>
							  <div class="col-sm-10">
								<select class="form-control">
								  <option>B.scIT</option>
								  <option>BBA</option>
								  <option>BCA</option>
								  <option>B.Com</option>
								</select>
							  </div>
							</div>
							<div class="form-group row">
							  <label for="Exam" class="col-sm-2 col-form-label">Amount</label>
							  <div class="col-sm-10">
								<input type="text" class="form-control">
							  </div>
							</div>
							  <div class="form-group row">
							  <label for="Start Time" class="col-sm-2 col-form-label">Date</label>
							  <div class="col-sm-10">
								<input type="date" class="form-control">
							  </div>
							</div>
							<div class="row">
							  <label class="col-sm-2 col-form-label">Staus*</label>

								<div class="custom-control custom-radio col-2">
								  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								  <label class="custom-control-label" for="customRadio1">Unpaid</label>
								  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								</div>
								 <div class="custom-control custom-radio col-2">
								  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								  <label class="custom-control-label" for="customRadio1">Paid</label>
								  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								</div>
							  </div>

							  <div class="row">
							  <label class="col-sm-2 col-form-label">Option*</label>

								<div class="custom-control custom-radio col-2">
								  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								  <label class="custom-control-label" for="customRadio1">Active</label>
								  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								</div>
								 <div class="custom-control custom-radio col-2">
								  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								  <label class="custom-control-label" for="customRadio1">Inactive</label>
								  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
								</div>
							  </div>
							  <div class="modal-footer">
			  					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			  					<button type="button" class="btn btn-primary">Add Invoice</button>
								</div>
							</form>
							</div>
						</div>

		<div class="container">  
			<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
			  <div class="modal-header bg-warning">
				<h5 style="font-weight: bold;">Edit Invoice</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<form>
				 <input type="hidden" id="edit_inv_id">
				  <div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Invoice Id</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="edit_inv_order_id" >
					</div>
				  </div>
				  <div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Student Name*</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" >
					</div>
				  </div>

				  <div class="form-group row">
					<label for="Exam" class="col-sm-2 col-form-label">Payment Title</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="Exam" class="col-sm-2 col-form-label">Payment Description</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control">
					</div>
				  </div>
				  <div class="form-group row">
					<label for="Class" class="col-sm-2 col-form-label">Class</label>
					<div class="col-sm-10">
					  <select class="form-control">
						<option>B.scIT</option>
						<option>BBA</option>
						<option>BCA</option>
						<option>B.Com</option>
					  </select>
					</div>
				  </div>
				  <div class="form-group row">
					<label for="Exam" class="col-sm-2 col-form-label">Amount</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control">
					</div>
				  </div>
					<div class="form-group row">
					<label for="Start Time" class="col-sm-2 col-form-label">Date</label>
					<div class="col-sm-10">
					  <input type="date" class="form-control">
					</div>
				  </div>
				  <div class="row">
					<label class="col-sm-2 col-form-label">Staus*</label>

					  <div class="custom-control custom-radio col-2">
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio1">Unpaid</label>
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
					  </div>
					   <div class="custom-control custom-radio col-2">
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio1">Paid</label>
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
					  </div>
					</div>

					<div class="row">
					<label class="col-sm-2 col-form-label">Option*</label>

					  <div class="custom-control custom-radio col-2">
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio1">Active</label>
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
					  </div>
					   <div class="custom-control custom-radio col-2">
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio1">Inactive</label>
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
					  </div>
					</div>
				  </form>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				  <button type="button" class="btn btn-primary">Edit Invoice</button>
				</div>
			  </div>
			</div>
		  </div>
		</div>

		<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header bg-warning">
				<h5 style="font-weight: bold;">Delete Invoice</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<form>
				  <p>Are you sure you want to delete this invoice?</p>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary">Delete</button>
			  </div>
			</div>
		  </div>
		</div>

		

		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
			<div class="modal-content">
			  <div class="modal-header bg-warning">
				<h5 style="font-weight: bold;">View Invoice</h5>
				   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				   </button>
				  </div>

					  <div class="modal-body">
						<form>
							<h5 class="row mt-4" style="font-weight: bold;"> Invoice : INV-6-123(30 Oct,2016)</h5>
						  <div class="row mt-4">
						  	<div class="col-6">
						  		<h6><input type="button" class="btn btn-info" value="STUDENT DETAILS"></h6>
						  		<div class="row">
						  			<div class="col-3">Name:</div>
						  			<div class="col-9">Mrs Lakshmi Vishwanatan</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-3">Batch:</div>
						  			<div class="col-9">B.scIT</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-3">RollNo:</div>
						  			<div class="col-9">10011001</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-3">Address:</div>
						  			<div class="col-9">Marwari Para,Roadno-4,Qno-145/2/2,Jugsalai</div>
						  		</div>
						  		

						  	</div>
						  	<div class="col-6">
						  		<h6><input type="button" class="btn btn-info" value="INSTITUTION DETAILS"></h6>
						  		<div class="row">
						  			<div class="col-4">Institution Name:</div>
						  			<div class="col-8">Gandhi Institute of Technology</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-4">Address:</div>
						  			<div class="col-8">Gandhi Institute of Technology</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-4">Phone:</div>
						  			<div class="col-8">9955132129</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-4">Email:</div>
						  			<div class="col-8">akritishree228@gmail.com</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-4">Fax:</div>
						  			<div class="col-8">AI123BS32</div>
						  		</div>
						  		<div class="row">
						  			<div class="col-4">Website:</div>
						  			<div class="col-8">Jusco123@gmail.com</div>
						  		</div>
						  		
						  	</div>
						  </div>
						</form>

						<div class="table-responsive mt-3">
							<table class="table table-bordered table-striped table-hover">
								<thead class="thead-light">
									<tr>
										<th>FEES</th>
										<th>AMOUNT</th>
										<th>TAX</th>
										<th>DISCOUNT</th>
										<th>QUANTITY</th>
										<th>PAYABLE</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>UNIFORM FEE</td>
										<td>2000.00</td>
										<td>0.00</B>
										   (0.00%)</td>
										<td>0.00</td>
										<td>1</td>
										<td>2000.00</td>
									</tr>
									<tr>
										<td>TUTION FEE</td>
										<td>30000.00</td>
										<td>0.00</B>
										   (0.00%)</td>
										<td>0.00</td>
										<td>1</td>
										<td>30000.00</td>
									</tr>
								</tbody>
							</table>
							<div class="row" >
								<div class="col-10" ><p style="float: right;font-weight: bold;">Total:</p></div>
								<div class="col-2">32000.00</div>
							</div>

					  <div class="row">
						<div class="col-4">
						  <button><i class="fa fa-print" aria-hidden="true"> Print</i></button>
						</div>
					  </div>
					</br></br>
						</div>
				</div>
					</div>
				  </div>
				</div>


  </main>
  <!-- page-content" -->
</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  	<script src="main.js"></script>
  	<script type="text/javascript">

	$('#addModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var recipient = button.data('whatever') // Extract info from data-* attributes
	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
	  var modal = $(this)
	  modal.find('.modal-title').text('New message to ' + recipient)
	  modal.find('.modal-body input').val(recipient)
	})
	</script>

	<script type="text/javascript">
	  
	$('#editModal').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var inv = button.data('val') // Extract info from data-* attributes
	  var modal = $(this)
	  modal.find('#edit_inv_order_id').val(inv.order_ids)
	  modal.find('#edit_inv_id').val(inv.invoice_id)
	})
	</script>

	<script type="text/javascript">
		$('#deleteModal').on('show.bs.modal', function(event){
			var button = $(event.relatedTarget)
			var recipient = button.data('whatever')
			var modal = $(this)
			modal.find('.modal-title').text('New message to' + recipient)
			modal.find('.modal-body input').val(recipient)
		})
	</script>
	
</body>
</html>