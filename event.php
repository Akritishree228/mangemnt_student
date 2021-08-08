<!DOCTYPE html>
<html>
<head>
	<title>Events/Announcement</title>
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
            <h2 style="float: left;margin: 2px;padding: 2px;font-weight: bold; ">Events/Announcement</h2>
          </div>
          <div class="col-6">
            <input type="button" class="btn btn-info" data-toggle="modal" data-target="#addModal" style="float: right" value="Add Event">
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

      <div class="container mt-4">
        
            <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Id</th>
                  <td>Event Name</td>
                  <td>Event Description</td>
                  <td>For</td>
                  <td>Date</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>Sports Day</td>
                  <td>bgfashvahgf ngfadfsj  mhgashfhajb,b nhgsfhf hgfuu hgdgfgfg</td>
                  <td>All</td>
                  <td>21/2/2018</td>
                  <td>
                    <span><i class="fa fa-pencil-square-o" data-toggle="modal" data-target="#editModal" aria-hidden="true"></i></span>
                    
                    <span><i class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" aria-hidden="true"></i></span>
                  </td>
                </tr>
                 <tr>
                  <td>01</td>
                  <td>Sports Day</td>
                  <td>bgfashvahgf ngfadfsj  mhgashfhajb,b nhgsfhf hgfuu hgdgfgfg</td>
                  <td>Students</td>
                  <td>21/2/2018</td>

                  <td>
                    <span><i class="fa fa-pencil-square-o" data-toggle="modal" data-target="#editModal" aria-hidden="true"></i></span>
                    
                    <span><i class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" aria-hidden="true"></i></span>
                  </td>
                </tr>
                 <tr>
                  <td>01</td>
                  <td>Teachers Day</td>
                  <td>bgfashvahgf ngfadfsj  mhgashfhajb,b nhgsfhf hgfuu hgdgfgfg</td>
                  <td>Teachers</td>
                  <td>21/2/2018</td>

                  <td>
                    <span><i class="fa fa-pencil-square-o" data-toggle="modal" data-target="#editModal" aria-hidden="true"></i></span>
                    
                    <span><i class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" aria-hidden="true"></i></span>
                  </td>
                </tr>
                 <tr>
                  <td>01</td>
                  <td>Parents meeting</td>
                  <td>bgfashvahgf ngfadfsj  mhgashfhajb,b nhgsfhf hgfuu hgdgfgfg</td>
                  <td>Parents</td>
                  <td>21/2/2018</td>

                  <td>
                    <span><i class="fa fa-pencil-square-o" data-toggle="modal" data-target="#editModal" aria-hidden="true"></i></span>
                    
                    <span><i class="fa fa-trash" data-toggle="modal" data-target="#deleteModal" aria-hidden="true"></i></span>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
          </div>

          <a href="#!" class="btn btn-primary btn-lg active mt-4" style="float: right;" role="button" aria-pressed="true">View Event</a>

        <div class="container">
        <!-- The Modal -->
          <div class="modal fade" id="addModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header bg-warning">
                  <h4 class="modal-title" style="font-weight: bold;">Event</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <div class="form-group row mt-3">
                    <label for="name" class="col-sm-3 col-form-label">Event Name*</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" >
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Event Description*</label>
                      <div class="col-sm-9">
                        <textarea type="text" class="form-control" ></textarea>
                      </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">Event For*</label>
                    <div class="col-sm-9">
                      <div class="radio">
                          <label>
                            <input type="radio" name="survey" id="Radios11" value="All">
                            All
                          </label>
                        </div>
                      <div class="radio">
                          <label>
                            <input type="radio" name="survey" id="Radios1" value="Yes">
                            Teachers
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="survey" id="Radios2" value="No">
                            Students
                          </label>
                        </div>
                        <div class="radio disabled">
                          <label>
                            <input type="radio" name="survey" id="Radios3" value="Notsure">
                            Parent
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Event Place*</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" >
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Date*</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" >
                      </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Add</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
       
        <div class="container">
        <!-- The Modal -->
          <div class="modal fade" id="editModal">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header bg-warning">
                  <h4 class="modal-title" style="font-weight: bold;">Event</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <div class="form-group row mt-3">
                    <label for="name" class="col-sm-3 col-form-label">Event Name*</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" >
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Event Description*</label>
                      <div class="col-sm-9">
                        <textarea type="text" class="form-control" ></textarea>
                      </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-3 col-form-label">Event For*</label>
                    <div class="col-sm-9">
                      <div class="radio">
                          <label>
                            <input type="radio" name="survey" id="Radios11" value="All">
                            All
                          </label>
                        </div>
                      <div class="radio">
                          <label>
                            <input type="radio" name="survey" id="Radios1" value="Yes">
                            Teachers
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" name="survey" id="Radios2" value="No">
                            Students
                          </label>
                        </div>
                        <div class="radio disabled">
                          <label>
                            <input type="radio" name="survey" id="Radios3" value="Notsure">
                            Parent
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Event Place*</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" >
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Date*</label>
                      <div class="col-sm-9">
                        <input type="date" class="form-control" >
                      </div>
                  </div>
                </div>               <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Edit</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
        <!-- The Modal -->
          <div class="modal fade" id="deleteModal">
            <div class="modal-dialog">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header bg-warning">
                  <h4 class="modal-title" style="font-weight: bold;">Delete Event</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  Are you sure you want to delete this row event?
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
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
    
   
  	
</body>
</html>