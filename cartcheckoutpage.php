<?php

session_start();
if(!isset($_SESSION["uid"])){
    header("location:index.php");
}




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Techies Store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <style>
        @media screen and (max-width:480px){
            #search{width:80%;}
            #search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}

    </style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #fcdedc">
    <h1 style="float:right"><a href="index.php">Techies <span class="logo_colour">Online Store</span></a></h1>

    <div class="container-fluid">
        <div class="navbar-header">
            <div id="logo">
                <div id="logo_image"><img src="images/techie.png" class="img-rounded" alt="Cinque Terre" style="height:10%; width:30%"><h3 style="color:#65c9f7"><em>SEEK. FIND. ENJOY!</em></h3></div>
                <div id="logo_text">

                </div>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                <span class="sr-only">navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
    </div>

    <div class="collapse navbar-collapse" id="collapse">

        <nav class="nav navbar-left">

            <ul id="menu">
                <ul class="nav navbar-nav">

                    <li class="nav-item"><a href="index.php">Home</a></li>
                    <li> <div style="width:300px;left:10px;top:10px; padding-top: 9px"><input style="width: 200px; float: left;" type="text" class="form-control" id="search"><button style="width: 70px" class="btn btn-primary" id="search_btn" style=" float:right">Search</button></div>
                    </li>
                </ul>
            </ul>
        </nav>
        <nav class="nav navbar-nav navbar-right">
            <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
                <div class="dropdown-menu" style="width:400px;">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-3 col-xs-3">Sl.No</div>
                                <div class="col-md-3 col-xs-3">Product Image</div>
                                <div class="col-md-3 col-xs-3">Product Name</div>
                                <div class="col-md-3 col-xs-3">Price in $.</div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div id="cart_product">
                                <!--<div class="row">
                                    <div class="col-md-3">Sl.No</div>
                                    <div class="col-md-3">Product Image</div>
                                    <div class="col-md-3">Product Name</div>
                                    <div class="col-md-3">Price in $.</div>
                                </div>-->
                            </div>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>

        </nav>
        <br><br>
    </div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <h1>Thankyou </h1>
                    <hr/>
                    <p>Hello <?php echo $_SESSION["name"]; ?>,Your Order Has Been Placed. Please Wait for confirmation call.<b></b><br/>
                        you can continue your Shopping <br/></p>
                    <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>
















































