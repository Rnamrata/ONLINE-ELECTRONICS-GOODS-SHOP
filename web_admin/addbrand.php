<!DOCTYPE html>


<?php
include("check_session.php");
include("db.php");
error_reporting(0);
if(isset($_POST['submit']))
{

    $brand_title=$_POST['brand_title'];
    mysqli_query($con,"insert into brands (brand_title) values ('$brand_title')") or die ("query incorrect");

            header("location: /ecommerceweb/web_admin/index.php?success=1");

    mysqli_close($connection);
}
?>






<html>
<head>
    <meta charset="UTF-8">
    <title>Techies Online Store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery2.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
<div class="container-fluid">
    <?php include "include/side_bar.php"?>
    <div class="col-md-9 content" style="margin-left:10px">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#E6EEEE">
                <h1 style="color:#337ab7;"><span class="glyphicon glyphicon-tag"></span> Add New Brand  </h1></div><br>
            <div class="panel-body" style="background-color:#337ab7;">
                <div class="col-lg-7">
                    <div class="well">
                        <form  method="post" name="form" enctype="multipart/form-data">
                            <p>Brand Title</p>
                            <input class="input-lg thumbnail form-control" type="text" name="brand_title" id="brand_title" autofocus style="width:100%" placeholder="Brand Name" required>



                    </div>


                    <div align="right">
                        <a href="index.php"><button type="text" name="text" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button></a>
                        <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px; background-color:#1557c1; color:white;"> Add Category</button>
                    </div>

                </div>

                </form>

            </div>
        </div></div></div>


</body>
</html>