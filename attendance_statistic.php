<!DOCTYPE html>
<html>
<head>
	<title>Attendence</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
        <div class="container-fluid">
          <div class="col-6">
            <h3 style="float: left;margin: 2px;font-weight:bold ">Attendence Statistics</h3>
          </div>
        </div>
      </div>
	  <div class="container-fluid">
		  <div class="row">
			  <div class="col-md-6 col-lg-6 col-sm-6">
                <div class="card">
					<div class="card-body">
						<!-- <h6 class="text-center text-bold">Overall Attendence of the student</h6> -->
						 <canvas id="myChart" style="width:100%;max-width:500px;height:320px;font-weight:bold"></canvas>
					</div>
				</div>
			  </div>
			  <div class="col-md-6 col-lg-6 col-sm-6">
				  <div class="card">
					<div class="card-body">
				  <canvas id="barChart" style="width:100%;max-width:500px;height:320px;"></canvas>
				  </div>
				</div>
			  </div>
	         </div>
			  <div class="row mt-4 text-center">
               <div class="col-md-6 col-lg-6 col-sm-6" >
				  <div class="card" >
					<div class="card-body">
				  <canvas id="doughnutChart" style="width:100%;max-width:500px;height:320px;"></canvas>
				  </div>
				</div>
			  </div>
			   <div class="col-md-6 col-lg-6 col-sm-6" >
				  <div class="card" >
					<div class="card-body">
				  <img src="./images/pic/my.svg" alt="" style="width:100%;max-width:500px;height:320px">
				  </div>
				</div>
			  </div>
		  </div>
</div>
   






</main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
	   <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  	<script src="main.js"></script>
	  <script>
var xValues = ["Jan", "Feb", "Mar", "Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
var yValues = [55, 49, 44, 54,105,63,51,44, 54,105,63,51];
var barColors = ["red", "green","blue","orange","brown","yellow","black","orange","brown","yellow","black",];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
	  text:"Overall Performance Of Student",
    }
  }
});

var ctxL = document.getElementById("barChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March","April", "May", "June","Jul","Aug","Sep","Oct","Nov","Dec"],
    datasets: [
    {
        label: "Overall Performance Of Teacher",
        data: [30, 15, 62,65, 61, 65, 40, 65, 61, 65, 40,32],
        backgroundColor: '#4285F4',
        borderWidth: 0,
    }
    ]
},
  options: {
    responsive: true,
    legend: {
      display: true,
    },
    tooltips: {
      intersect: false,
      mode: 'index'
    },
    scales: {
      xAxes: [{
        stacked: true,
        gridLines: {
          display: false,
        },

        ticks: {
          fontColor: 'rgba(0,0,0, 0.5)',
        }
      }],
      yAxes: [{
        stacked: true,
        gridLines: {
          borderDash: [2],
          drawBorder: false,
          zeroLineColor: "rgba(0,0,0,0)",
          zeroLineBorderDash: [2],
          zeroLineBorderDashOffset: [2]
        },
        ticks: {
          fontColor: 'rgba(0,0,0, 0.5)'
        }
      }]
    }
  }
});

var ctxL = document.getElementById("doughnutChart").getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'doughnut',
  data: {
    labels: ["January", "February", "March", "April", "May", "June","Jul","Aug","Sep","Oct","Nov","Dec"],
    datasets: [
      {
        label: "Traffic",
        data: [30, 45, 62, 65, 61,30, 45, 62, 65, 61,67,87],
        backgroundColor: [
          "rgba(63, 81, 181, 0.5)", "rgba(77, 182, 172, 0.5)", "rgba(66, 133, 244, 0.5)", "rgba(156, 39, 176, 0.5)", "rgba(233, 30, 99, 0.5)",
		  "rgba(63, 81, 181, 0.5)", "rgba(77, 182, 172, 0.5)", "rgba(66, 133, 244, 0.5)", "rgba(156, 39, 176, 0.5)", "rgba(233, 30, 99, 0.5)",
		   "rgba(66, 133, 244, 0.5)", "rgba(156, 39, 176, 0.5)", "rgba(233, 30, 99, 0.5)"
        ],
      }
    ]
  },
  options: {
    responsive: true,
    legend: {
      display: true,
    }
  }
});
</script>
</body>
</html>