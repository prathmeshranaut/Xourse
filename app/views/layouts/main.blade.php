<html>
<head>
    <title>@yield('title', 'Appy')</title>
<!--
   	<script type="text/javascript" src="../bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <link rel="import" href="../bower_components/polymer/polymer.html">
    <link rel="import" href="../bower_components/core-elements/core-elements.html">
    <link rel="import" href="../bower_components/paper-elements/paper-elements.html">
    <link rel="import" href="../bower_components/font-roboto/roboto.html">
-->
    
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <style>
        
        .topbar {
    
            font-size:1.1em;
            display:block;
        background-color: #3BBFE8;
            padding:0px 30px 0px 30px;
    
    }
        
      .gap{
      
            width:70%;
          
      }
            
        .gapa{
        
            width:70%;
        }
                
        .top {
            display: block;
        
           padding:6px 0px 0px 0px;
           // background-color: #3BBFE8;
        }
        
        html {
            font-family: roboto;
            padding:0;
            margin:0;
        }
        
/*
        .navbar {
            padding-top:1%;
            padding-right:5%;
            padding-left:5%;
            //background-color:#3BBFE8;
        }
*/
        
        .hover {
            
            float:left;
           // height:6%;
            margin:0;
            padding:15px 10px 0px 10px;
            font-size:1.1em;
            
        }
        
        .nega{
            
            margin-top: -10px;
        
        }
        
        .navbar-brand{
        
            font-size: 1.6em;
            font-weight: bold;
        }
        
        .search{
            
            padding:0;
            margin:0;
            padding-top:1.35%;
            margin-left: 10px;
            padding-left: 20px;
           
        }
        
        .container {
        
          //  display:list-item;
        
        }
        
        .hover:hover {
        
            background-color:2BaFd8;
        
        }
        
        .left {
            float:left;
        }
        
        .right{
            float:right;
        }
        
        body {
            padding:0;
            margin:0;
            text-align: center;
        	// background-color: #121212;
          //  background:url("../assets/images/bg.png");
           background:#ccd;
            background-size: cover;
            background-position: center;
        }
        .wrapper {
            text-align: center;
            
           // color: linear-gradient(#000,#121212);
            padding-top: 4vh;
        }
        
        h1 {
            margin-bottom: 16vh;
            font-size: 12vw;
            color:#eaeaea;
        }
        
        #greet{
            
                font-size:2vw;        
                color:#7a7a7a;
        }
        
        a {
            text-decoration:none;
            color:#DCDEE3;
            
        }
        
        .btn-primary {
            background: linear-gradient(#5c9bEb 0%,#5D9CEC 100%);
            font-weight: bold;
            font-size:3vw;
            color:#DCDEE3;
            
            margin-top:3vh;
            padding: 6px 6px 6px 6px;
            border-radius: 3px;
        }
        
    </style>
    
    </head>
<body>
    
    @yield('content')
    
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
</body>
</html>