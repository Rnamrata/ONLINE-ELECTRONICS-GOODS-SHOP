<?php
session_start();
include "db.php";
    $product_id = $_GET["ido"];
    $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
    $run_query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($run_query);
    $product_price = $row["product_price"];
    $proid = $row["product_id"];


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
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
                <ul class="dropdown-menu">
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
    <p><br/></p>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="signup_msg">
            <!--Alert from signup form-->
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Product Price Update</div>
                <div class="panel-body">

                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden"  id="prooid" name="prooid" value="<?php echo $product_id; ?>" class="form-control">
                            </div>
                            <p><br/></p>
                            <div class="col-md-6">
                                <label for="pro_price">Product Price</label>
                                <input type="text"  id="pro_price" name="pro_price" class="form-control" value="<?php echo $product_price; ?>">
                            </div>
                            <p><br/></p>
                            <p><br/></p>
                            <div class="col-md-6">
                                <label for="pro_price">Product Quantity</label>
                                <input type="text"  id="pro_qty" name="pro_qty" class="form-control">
                            </div><p><br/></p>
                            <p><br/></p>
                        <div class="row">
                            <div class="col-md-12">
                                <input style="float:right;" value="Update" type="submit" id="update_button" name="submit"class="btn btn-success btn-lg">
                                <a href='adminproductlist.php'><input style="float:right;" value="Cancel" type="button" id="cancelbuttonadmin" name="cancel_button"class="btn btn-success btn-lg"></a>
                            </div>
                        </div>
                            <div class="row">
                                <a class="col-md-12">

                                </div>
                            </div>
                </div>
                </form>
<?php
		error_reporting(E_ERROR | E_PARSE);		
	if(isset($_POST["submit"])) {
	$prooid = $_POST["prooid"];
	$proprice = $_POST["pro_price"];
	$pro_qty = $_POST["pro_qty"];
	$sql1 = "select * from products where product_id = '$prooid' and product_price = '$proprice' ";
	$run_query2 = mysqli_query($con, $sql1);
	if ($run_query2) {
	$sql2 = "UPDATE products SET product_price='$proprice',product_qty= '$pro_qty' WHERE product_id=$prooid";
	$run_query = mysqli_query($con, $sql2);
	header('location: adminproductlist.php');
	}
	else{
		header( 'location: /ecommerceweb/index.php');
	}
	}
	
?>
  <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>



















