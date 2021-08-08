<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
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
  <main class="page-content" style="overflow-x:hidden;">
    
      <div class="navbar navbar-expand-md navbar-warning mt-5">
        <div class="container">
          <div class="col-6">
            <h2 style="float: left;margin: 2px;font-weight: bold; ">Message</h2>
          </div>
          <div class="col-6">
            <input type="button" class="btn btn-info" style="float: right" value="View Msg">
          </div>
        </div>
      </div>

      <div class="container mt-4">
        <button type="button" class="btn btn-primary">
        <i class="fa fa-envelope" aria-hidden="true"></i> Compose</button>
        <button type="button" class="btn btn-info">Inbox</button>
      </div>

      <div class="row">
        <div class="col-2">
          <div class="row mt-3" style="margin-left: 15%;">
            <span id="msg_inbox"><i class="fa fa-envelope-open" aria-hidden="true"></i> Inbox <span class="badge badge-success">7</span></span>
          </div>
          <div class="row mt-3" style="margin-left: 15%;">
            <span id="msg_sent"><i class="fa fa-share" aria-hidden="true"></i> Sent</span>
          </div>
          <div class="row mt-3" style="margin-left: 15%;">
            <span id="msg_delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</span>
          </div>
        </div>

        <div class="col-10 mt-3">
          <div class="card">

        <div class="card-body">
          <div class="container">
            <div class="table-responsive">
              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th>From</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Akriti</td>
                    <td>Assign Holiday</td>
                    <td>21/02/2014</td>
                    <td>
                      <span>
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </span>
                      <span>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Akriti</td>
                    <td>Assign Holiday</td>
                    <td>21/02/2014</td>
                    <td>
                      <span>
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </span>
                      <span>
                        <i class="fa fa-plus" aria-hidden="true"></i>       
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Akriti</td>
                    <td>Assign Holiday</td>
                    <td>21/02/2014</td>
                    <td>
                      <span>
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                      </span>
                      <span>
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </span>
                    </td>
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

    
    
</body>
</html>