<?php
  include( "db.php" );
  $sql = "SELECT * FROM manage_teacher;";
  $stmt = $con->prepare( $sql );
  $stmt->execute();
  $res = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Teacher</title>
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

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
					<span class="navbar-toggler-icon"></span>
				</button>

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
            <h2 style="float: left;margin: 2px;padding: 2px;font-weight: bold; ">MANAGE TEACHER</h2>
          </div>
          <div class="col-6">
            <input type="button" class="btn btn-info" data-toggle="modal" data-target="#viewModal" style="float: right" value="Teacher Info">
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
          
      <div class="table-responsive mt-5">
        <table class="table table-striped table-bordered table-hover">
          <thead class="thead-light">
            <tr>
              <th>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="selectAll">
                  <label class="custom-control-label" for="customCheckThis"></label>
                </div>
              </th>
              <th>Name</th>
              <th>Photo</th>
              <th>Subject teacher</th>
              <th>Year of Experience</th>
              <th>Email</th>
              <th>Qualification</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              foreach ($res as $manage_teacher) {
                echo("
            <tr>
              <td>   
                <div class=\"custom-control custom-checkbox\">
                  <input type=\"checkbox\" value=\"\" class=\"custom-control-input selectAll_row\">
                  <label class=\"custom-control-label\" for=\"customCheckThis\"></label>
                </div>
              </td>
              <td>{$manage_teacher["name"]}</td>
              <td>{$manage_teacher["photo"]}</td>
              <td>{$manage_teacher["sub_teacher"]}</td>
              <td>{$manage_teacher["yrs_of_exp"]}</td>
              <td>{$manage_teacher["email"]}</td>
              <td>{$manage_teacher["qualification"]}</td>
              <td><span><i class=\"fa fa-pencil-square-o\" data-toggle=\"modal\" data-target=\"#editModal\" aria-hidden=\"true\"></i></span>
                <span><i class=\"fa fa-trash\" data-toggle=\"modal\" data-target=\"#deleteModal\" aria-hidden=\"true\"></i></span></td>
            </tr>
            ");
              }
            ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Add</button>
      </div>      
        

        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-warning">
                <h5 style="font-weight: bold;">Add New Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="batch" class="col-form-label">Qualification:</label>
                    <select type="text" class="form-control" id="batch">
                      <option>P.hd</option>
                      <option>Post Graduation</option>
                      <option>Graduation</option>
                      <option>B.Ed</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="birthday" class="col-form-label">Birthday:</label>
                    <input type="text" class="form-control" id="birth">
                  </div>
                  <div class="form-group">
                    <label for="gender" class="col-form-label">Gender:</label>
                    <select type="text" class="form-control" id="gender">
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="address" class="col-form-label">Address:</label>
                    <input type="text" class="form-control" id="address">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="col-form-label">PhoneNo:</label>
                    <input type="number" class="form-control" id="phone">
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-form-label">Emai:</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Photo:</label>
                    <button type="button" class="btn btn-secondary">Choose File</button>&nbsp;No File Chosen
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


        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-warning">
                <h5 style="font-weight: bold;">Edit New Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="batch" class="col-form-label">Qualification:</label>
                    <select type="text" class="form-control" id="batch">
                      <option>P.hd</option>
                      <option>Post Graduation</option>
                      <option>Graduation</option>
                      <option>B.Ed</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="birthday" class="col-form-label">Birthday:</label>
                    <input type="text" class="form-control" id="birth">
                  </div>
                  <div class="form-group">
                    <label for="gender" class="col-form-label">Gender:</label>
                    <select type="text" class="form-control" id="gender">
                      <option>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="address" class="col-form-label">Address:</label>
                    <input type="text" class="form-control" id="address">
                  </div>
                  <div class="form-group">
                    <label for="phone" class="col-form-label">PhoneNo:</label>
                    <input type="number" class="form-control" id="phone">
                  </div><div class="form-group">
                    <label for="email" class="col-form-label">Emai:</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Photo:</label>
                    <button type="button" class="btn btn-secondary">Choose File</button>&nbsp;No File Chosen
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
       
       <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-warning">
                <h5 style="font-weight: bold;">Delete Teacher</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <p>Are you sure you want to delete this row?</p>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Delete</button>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
              <!-- The Modal -->
          <div class="modal fade" id="viewModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header bg-warning">
                  <h4 class="modal-title" style="font-weight: bold;">Teacher Information</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <div class="row">
                    <div class="col-4">
                    <img src="./images/pic/not_1.png" alt="student_image" style="width:180px">
                    </div>

                      <div class="col-8">
                        <div class="row">
                          <div class="col-6" style="font-weight: bold;">Name:</div>
                          <div class="col-6">Mrs Lakshmi Vishwanatan</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Address:</div>
                              <div class="col-6">Marwari para road,Jugsalai</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Email:</div>
                              <div class="col-6">abc123@gmail.com</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Qualification:</div>
                                <div class="col-6">P.hd in IT</div>
                            </div>
                            <div class="row">
                              <div class="col-6" style="font-weight: bold;">Contact:</div>
                              <div class="col-6">9876543219</div>
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

</body>
</html>