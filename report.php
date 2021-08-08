
<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

</head>
<style>
    .info-box-icon {
                    float: left;
                    margin-left:10px;
                    height: 70px;
                    width: 70px;
                    text-align: center;
                    font-size: 30px;
                    line-height: 60px;
                    background: rgba(0, 0, 0, 0.2);
                    border-radius: 100%;
                } 
        .info-box-icon .fas{
            font-family:'FontAwesome';
            font-weight: 400;
            font-style: normal;
            font-size: 24px;    
            /* line-height: 1; */
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            word-wrap: normal;
            color:#fff;
        }
        .info-box-content{
            padding: 10px 10px 0px 0;
            /* margin-left: 30px; */
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
    /* border-radius: 12px; */
    box-shadow: 0 6px 10px -4px rgb(0 0 0 / 15%);
    background-color: #fff;
    color: #252422;
    /* margin-bottom: 20px; */
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
.info-box-number{
    margin-left:10px;
    margin-top:5px
}

         body{
             background-color: #eaeef3;
             box-sizing:border-box;
         }        
    </style>
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
            <h2 style="float: left;margin: 2px;padding: 2px;font-weight: bold; ">Test Report</h2>
          </div>
        </div>
      </div>
      <div class="topnav mt-2 mx-1">
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

       <div class="container-fluid mt-4 ">
           <div class="row p-2">
               <div class="col-md-6 col-lg-6 col-sm-6 ">
               <div class="row mx-3">
                      <div class="card mb-3" style="max-width:520px;height:280px;justify-content:center">
  <div class="row no-gutters mx-5">
    <div class="col-sm-4 col-md-5 mt-2 ">
      <img src="./images/pic/not_1.png" class="card-img" alt="student_img" style="width:130px;margin-left:25px">
    </div>
    <div class="col-sm-8 col-md-7 ">
      <div class="card-body mx-1" >
        <h5 class="card-title">Alex White</h5>
        <p class="card-text">This is a wider card with supporting text</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
        </div>
  </div>
</div>
                  </div>
                  <div class="row">
                         <div class="col-md-10 col-lg-10 col-sm-10 mx-4">
                         <canvas id="myChart" style="width:100%;max-width:500px;height:320px"></canvas>
                      </div>
                  </div>
               </div>
            <div class="col-md-12 col-lg-6 col-sm-6 ">
            <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-6 mb-3">
            <div class="card text-dark bg-info bg-b-green" style="background: linear-gradient(45deg, #2ed8b6, #59e0c5);">
                <div class="row">
                    <div class="col-5 col-md-4 my-2">
                        <span class="info-box-icon push-bottom">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="info-box-content">
                            <span class="info-box-text ">
                                <!-- <h3 class="text-white">Students</h3> -->
                                <a class="text-white"  style="text-decoration:none" ><h6>Correct</h6></a>
                            </span>
                            <span class="info-box-text ">
                                <h5 class="text-white">48/1568</h5>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-6 mb-3">
            <div class="card text-dark  bg-danger bg-b-red" style="background: linear-gradient(45deg,#ff5370, #ff869a);">
                <div class="row">
                    <div class="col-5 col-md-4 my-2">
                        <span class="info-box-icon push-bottom">
                            <i class="fas fa-times"></i>
                        </span>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="info-box-content">
                            <span class="info-box-text ">
                                <!-- <h3 class="text-white">Students</h3> -->
                                <a class="text-white"  style="text-decoration:none" ><h6>Incorrect</h6></a>
                            </span>
                            <span class="info-box-text ">
                                <h5 class="text-white">46/1569</h5>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
        </div>
           <div class="col-md-6 col-lg-6 col-sm-6 mb-3">
            <div class="card text-dark bg-info bg-b-green" style="background: linear-gradient(45deg, #2ed8b6, #59e0c5);">
                <div class="row">
                    <div class="col-5 col-md-4 my-2">
                        <span class="info-box-icon push-bottom">
                            <i class="fas fa-bullseye"></i>
                        </span>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="info-box-content">
                            <span class="info-box-text ">
                                <!-- <h3 class="text-white">Students</h3> -->
                                <a class="text-white"  style="text-decoration:none" ><h6>Accuracy</h6></a>
                            </span>
                            <span class="info-box-text ">
                                <h5 class="text-white">51.06%</h5>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-dark  bg-b-green">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
        </div>
           
        <div class="col-md-6 col-lg-6 col-sm-6 mb-3">
            <div class="card text-dark bg-info bg-b-blue" style="background:linear-gradient(45deg, #4099ff, #73b4ff);">
                <div class="row">
                    <div class="col-5 col-md-4 my-2">
                        <span class="info-box-icon push-bottom">
                            <i class="fas fa-book"></i>
                        </span>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="info-box-content">
                            <span class="info-box-text ">
                                <!-- <h3 class="text-white">Students</h3> -->
                                <a class="text-white"  style="text-decoration:none" ><h6>Attempted</h6></a>
                            </span>
                            <span class="info-box-text ">
                                <h5 class="text-white">94/1568</h5>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
              <div class="card text-dark  bg-b-green"">
               <span class="info-box-number ">
                                <h6 class="text-dark">0</h6>
                                <small>SSB/AFSB Tests</small>
                </span>
            </div>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
var xValues = ["Maths", "English", "Geography", "History","Biology","Chemistry","Physics"];
var yValues = [55, 49, 44, 54,105,63,51];
var barColors = ["red", "green","blue","orange","brown","yellow","black"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor:barColors,
      data: yValues
    }]
  },
  options: {
    legend:{display: false},
    title: {
      display: true,
      text:"Overall performance of the student"
    }
  }
});
</script>
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