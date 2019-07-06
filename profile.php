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
                <div id="logo_image"><img src="images/techie.png" class="img-rounded" alt="Cinque Terre" style="height:50%; width:50%"><h3 style="color:#65c9f7"><em>SEEK. FIND. ENJOY!</em></h3></div>
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
            <li><a href="web_admin/index.php"><span class=""></span>Admin Login</a></li>
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
				
			</ul>
		</div>
	</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>


<div class="container-fluid">
    <p><br/></p>
    <p><br/></p>
    <div class="thumbnail">

        <div class="w3-content w3-section" style="max-width:500px">

            <img class="mySlides w3-animate-fading" src="images/iphone x.jpg" style="height:480px; width: 1310px">
            <img class="mySlides w3-animate-fading" src="images/s9.jpg" style="height:480px; width: 1310px">
            <img class="mySlides w3-animate-fading" src="images/s9_cover.jpg" style="height:480px; width: 1310px">
            <img class="mySlides w3-animate-fading" src="images/Bannert.jpg">
        </div>

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 9000);
            }
        </script>

    </div>
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 col-xs-12">
            <div id="sidebar_container">
                <div class="sidebar">
                    <div class="sidebar_top"></div>
                    <div class="sidebar_item">
                        <div id="get_category">
                        </div>
                    </div>
                    <div class="sidebar_base"></div>
                </div>
                <div class="sidebar">
                    <div class="sidebar_top"></div>
                    <div class="sidebar_item">
                        <div id="get_brand">
                        </div>
                    </div>
                    <div class="sidebar_base"></div>
                </div>
                <div class="sidebar">
                    <div class="sidebar_top"></div>
                    <div class="sidebar_base"></div>
                </div>
            </div>

        </div>
        <div class="container-fluid" style="background-color: #acc1d4">
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12" id="product_msg"></div>

                </div>
                <div class="panel panel-info">
                    <div class="col-sm-12">
                        <img src="images/img13.jpg" style="width:100%; height: 250px; float: right">
                    </div>
                    <div class="panel-heading" style="background-color:#d9edf7"><h3>Products</h3></div>

                    <div class="panel-body" style="background-color:#acc1d4">

                        <div id="get_product"></div>

                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <center>
            <ul class="pagination" id="pageno">
                <li><a href="#">1</a></li>
            </ul>
        </center>
    </div>
</div>
<div class="panel-footer">
    <footer>
        <div class="footerHeader" ></div>
        <div class="container">
            <div class="col-md-4" >
                <h3>About us</h3>
                <p>
                    Techies online store is a renowned tech shop. It was established in 2016. We sell 
                    almost every tech product. We first implemented cash on delivery system in this country. 
                </p>
            </div>

            <div class="col-md-4">
                <h3>Our Location </h3>
                <img src="product_images/capture12.png" style="width: 250px">
            </div>
            <div class="col-md-4" >
                <h3>Contact Us</h3>
                <ul>
                    <li>Phone : 01515602881</li>
                    <li>E-mail : techies_store@comapyn.com</li>
                    <li>Fax : 123 - 456 - 789</li>
                </ul>
                <p>
                    123, Aftabnagar, Dhaka - 1206
                </p>
                <div class="sm">
                    <a href="#" ><img src=images/if_facebook_313103.png style="width:40px; height: 40px"></a>
                    <a href="#" ><img src=images/if_googleplus_313110.png style="width:40px; height: 40px"></a>
                    <a href="#" ><img src=images/if_twitter_313075.png style="width:40px; height: 40px"></a>
                    <a href="#" ><img src=images/if_instagram_313113.png style="width:40px; height: 40px"></a>

                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
















































