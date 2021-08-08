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


/*---------chat window---------------*/
.container{
    /* max-width:900px; */
}
.inbox_people {
	background: #fff;
	/* float: right; */
	/* overflow: hidden; */
	/* width: 50%; */
	border-right: 1px solid #ddd;
}

.inbox_msg {
	border: 1px solid #ddd;
	clear: both;
	overflow: hidden;
}

.top_spac {
	margin: 20px 0 0;
}

.recent_heading {
	float: left;
	width: 40%;
}

.srch_bar {
	display: inline-block;
	text-align: right;
	width: 60%;
}

.headind_srch {
	padding: 10px 29px 10px 20px;
	overflow: hidden;
	border-bottom: 1px solid #c4c4c4;
}

.recent_heading h4 {
	color: #0465ac;
    font-size: 16px;
    margin: auto;
    line-height: 29px;
}

.srch_bar input {
	outline: none;
	border: 1px solid #cdcdcd;
	border-width: 0 0 1px 0;
	width: 80%;
	padding: 2px 0 4px 6px;
	background: none;
}

.srch_bar .input-group-addon button {
	background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
	border: medium none;
	padding: 0;
	color: #707070;
	font-size: 18px;
}

.srch_bar .input-group-addon {
	margin: 0 0 0 -27px;
}

.chat_ib h5 {
	font-size: 15px;
	color: #464646;
	margin: 0 0 8px 0;
}

.chat_ib h5 span {
	font-size: 13px;
	float: right;
}

.chat_ib p {
    font-size: 12px;
    color: #989898;
    margin: auto;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.chat_img {
	float: left;
	width:40px;
}

.chat_img img {
	width: 100%
}

.chat_ib {
	float: left;
	padding: 0 0 0 15px;
	width: 88%;
}

.chat_people {
	overflow: hidden;
	clear: both;
}

.chat_list {
	border-bottom: 1px solid #ddd;
	margin: 0;
	padding: 18px 16px 10px;
}

.inbox_chat {
	height: 550px;
	overflow-y: scroll;
}

.active_chat {
	background: #e8f6ff;
}

.incoming_msg_img {
	display: inline-block;
	width: 6%;
}

.incoming_msg_img img {
	width: 100%;
}

.received_msg {
	display: inline-block;
	padding: 0 0 0 10px;
	vertical-align: top;
	width: 92%;
}

.received_withd_msg p {
	background: #ebebeb none repeat scroll 0 0;
	border-radius: 0 15px 15px 15px;
	color: #646464;
	font-size: 14px;
	margin: 0;
	padding: 5px 10px 5px 12px;
	width: 100%;
}

.time_date {
	color: #747474;
	display: block;
	font-size: 12px;
	margin: 8px 0 0;
}

.received_withd_msg {
	width: 57%;
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
    
  

<div class="messaging mt-4 ">
  <div class="inbox_msg">
	<div class="inbox_people">
	  <div class="headind_srch">
		<div class="recent_heading">
		  <h4>Recent Messages</h4>
		</div>
		<div class="srch_bar">
		  <div class="stylish-input-group">
			<input type="text" class="search-bar"  placeholder="Search" >
			</div>
		</div>
	  </div>
	  <div class="inbox_chat scroll">
		<div class="chat_list active_chat">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
		<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
        	<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
        	<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
        	<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
        	<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
		<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
		<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
		<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
		<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
		<div class="chat_list">
		  <div class="chat_people">
			<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
			<div class="chat_ib">
			  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
			  <p>Test, which is a new approach to have all solutions 
				astrology under one roof.</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</div>




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
    <!-- <script>
		$(document).ready(function(){
			$(".notification_icon .fa-bell").click(function(){
				$(".dropdown").toggleClass("active");
			})
		});
	</script> -->
</body>
</html>