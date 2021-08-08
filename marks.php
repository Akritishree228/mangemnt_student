<!DOCTYPE html>
<html>
<head>
	<title>Marks</title>
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
            <h2 style="float: left;margin: 2px;padding: 2px;font-weight: bold; ">MARKS</h2>
          </div>
          <div class="col-6">
            <input type="button" class="btn btn-info" data-toggle="modal" data-target="#viewModal" style="float: right" value="Student Marks">
          </div>
        </div>
      </div>
      <div class="topnav mt-2">
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
              <th>Name</th>
              <th>Subject</th>
              <th>Teacher</th>
              <th>Marks</th>
              <th>Comment</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lakshmi Vishwanathan</td>
              <td>English</td>
              <td>Mrs Arpita</td>
              <td>87</td>
              <td>Good</td>
            </tr>

            <tr>
              <td></td>
              <td>English</td>
              <td>Mrs Arpita</td>
              <td>87</td>
              <td>Good</td>
            </tr>

            <tr>
              <td></td>
              <td>English</td>
              <td>Mrs Arpita</td>
              <td>87</td>
              <td>Good</td>
            </tr>

            <tr>
              <td></td>
              <td>English</td>
              <td>Mrs Arpita</td>
              <td>87</td>
              <td>Good</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">New</button>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Edit</button>
      </div>


      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-warning">
                <h5 style="font-weight: bold;">Add New Mark</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                    <div class="modal-body">
                          <form>
                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Class" class="col-sm-2 col-form-label">Subject</label>
                              <div class="col-sm-10">
                                <select class="form-control">
                                  <option>English</option>
                                  <option>Maths</option>
                                  <option>Science</option>
                                  <option>Culture</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Exam" class="col-sm-2 col-form-label">Teacher</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">marks*</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Exam" class="col-sm-2 col-form-label">Comment</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Add</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header bg-warning">
                          <h5 style="font-weight: bold;">Edit Marks</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Class" class="col-sm-2 col-form-label">Subject</label>
                              <div class="col-sm-10">
                                <select class="form-control">
                                  <option>English</option>
                                  <option>Maths</option>
                                  <option>Science</option>
                                  <option>Culture</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Exam" class="col-sm-2 col-form-label">Teacher</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">marks*</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" >
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="Exam" class="col-sm-2 col-form-label">Comment</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control">
                              </div>
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

                  <div class="container">
                  <!-- The Modal -->
                  <div class="modal fade" id="viewModal">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header bg-warning">
                          <h4 class="modal-title" style="font-weight: bold;">Student Marks</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                          <div class="row">
                            <div class="col-4">
                              <img src="./images/pic/not_1.png" alt="profile_pic" style="width:100px;margin-left:20px">
                            </div>

                                  <div class="col-8">
                                    <div class="row">
                                      <div class="col-6" style="font-weight: bold;">Name:</div>
                                      <div class="col-6">Lakshmi Vishwanatan</div>
                                    </div>
                                    <div class="row">
                                      <div class="col-6" style="font-weight: bold;">Class:</div>
                                      <div class="col-6">B.scIT</div>
                                    </div>
                                    <div class="row">
                                      <div class="col-6" style="font-weight: bold;">Roll No:</div>
                                      <div class="col-6">10011010</div>
                                    </div>
                                    <div class="row">
                                      <div class="col-6" style="font-weight: bold;">Gender:</div>
                                      <div class="col-6">Female</div>
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
                                      <div class="col-6" style="font-weight: bold;">Contact:</div>
                                      <div class="col-6">9876543219</div>
                                    </div>
                                  </div>
                              </div>

                              <div class="table-responsive mt-4">
                                <table class="table table-striped table-bordered table-hover">
                                  <thead class="thead-light">
                                    <tr>
                                      <th>Name</th>
                                      <th>Subject</th>
                                      <th>Teacher</th>
                                      <th>Marks</th>
                                      <th>Comment</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Lakshmi Viswanathan</td>
                                      <td>English</td>
                                      <td>Shovna</td>
                                      <td>89</td>
                                      <td>Good</td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td>English</td>
                                      <td>Shovna</td>
                                      <td>89</td>
                                      <td>Good</td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td>English</td>
                                      <td>Shovna</td>
                                      <td>89</td>
                                      <td>Good</td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td>English</td>
                                      <td>Shovna</td>
                                      <td>89</td>
                                      <td>Good</td>
                                    </tr>
                                  </tbody>
                                </table>
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