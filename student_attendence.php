<!DOCTYPE html>
<html>
<head>
	<title>Student Attendance</title>
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
    
      <div class="navbar navbar-expand-md  navbar-warning mt-5">
        <div class="container">
          <div class="col-6">
            <h2 style="float: left;margin: 2px;padding: 2px;font-weight: bold; ">Student Attendance</h2>
          </div>
          <div class="col-6">
            <input type="button" class="btn btn-info" data-toggle="modal" data-target="#viewModal"  style="float: right" value="View Attendance">
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

      <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <form >

                      <div class="row">
                        <div class="col-4">
                          <label for="" class="form-group has-float-label ml-4">
                            <span style="font-weight: bold;">Select Class</span>
                            <select name="Course" class="form-control">
                              <option>B.scIt</option>
                              <option>BBA</option>
                              <option>B.Com</option>
                              <option>BCA</option>
                            </select>
                          </label>
                        </div>
                        <div class="col-4">
                          <label for="" class="form-group has-float-label ml-4">
                            <span style="font-weight: bold;">Select Date</span>
                            <input type="date" class="form-control">
                          </label>
                        </div>
                        <div class="col-4">
                          <label for="" class="form-group has-float-label ml-4">
                            <span style="font-weight: bold;">Select Day</span>
                            <select name="day" class="form-control">
                              <option>Monday</option>
                              <option>Tuesday</option>
                              <option>Wednesday</option>
                              <option>Thursday</option>
                            </select>
                          </label>
                        </div>
                      </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="separator mb-5"></div>

            <div class="container" style="text-align: center;">
              <h2>Monday</h2>
              <h4>Attendance of B.scIt</h4>
              <h4>16-02-2009</h4>
            </div>

            <div class="table-responsive mt-4">
              <table class="table table-striped table-bordered table-hover">
                <thead class="thead-light">
                  <tr>
                    <th>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="selectAll">
                          <label class="custom-control-label" for="customCheckThis"></label>
                      </div>
                    </th>
                    <th>RollNo</th>
                    <th>Student Name</th>
                    <th>Status</th>
                    <th>Reason</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" value="" class="custom-control-input selectAll_row">
                          <label class="custom-control-label" for="customCheckThis"></label>
                      </div>
                    </td>
                    <td>1001101</td>
                    <td>Akriti Shree</td>
                    <td>
                      <select type="text" class="form-control">
                      <option>Present</option>
                      <option>Absent</option>
                    </select>
                  </td>
                  <td></td>
                  <td>
                  	<span>
                  		<i class="fa fa-pencil-square-o" data-toggle="modal" data-target="#editModal" aria-hidden="true"></i>
                  	</span>
                    <span>
                    	<i class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" aria-hidden="true"></i>
                    </span>
                  </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add</button>
	        </div>

            <div class="container">
            	<!-- The Modal -->
				  <div class="modal fade" id="viewModal">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				      
				        <!-- Modal Header -->
				        <div class="modal-header bg-warning">
				          <h4 class="modal-title" style="font-weight: bold;">Student Attendance</h4>
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				        </div>
				        
				        <!-- Modal body -->
				        <div class="modal-body">
					        <div class="row">
					         	<div class="col-4">
                       <img src="./images/pic/not_1.png" alt="profile_pic" style="width:100px;margin-left:10px">
                     </div>

					         	      <div class="col-8">
					         		      <div class="row">
			                  			<div class="col-6" style="font-weight: bold;">Student Name:</div>
			                  			<div class="col-6">Mrs Lakshmi Vishwanatan</div>
			                  		</div>
			                  		<div class="row">
			                  			<div class="col-6" style="font-weight: bold;">Batch:</div>
			                  			<div class="col-6">B.scIT</div>
			                  		</div>
			                  		<div class="row">
			                  			<div class="col-6" style="font-weight: bold;">RollNo:</div>
			                  			<div class="col-6">10011001</div>
			                  		</div>
			                  		<div class="row">
			                  			<div class="col-6" style="font-weight: bold;">Class Start:</div>
			                  			<div class="col-6">06/06/2018</div>
			                  		</div>
			                  		<div class="row">
			                  			<div class="col-6" style="font-weight: bold;">Class End:</div>
			                  			<div class="col-6">12/06/2018</div>
			                  		</div>
			                  		<div class="row">
			                  			<div class="col-6" style="font-weight: bold;">Number Of Absent days:</div>
			                  				<div class="col-6">
			                  					<span class="badge badge-danger">06</span>
			                  				</div>
			                  		</div>
			                  		<div class="row">
			                  			<div class="col-6" style="font-weight: bold;">Number Of Present days:</div>
			                  			<div class="col-6">
			                  				<span class="badge badge-success">24</span>
			                  			</div>
			                  		</div>
			                  		<div class="row">
			                  			<div class="col-6" style="font-weight: bold;">Number Of Attendance days:</div>
			                  			<div class="col-6">
                                <span class="badge badge-warning">30</span>
			                  			</div>
			                  		</div>
			                  	</div>
		                  	</div>
				        </div>
				        <!-- Modal footer -->
				        <div class="modal-footer">
				          <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
				        </div>
				      </div>
				    </div>
				  </div>
				</div>

				 <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			          <div class="modal-dialog" role="document">
			            <div class="modal-content">
			              <div class="modal-header bg-warning">
			                <h5 style="font-weight: bold;">Edit Attendance</h5>
			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                  <span aria-hidden="true">&times;</span>
			                </button>
			              </div>
			              <div class="modal-body">
			              	<form>
			                  <div class="form-group">
			                    <label for="name" class="col-form-label" style="font-weight: bold;">Student Name:</label>
			                    <input type="text" class="form-control" id="name">
			                  </div>
			                  <div class="form-group">
			                    <label for="gender" class="col-form-label" style="font-weight: bold;">RollNo:</label>
			                    <input class="form-control" type="text" name="">
			                  </div>
			                  <div class="form-group">
			                    <label for="status" class="col-form-label" style="font-weight: bold;">Status:</label>
			                    <select type="text" class="form-control">
			                    	<option>Present</option>
			                    	<option>Absent</option>
			                    </select>
			                  </div>
			                  <div class="form-group">
			                    <label for="reason" class="col-form-label" style="font-weight: bold;">Reason:</label>
			                    <textarea class="form-control"></textarea>
			                  </div>
			                </form>
			              </div>
			              <div class="modal-footer">
			                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			                <button type="button" class="btn btn-primary">Edit</button>
			              </div>
			            </div>
			          </div>
			        </div>

              <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-warning">
                      <h5 style="font-weight: bold;">Add Attendance</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="form-group">
                          <label for="name" class="col-form-label" style="font-weight: bold;">Student Name:</label>
                          <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                          <label for="gender" class="col-form-label" style="font-weight: bold;">RollNo:</label>
                          <input class="form-control" type="text" name="">
                        </div>
                        <div class="form-group">
                          <label for="status" class="col-form-label" style="font-weight: bold;">Status:</label>
                          <select type="text" class="form-control">
                            <option>Present</option>
                            <option>Absent</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="reason" class="col-form-label" style="font-weight: bold;">Reason:</label>
                          <textarea class="form-control"></textarea>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="button" class="btn btn-primary">Add</button>
                    </div>
                  </div>
                </div>
              </div>

				<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		          <div class="modal-dialog" role="document">
		            <div class="modal-content">
		              <div class="modal-header bg-warning">
		                <h5 style="font-weight: bold;">Delete Attendance</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                  <span aria-hidden="true">&times;</span>
		                </button>
		              </div>
		              <div class="modal-body">
		                <form>
		                  <p>Are you sure you want to delete this attendance?</p>
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



    <script src="assets/js/vendor/bootstrap-datepicker.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  	<script src="main.js"></script>
  	
        <script type="text/javascript">
          $(function() {
            $('#datetimepicker1').datepicker({
                                             language: 'en',
                                             autoclose: true,
                                            
                                             });
            });
        </script>
        <script type="text/javascript">
        $(function() {
          $('#datetimepicker').datepicker({
                                          language: 'en',
                                          autoclose: true,
                                          
                                          });
          });
        </script>
        <script type="text/javascript">
      		$('#editModal').on('show.bs.modal', function (event) {
		      var button = $(event.relatedTarget) // Button that triggered the modal
		      var recipient = button.data('whatever') // Extract info from data-* attributes
		      var modal = $(this)
		      modal.find('.modal-title').text('New message to ' + recipient)
		      modal.find('.modal-body input').val(recipient)
		    })
    	</script>

	    <script type="text/javascript">
	      	$('#deleteModal').on('show.bs.modal', function (event) {
		      var button = $(event.relatedTarget) // Button that triggered the modal
		      var recipient = button.data('whatever') // Extract info from data-* attributes
		      var modal = $(this)
		      modal.find('.modal-title').text('New message to ' + recipient)
		      modal.find('.modal-body input').val(recipient)
		    })
	    </script>
      <script type="text/javascript">
          $('#addModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
        })
      </script>
    
</body>
</html>