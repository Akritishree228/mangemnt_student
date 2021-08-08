<!DOCTYPE html>
<html>
<head>
	<title>Mail/Sms_Setting</title>
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
            <h2 style="float: left;margin: 2px;padding: 2px;font-weight: bold; ">Mail/SMS</h2>
          </div>
          <div class="col-4">
            <input type="button" class="btn btn-info" onclick="myFunction()" style="float: right" value="Return">
          </div>
          <div class="col-2">
            <input type="button" class="btn btn-info" style="float: right" value="Mail/Sms Setting">
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
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">SMS Setting</h4>

                  <div class="form-group row">
                    <label for="Subject" class="col-sm-2 col-form-label">SMS Provider*</label>
                    <div class="col-sm-10">
                      <select class="form-control">
                        <option>English</option>
                        <option>Maths</option>
                        <option>Science</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row mt-3">
                    <label for="name" class="col-sm-2 col-form-label">Nexo Api Key*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row mt-3">
                    <label for="name" class="col-sm-2 col-form-label">Nexo Api Secret*</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                  <div class="modal-footer mt-3">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Save Setting</button>
                  </div>
              </div>
            </div>
          </div>
         
          <div class="container mt-4">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Mail Settings</h4>

                      <div class="form-group row">
                        <label for="Subject" class="col-sm-2 col-form-label">Mail Delivery Type*</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                            <option>Simple PHP Mail Function</option>
                            <option>PHP Mailer Class</option>
                            <option>SMTP</option>
                            <option>Amazon SES</option>
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Save Setting</button>
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
  	
     <script>
      function myFunction() {
        location.replace("file:///C:/xampp/htdocs/student%20project/management/sms_mail.html#")
      }
    </script>
    
</body>
</html>