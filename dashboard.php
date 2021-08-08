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
    <style>
        .bg-info {
                min-height: 150px;
                background: #fff;
                width: 100%;
                box-shadow: 0 5px 20px rgb(0 0 0 / 10%);
                margin-bottom: 20px;
                padding: 15px;
                border-radius: 10px;
        }
        .bg-warning{
            min-height: 150px;
                background: #fff;
                width: 100%;
                box-shadow: 0 5px 20px rgb(0 0 0 / 10%);
                margin-bottom: 20px;
                padding: 15px;
                border-radius: 10px;
        }
        .bg-danger{
            min-height: 150px;
                background: #fff;
                width: 100%;
                box-shadow: 0 5px 20px rgb(0 0 0 / 10%);
                margin-bottom: 20px;
                padding: 15px;
                border-radius: 10px;
        }
        .bg-yellow{
            background: linear-gradient(45deg,#ffb64d, #ffcb80);
        }
        .info-box-icon {
                    float: left;
                    height: 70px;
                    width: 70px;
                    text-align: center;
                    font-size: 30px;
                    line-height: 74px;
                    background: rgba(0, 0, 0, 0.2);
                    border-radius: 100%;
                } 
        .info-box-icon .fas{
            font-family:'FontAwesome';
            font-weight: 400;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            word-wrap: normal;
        }
        .info-box-content{
            padding: 10px 10px 0px 0;
            margin-left: 30px;
        }
        .info-box-text,{
                display: block;
                font-size: 16px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                font-weight: 400;
                }
            .card {
    border-radius: 12px;
    box-shadow: 0 6px 10px -4px rgb(0 0 0 / 15%);
    background-color: #fff;
    color: #252422;
    margin-bottom: 20px;
    position: relative;
    border: 0;
    transition: box-shadow .2s ease,-webkit-transform .3s cubic-bezier(.34,2,.6,1);
    transition: transform .3s cubic-bezier(.34,2,.6,1),box-shadow .2s ease;
    transition: transform .3s cubic-bezier(.34,2,.6,1),box-shadow .2s ease,-webkit-transform .3s cubic-bezier(.34,2,.6,1);
}
.card {
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-clip: border-box;
}
.card-stats .icon-big {
    font-size: 3em;
    min-height: 64px;
}
         body{
             background-color: #eaeef3;
             box-sizing:border-box;
         }        
    </style>
</head>
<body>

		<div class="bgimg32">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
			<div class="row" style="margin-left: 5px;width: 100%;">
				<a href="" class="navbar-brand text-warning font-weight-bold">STUDENTsCorneR</a>
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
            <h3 style="float: left;margin:2px;font-weight: bold;">Dashboard</h3>
          </div>
        </div>
      </div>

    <div class="container-fluid mt-1">
        <div class="row">
            <!-- <div class="col-md-4">
                <div class="card text-dark bg-info mb-3" style="max-width:23rem;background:linear-gradient(45deg,#2ed8b6, #59e0c5)">
                    <div class="card-header text-white" style="font-size:20px">Classes</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                <h1 style="font-size:50px;line-height:110px" class="text-white">0</h1>
                                </div>
                                    <div class="col-md-7 ">
                                        <span style="font-size:80px;border"><i class="fas fa-users"></i></span>
                                    </div>
                                </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="col-md-4">
                <div class="card text-dark bg-warning mb-3" style="max-width:23rem;">
                    <div class="card-header text-white" style="font-size:20px">Students</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                <h1 style="font-size:50px;line-height:110px" class="text-white">0</h1>
                                </div>
                                    <div class="col-md-6">
                                        <span style="font-size:75px"><i class="fas fa-user"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

            <!-- <div class="col-md-4">
                    <div class="card text-dark bg-success mb-3" style="max-width:23rem;">
                        <div class="card-header text-white" style="font-size:20px" >Teachers</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h1 style="font-size:50px;line-height:110px" class="text-white">0</h1>
                                    </div>
                                <div class="col-md-6">
                                    <span style="font-size:75px"><i class="fas fa-male"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        
        <div class="col-md-6 col-lg-3 col-sm-6">
            <div class="card text-dark bg-info bg-b-green" style="background: linear-gradient(45deg, #2ed8b6, #59e0c5);">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <span class="info-box-icon push-bottom text-center">
                            <i class="fas fa-user text-white"></i>
                        </span>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="info-box-content">
                            <span class="info-box-text text-center">
                                <!-- <h3 class="text-white">Students</h3> -->
                                <a class="text-white" href="./student_attendence.php" style="text-decoration:none" ><h4>Students</h4></a>
                            </span>
                            <span class="info-box-number text-center">
                                <h3 class="text-white">0</h3>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 col-sm-6">
            <div class="card text-dark bg-warning bg-yellow">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <span class="info-box-icon push-bottom text-center ">
                            <i class="fas fa-male text-white"></i>
                        </span>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="info-box-content">
                            <span class="info-box-text text-center">
                                 <a class="text-white" href="./manage_parents.php" style="text-decoration:none" ><h4>Parents</h4></a>
                            </span>
                            <span class="info-box-number text-center">
                                <h3 class="text-white">0</h3>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6">
            <div class="card text-dark  bg-info bg-b-blue" style="background:linear-gradient(45deg, #4099ff, #73b4ff);">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <span class="info-box-icon push-bottom text-center ">
                            <i class="fas fa-male text-white"></i>
                        </span>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="info-box-content">
                            <span class="info-box-text text-center">
                                <!-- <h3 class="text-white">Teacher</h3> -->
                                <a class="text-white" href="./teacher_attendance.php" style="text-decoration:none"><h4>Teacher</h4></a>
                            </span>
                            <span class="info-box-number text-center">
                                <h3 class="text-white">0</h3>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-sm-6">
            <div class="card text-dark  bg-danger bg-b-red" style="background: linear-gradient(45deg,#ff5370, #ff869a);">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <span class="info-box-icon push-bottom text-center">
                            <i class="fas fa-users text-white"></i>
                        </span>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="info-box-content">
                            <span class="info-box-text text-center">
                                <a class="text-white" href="./message.php" style="text-decoration:none"><h4>Message</h4></a>
                            </span>
                            <span class="info-box-number text-center">
                                <h3 class="text-white">0</h3>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fas fa-users "></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="number">
                                    <p class="card-category">Classes</p>
                                    <p class="card-title">0</p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->


        </div>
    </div>
        


    <div class="container-fluid mt-1 " >
        <div class="row" style="margin-left:1px;">
            <div class="col-md-8 col-sm-12 m-0">
                <div class="row">
                    <div class="card w-75">
                        <div class="card-body" style="border-top:2px solid blue">
                            <div class="row">
                                <div class="col-md-2">
                                <i class="far fa-hand-point-up"></i>
                                </div>
                                <div class="col-md-10">
                                <!-- <p class="card-title">Leader Board</p> -->
                                <a href="./marks.php" class="card-title" style="text-decoration:none;color:black">Marks</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="card w-75">
                        <div class="card-body" style="border-top:2px solid blue">
                            <div class="row">
                                <div class="col-md-2">
                                <i class="far fa-clock"></i>
                                </div>
                                <div class="col-md-10">
                                <!-- <p class="card-title">News & Event</p> -->
                                <a href="./event.php" class="card-title" style="text-decoration:none;color:black">Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="card w-75">
                        <div class="card-body" style="border-top:2px solid blue">
                            <div class="row">
                                <div class="col-md-2">
                                <i class="far fa-hand-point-up"></i>
                                </div>
                                <div class="col-md-10">
                                <p class="card-title">Quick Links</p>
                                </div>
                            </div>
                            <div class="row p-2 mx-4">
                                <div class="col-md-5  bg-success  text-center p-2" >
                                    <a href="./notice_board.php" class="text-white" style="text-decoration:none;line-height:4px">Notice Board</a>
                                </div>
                                <div class="col-md-5  offset-md-1 bg-success text-center p-2 mt-1">
                                    <a href="./dormitory.php" class="text-white" style="text-decoration:none;line-height:10px">Dormitory</a>
                                </div>
                            </div>

                            <div class="row  p-2 mx-4 ">
                                <div class="col-sm-5  bg-success  mb-1 text-center p-2">
                                    <a href="./library_book.php" class="text-white" style="text-decoration:none;">Library Book</a>
                                </div>
                                <div class="col-sm-5  offset-md-1  bg-success text-center p-2">
                                    <a href="./sms_mail.php" class="text-white" style="text-decoration:none;">Mail/Sms</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 mt-3" style="margin-left:-3px">
                <input type="date" class="form-control" name="" id="" style="border:2px solid blue">
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