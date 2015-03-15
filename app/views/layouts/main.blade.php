<html>
<head>
    <title>@yield('title', 'Xourse')</title>
    {{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ HTML::style('assets/style.css') }}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
<body>
    @yield('navigation')

    @yield('content')

    <nav class="navbar" style="margin-top:30px">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="pull-right" id="bs-exa">
                Made with <i class="fa fa-heart" style="color:#ff5555"></i> at Byldathon!
            </div>
        </div>
    </nav>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
</body>
</html>