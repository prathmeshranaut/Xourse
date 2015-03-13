<html>
<head>
    <title>@yield('title', 'Appy')</title>
   	<script type="text/javascript" src="../bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <link rel="import" href="../bower_components/polymer/polymer.html">
    <link rel="import" href="../bower_components/core-elements/core-elements.html">
    <link rel="import" href="../bower_components/paper-elements/paper-elements.html">
    <link rel="import" href="../bower_components/font-roboto/roboto.html">
    
    <style>
        
        .topbar {
    
            display:block;
        background-color: #3BBFE8;
    
    }
        
        .top {
            display: block;
        
           padding:6px 0px 0px 0px;
            background-color: #3BBFE8;
        }
        
        html {
            font-family: roboto;
            padding:0;
            margin:0;
        }
        
        .hover {
            
            float:left;
        
            margin:0;
            padding:0;
            
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
            padding-top: 10vh;
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
        
        .login {
            background: linear-gradient(#5c9bEb 0%,#5D9CEC 100%);
            font-weight: bold;
            font-size:3vw;
            color:#DCDEE3;
            height:12vh;
            margin-top:3vh;
        }
        
    </style>
    
    </head>
<body>
    
    @yield('content')
</body>
</html>