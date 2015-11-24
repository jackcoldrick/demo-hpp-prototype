<?php
// Replace these with the values you receive from Realex Payments.
$merchantid = "demohpp";
$secret = "secret";
// The code below is used to create the timestamp format required by Realex Payments
$timestamp = strftime("%Y%m%d%H%M%S");
mt_srand((double) microtime() * 1000000);
// orderid:Replace this with the order id you want to use.The order id must be unique.
// In the example below a combination of the timestamp and a random number is used.
$orderid = $timestamp . "-" . mt_rand(1, 999);
// In this example these values are hardcoded. In reality you may pass 
// these values from another script or take it from a database. 
$curr = "EUR";
$amount = "1500";
$payerref = "Payer1";
$pmtref = "Card1";
// Below is the code for creating the digital signature using the SHA1 algorithm provided by PHP
$tmp = "$timestamp.$merchantid.$orderid.$amount.$curr.$payerref.$pmtref";
$sha1hash = sha1($tmp);
$tmp = "$sha1hash.$secret";
$sha1hash = sha1($tmp);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="img/favicon.png">       
        <title>HPP | HPP Demo Prototype</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href='css/custom.css' rel='stylesheet'>
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
                    <a class="navbar-brand" href="index.php"><img id='logo-box'  src='img/rxp_logo_white.svg' width='200' alt='Realex Payments'/></a>
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
        <h1 class='title hpp'>Hosted Payment Page</h1>
        <ol class="breadcrumb">
            <li><a href="#"><span class="badge">1</span>Customer Information</a></li>
            <li><a href="#"><span class="badge">2</span>Billing Information</a></li>
            <li class="active"><span class="badge">3</span>Review Order</li>
            <li><a href="#"><span class="badge">4</span>Payment Details</a></li>
        </ol>
        <div class="container">
            <div class="row">
                <div class='col-lg-6 panel panel-default'>
                    <div class='panel-heading'>HPP Instructions</div>
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
                            <form action="https://hpp.sandbox.realexpayments.com/pay" method="post">
                                <input type="hidden" name="MERCHANT_ID" value="<?php echo $merchantid; ?>">
                                <input type="hidden" id='acc' name="ACCOUNT" value="hpp">
                                <input type="hidden" name="ORDER_ID" value="<?php echo $orderid; ?>">
                                <input type="hidden" name="CURRENCY" value="<?php echo $curr; ?>">
                                <input type="hidden" name="AMOUNT" value="<?php echo $amount; ?>">
                                <input type="hidden" name="TIMESTAMP" value="<?php echo $timestamp; ?>">
                                <input type="hidden" name="SHA1HASH" value="<?php echo $sha1hash; ?>">
                                <input type="hidden" name="AUTO_SETTLE_FLAG" value="1">
                                <input type="hidden" name="OFFER_SAVE_CARD" value="1"> 
                                <input type="hidden" name="PAYER_REF" value="<?php echo $payerref; ?>"> 
                                <input type="hidden" name="PMT_REF" value="<?php echo $pmtref; ?>"> 
                                <input type="hidden" name="PAYER_EXIST" value="0"> 
                                <input type="hidden" name="CARD_STORAGE_ENABLE" value="1">
                                <input class="btn btn-default" type="submit" id="pay-button" value="Pay Now">
                            </form>
                        </li>
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
        <script src="js/account.js"></script>
    </body>
</html>