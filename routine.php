<?php
  include( "db.php" );
  $sql = "SELECT * FROM routine;";
  $stmt = $con->prepare( $sql );
  $stmt->execute();
  $res = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Routine</title>
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
							<a href="#invoice_table" class="nav-link text-white">Class Routine</a>
						</li>
						<li class="nav-item navsetting">
							<a href="#" class="nav-link text-white">Teacher Routine</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link text-white">Exam Routine</a>
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
    
      <div class="navbar navbar-expand-md  mt-4">
        <div class="container">
          <div class="col-6">
            <h2 style="float: left;margin: 2px;padding: 2px;font-weight: bold; ">ROUTINE</h2>
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
                                <a class="nav-link active show" href="#invoice_table" data-toggle="tab">Routine</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  " href="#add_invoice" data-toggle="tab">Add Routine</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link  " href="#edit_invoice" data-toggle="tab">Edit Examination</a>
                            </li> -->
                        </ul>
                    </div>
                </div><br><br>

			<div class="tab-content container">
				<div class="tab-pane active show" id="invoice_table">
					<div class="table-responsive mt-3">
						<table class="table table-striped table-bordered table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                          <th>Class</th>
                                          <th>Days</th>
                                          <th>Period 1</th>
                                          <th>Period 2</th>
                                          <th>Period 3</th>
                                          <th>Period 4</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach ($res as $routine){
                                          echo("            
                                          <tr>
                                            <td>{$routine["class"]}</td>
                                            <td>{$routine["day"]}</td>
                                            <td>{$routine["period_1"]}</td>
                                            <td>{$routine["period_2"]}</td>
                                            <td>{$routine["period_3"]}</td>
                                            <td>{$routine["period_4"]}</td>
                                            <td>
                                            	<span><i class=\"fa fa-pencil-square-o\" data-toggle=\"modal\" data-target=\"#myModal\" aria-hidden=\"true\"></i></span>
                                            	<span><i class=\"fa fa-trash\" data-toggle=\"modal\" data-target=\"#deleteModal\" aria-hidden=\"true\"></i></span>
                                            </td>
                                          </tr>
                                          ");
                                        } ?>
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    
                

              <div class="tab-pane" id="add_invoice">
              	<form>
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
                    <label for="Class" class="col-sm-2 col-form-label">Day</label>
                    <div class="col-sm-10">
                      <select class="form-control">
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 5</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 6</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="modal-footer mt-3">
	                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	                <button type="button" class="btn btn-primary">Add Exam</button>
              	</div>
            </form>
        	</div>
        </div>
      </div>


      <div class="container">
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header bg-warning">
              <h4 class="modal-title" style="font-weight: bold;">Edit Examination</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              <form>
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
                    <label for="Class" class="col-sm-2 col-form-label">Day</label>
                    <div class="col-sm-10">
                      <select class="form-control">
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 5</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Period 6</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </form>
          </div>
          <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Edit Exam</button>

            </div>
            
          </div>
        </div>
      </div>
  </div>


        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-warning">
                <h5 style="font-weight: bold;">Delete Routine</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <p>Are you sure you want to delete this routine?</p>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Delete</button>
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

    <!-- <script type="text/javascript">
      
    $('#editModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })
    </script> -->

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