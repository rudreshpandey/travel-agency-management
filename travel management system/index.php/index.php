
<html>
    <head>
        <title>my assignment</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Lifestyle</a>  
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>>Login</a></li>
                    </ul>
                </div>
            </div>
          </nav>
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <a href="products.php" class="btn btn-danger btn-lg active">
                        Shop Now
                    </a>
                </div>
                
            </div>
        </div>
        <?php include 'footer.php'?>
    </body>
</html>
