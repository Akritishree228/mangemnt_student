<!DOCTYPE html>
<html>
<head>
	<title>System_setting</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <style>
     body{
        background-color: #eaeef3;
     }
    </style>
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
    
      <div class="navbar navbar-expand-md  mt-4 p-3">
        <div class="container">
          <div class="col-6">
            <h3 style="float:left;margin: 2px;font-weight:bold ">General Setting</h3>
          </div>
        </div>
      </div>
      <div class="topnav mt-3">
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
                <form>
                  <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Site Title*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Class" class="col-sm-2 col-form-label">Default Language</label>
                    <div class="col-sm-10">
                      <select class="form-control">
                        <option>English</option>
                        <option>Hindi</option>
                        <option>Arabic</option>
                        <option>Russian</option>
                        <option>Spanish</option>
                        <option>German</option>
                        <option>Italian</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Allow users change language</label>
                      <div class="form-check mx-3 my-1">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"  checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Allowed
                                </label>
                          </div>

                      <div class="custom-control form-check custom-radio col-6">
                        <div class="form-check my-1">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                      Not Allowed
                                </label>
                          </div>
                      </div>
                    </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Address">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Phone No</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Phone no">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">System Email*</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" placeholder="admin@example.com">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Paypal Payment Email*</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" placeholder="Paypal Payment Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Payment Tax %*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control">
                      <span><small>Set 0 for none</small></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Exam" class="col-sm-2 col-form-label">Footer Copyrights</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="All Right Reserved, School Mangement System">
                    </div>
                  </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">Attendence Model</label>
                      <div class="form-check mx-3 my-1 form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">
                                      Subject Based
                                </label>
                      </div>
                      <div class="form-check mx-2 my-1 form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                              <label class="form-check-label" for="inlineRadio1">
                                      Subject Based
                                </label>
                      </div>  
                    </div><br>
                    
                  <div class="form-group row">
                    <label for="Class" class="col-sm-2 col-form-label">Exam Details notification</label>
                    <div class="col-sm-10">
                      <select class="form-control">
                        <option>None</option>
                        <option>Email Address</option>
                        <option>Sms</option>
                        <option>Email/Sms</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Class" class="col-sm-2 col-form-label">Send exam details to</label>
                    <div class="col-sm-10">
                      <select class="form-control">
                        <option>Students</option>
                        <option>Parents</option>
                        <option>Student/Parents</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Class" class="col-sm-2 col-form-label">Send student's absence via</label>
                    <div class="col-sm-10">
                      <select class="form-control">
                        <option>None</option>
                        <option>Email Address</option>
                        <option>Sms</option>
                        <option>Email/Sms</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Class" class="col-sm-2 col-form-label">Activated Modules</label>
                    <div class="col-sm-10">
                      <select class="form-select" multiple aria-label="multiple select example" style="width:100%">
                        <option value="1" selected>News Board</option>
                        <option value="2">Events</option>
                        <option value="3">Attendence</option>
                        <option value="4">Assignment</option>
                        <option value="5">Library</option>
                        <option value="6">Media</option>
                        <option value="7">Payments</option>
                        <option value="8">Online Exam</option>
                        <option value="9">Polls</option>
                        <option value="10">Static Pages</option>
                        <option value="11">Transport</option>
                      </select>
                    </div>
                  </div>

                  <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Edit Setting</button>
                  </div>
                  </div>
                </form>
              </div>

</main>
  <!-- page-content" -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  	<script src="main.js"></script>
  	
</body>
</html>