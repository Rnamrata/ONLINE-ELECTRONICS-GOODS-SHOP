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
            <li><a href="web_admin/index.php"><span class=""></span>Admin Login</a></li>

            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
                <ul class="dropdown-menu">
                    <div style="width:300px;">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Login</div>
                            <div class="panel-heading">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required/>
                                <label for="email">Password</label>
                                <input type="password" class="form-control" id="password" required/>
                                <p><br/></p>
                                <a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
                            </div>
                            <div class="panel-footer" id="e_msg"></div>
                        </div>
                    </div>
                </ul>
            </li>
            <li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>

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
<p><br/></p>
<p><br/></p>

	<div class="container-fluid">
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
					<div class="panel-heading">Customer SignUp Form</div>
					<div class="panel-body">
					
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" name="address1"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">

								<input type="hidden" id="address2" name="address2"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Sign Up" type="button" id="signup_button" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>

				</div>
			</div>
			<div class="col-md-2"></div>
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



















