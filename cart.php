<?php
include "db.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}






if(isset($_POST["submit"])){
    $uid = $_SESSION["uid"];
    $sql = "SELECT * FROM cart WHERE user_id = '$uid'";
    $run_query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($run_query);
    if($count > 0){

        while($row=mysqli_fetch_array($run_query)){
            $id = $row["id"];
            $pro_id = $row["p_id"];
            $pro_name = $row["product_title"];
            $pro_image = $row["product_image"];
            $qty = $row["qty"];
            $sql2= "SELECT * FROM products WHERE product_id = '$pro_id'";
            $run_query2 = mysqli_query($con,$sql2);
            if($run_query2){
                $row=mysqli_fetch_array($run_query2);

                $product_qty = $row["product_qty"];
                $updateqty = $product_qty - $qty;
                $sql3= "UPDATE products SET product_qty= $updateqty WHERE  product_id = '$pro_id'";
                $run_query3 = mysqli_query($con,$sql3);
                if($run_query3){
                    header("location: cartcheckoutpage.php");
                }
                else{
                    echo "<script type='text/javascript'>alert(<?php echo ERROR2 ?>);</script>";
                }

            }
            else{
                echo "<script type='text/javascript'>alert(<?php echo ERROR ?>);</script>";
            }


        }
    }
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
<p><br/></p>
<p><br/></p>
<p><br/></p>

	<div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="cart_msg">
                <!--Cart Message-->
            </div>
            <div class="col-md-2"></div>
        </div>
		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in $</b></div>
						</div>
						<div id="cart_checkout"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>


			
		</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>
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
















		