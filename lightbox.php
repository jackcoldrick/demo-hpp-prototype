<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="img/favicon.png">       

        <title>Lightbox | HPP Demo Prototype</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href='css/custom.css' rel='stylesheet'>
        <!-- Style -->
        <link id='theme' href='css/style-1.css' rel='stylesheet'>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img id='logo-box' src='img/rxp_logo_white.svg' width='200' alt='Realex Payments'/></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href='#' id='style-1'>Default Theme</a></li>
                        <li><a href='#' id='style-2'>Theme 1</a></li>
                        <li><a href='#' id='style-3'>Theme 2</a></li>
                        <li><a href='#' id='style-4'>Theme 3</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Page Content -->
        <h1 class='title'>Lightbox</h1>
        <div class="container">
            <div class="row">
                <div class='col-lg-6 panel panel-default'>
                    <div class='panel-heading'>Lightbox Instructions</div>
                    <div class='panel-body'>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                    </div>
                </div>
                <div class='col-lg-6'>
                    <p class="lead">Customer Checkout:</p>
                    <ul class="list-unstyled lightbox">
                        <li>1. Customer Information</li>
                        <li>2. Billing Information</li>
                        <li>3. Shipping Information</li>
                        <li>4. Payment Information
                            <div id='mybtn' class="btn btn-default" role="button">Pay Now</div></li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- jQuery Version 1.11.1 -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JS -->
        <script src='js/script.js'></script>
        <!-- Lightbox -->
        <script src="js/rxp-js.js"></script>
        <script>
            $.getJSON("requestJS.php", function (jsonFromServerSdk) {
                RealexHpp.setHppUrl("https://hpp.sandbox.realexpayments.com/pay");
                RealexHpp.init("mybtn", "thank-you.php", jsonFromServerSdk);
            });
        </script>
    </body>
</html>