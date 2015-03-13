<html>
<head>
    <title>@yield('title', 'Appy')</title>
   	<script type="text/javascript" src="../bower_components/webcomponentsjs/webcomponents.min.js"></script>
    <link rel="import" href="../bower_components/polymer/polymer.html">
    <link rel="import" href="../bower_components/core-elements/core-elements.html">
    <link rel="import" href="../bower_components/paper-elements/paper-elements.html">
    <link rel="import" href="../bower_components/font-roboto/roboto.html">
    
    <style>
        
        body {
            text-align: center;
        	 background-color: #121212;
          //  background:url("../assets/images/bg.png");
           background: linear-gradient(#000,#fff);
            background-size: cover;
            background-position: center;
        }
        .wrapper {
            text-align: center;
            font-family: roboto;
           // color: linear-gradient(#000,#fff);
            padding-top: 18vh;
        }
        
        h1 {
            margin-bottom: 20vh;
            font-size: 15vw;
        }
    </style>
    
    </head>
<body>
    <paper-button>sdbsf</paper-button>
    
    @yield('content')
</body>
</html>