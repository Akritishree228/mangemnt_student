<!DOCTYPE html>
<html>
<head>
	<title>Notification</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Montserrat', sans-serif;
}

body{
	background: #ececec;
}

.wrapper{
	
}

.notification_wrap{
	/* width: 500px; */
	/* margin:0 20px auto 0px; */
    /* border-radius:100px */
}

.notification_wrap .notification_icon{
	position: relative;
	/* width: 50px; */
	/* height: 50px; */
	font-size: 32px;
	margin: 0 auto;
	text-align: right;
	color: #605dff;
    
}

.notification_wrap .notification_icon .fa-bell{
	cursor: pointer;
}

.dropdown{
	width:650px;
	height: auto;
	background: #fff;
	border-radius:30px;
	box-shadow: 2px 2px 3px rgba(0,0,0,0.125);
	margin: 15px auto 0;
	padding: 15px;
	position: relative;
	display: block;
}

.notification_wrap .dropdown .notify_item{
	display: flex;
	align-items: center;
	padding: 5px 0px;
	border-bottom: 1px solid #dbdaff;
}

.notification_wrap .dropdown .notify_item:last-child{
	border-bottom: 0px;
}

.notification_wrap .dropdown .notify_item .notify_img{
	margin-right: 15px;
}

.notification_wrap .dropdown .notify_item .notify_info p{
	margin-bottom: 5px;
}

.notification_wrap .dropdown .notify_item .notify_info p span{
	color: #605dff;
	margin-left: 5px;
}

.notification_wrap .dropdown .notify_item .notify_info .notify_time{
	color: #c5c5e6;
	font-size: 12px;
}

/* .notification_wrap .dropdown:before{
	content: "";
	position: absolute;
	top: -30px;
	left: 50%;
	transform: translateX(-50%);
	border: 15px solid;
	border-color: transparent transparent #fff transparent;
} */

.notification_wrap .dropdown.active{
	display: none;
}
@media screen  and (max-width:400px){
    .dropdown{
        width:100%;
    }
    .notification_wrap .notification_icon{
	text-align:right;
	color: #605dff;
    
}
}
        </style>
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
            <h3 style="float: left;margin: 2px;font-weight:bold ">Notification</h3>
          </div>
        </div>
      </div>

<div class="container-fluid">
	<div class="notification_wrap">
		<div class="notification_icon">
			<i class="fas fa-bell"></i>
		</div>
		<div class="dropdown">
            <div class="notify_item">
				<div class="row">
                    <div class="col-md-4">
                        <h5 class="mx-3" style="">Notification</h5>
                    </div>
                </div>
			</div>
			<div class="notify_item">
				<div class="notify_img">
					<img src="./images/pic/not_1.png" alt="profile_pic" style="width:30px;">
				</div>
				<div class="notify_info">
					<p>Alex commented on<span>Timeline Share</span></p>
					<span class="notify_time">10 minutes ago</span>
				</div>
			</div>
			<div class="notify_item">
				<div class="notify_img">
					<img src="./images/pic/not_1.png" alt="profile_pic" style="width: 30px;border-radius:10px">
				</div>
				<div class="notify_info">
					<p>Ben hur commented on your<span>Timeline Share</span></p>
					<span class="notify_time">55 minutes ago</span>
				</div>
			</div>
			<div class="notify_item">
				<div class="notify_img">
					<img src="./images/pic/not_1.png"alt="profile_pic" style="width: 30px;border-radius:10px">
				</div>
				<div class="notify_info">
					<p>Meryn trant liked your<span>Cover Picture</span></p>
					<span class="notify_time">2 hours ago</span>
				</div>
			</div>
			<div class="notify_item">
				<div class="notify_img">
					<img src="./images/pic/not_1.png" alt="profile_pic" style="width: 30px">
				</div>
				<div class="notify_info">
					<p>John wick commented on your<span>Profile Picture</span></p>
					<span class="notify_time">6 hours ago</span>
				</div>
			</div>
		</div>
	</div>
</div>
</main>





	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  	<script src="main.js"></script>

    <!-- <script type="text/javascript">
    	$('#deleteModal').on('show.bs.modal', function(event){
    		var button = $(event.relatedTarget)
    		var recipient = button.data('whatever')
    		var modal = $(this)
    		modal.find('.modal-title').text('New message to' + recipient)
    		modal.find('.modal-body input').val(recipient)
    	})
    </script> -->
    <script>
		$(document).ready(function(){
			$(".notification_icon .fa-bell").click(function(){
				$(".dropdown").toggleClass("active");
			})
		});
	</script>
</body>
</html>