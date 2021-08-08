<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    <style>
            *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body{
        display: flex;
        min-height: 100vh;
        /* background: #6843d1; */
        /* justify-content: center;
        align-items: center; */
    }
    .contain{
        position: relative;
    }
    .contain .navigation{
        position: relative;
        width: 81px;
        height:100vh;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        transition:0.5s;
    }
    .contain .navigation.active{
    width:300px;
    }
    .contain .navigation ul{
        position:absolute;
        top:0;
        left:0;
        width:100%;
    }
    .contain .navigation ul li{
        position:relative;
        width:100%;
        list-style:none;
    }
    .contain .navigation ul li:hover{
        background:#efefef;
    }
    .contain .navigation ul li a{
        position:relative;
        display:block;
        width:100%;
        display:flex;
        text-decoration:none;
        color:#6843cf;
        font-weight:500;
    }
    .contain .navigation ul li a .icon{
        position:relative;
        display:block;
        min-width:80px;
        /* text-align:center; */
        height:60px;
        line-height:60px;
    }
    .contain .navigation ul li a .icon .fa{
        font-size:24px;
    }
    .contain .navigation ul li a .title{
        position:relative;
        display:block;
        height:60px;
        line-height: 60px;
        white-space:nowrap;
    }
    .toggle{
        position:absolute;
        width:40px;
        height:40px;
        right:-20px;
        border:5px solid #6843d1;
        top:calc(50% - 20px);
        border-radius:50%;
        cursor:pointer;
        color:#f5f5f5;
         background:#f5f5f5;
    }
    .toggle::before
    {
        content:'\f054';
        display: inline-block;
        position:absolute;
        font-family:FontAwesome;
        width:100%;
        height:100%;
        font-size: 44px;
        line-height:30px;
        text-align:center;
        font-size:16px;
        color:#6843d1;            
    }
    .toggle.active::before{
        content:'\f053';
    }
    </style>

</head>
<body>
    <div class="contain">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="title">message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">setting</span>
                    </a>
                </li>
                 <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">setting</span>
                    </a>
                </li>
                 <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">setting</span>
                    </a>
                </li>
                 <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">setting</span>
                    </a>
                </li>
                 <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">setting</span>
                    </a>
                </li>
                 <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
                        <span class="title">setting</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="toggle"></div>
    </div>
    <script>
       const navigation = document.querySelector('.navigation');
document.querySelector('.toggle').onclick = function(){
  this.classList.toggle("active");
  navigation.classList.toggle("active");
};
    </script>
</body>
</html>