<?php
require '../constants/config.php';
require '../constants/check-login.php';

if ($logged == "1") {
       if ($myrole == "admin") {

       }else{

        header("location:../");

       }

    }else{

        header("location:../");

    }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $site_title; ?> - Featured Ads</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a target="_blank" class="navbar-brand" href="../"><?php echo $site_title; ?></a>
            </div>
        

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $myusername; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="account"><i class="fa fa-gear fa-fw"></i> Account Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                </li>

            </ul>
           

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="./"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="pub-ads"><i class="fa fa-edit fa-fw"></i> Published Ads</a>
                        </li>
                        <li>
                            <a href="active-ads"><i class="fa fa-check-circle-o fa-fw"></i> Active Ads</a>
                        </li>
                        <li>
                            <a href="pending-ads"><i class="fa fa-spinner fa-fw"></i> Pending Ads</a>
                        </li>
                        <li>
                            <a href="featured-ads"><i class="fa fa-star-o fa-fw"></i> Featured Ads</a>
                        </li>
                        <li>
                            <a href="users"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="account"><i class="fa fa-cog fa-fw"></i> Account Settings</a>
                        </li>
                       
                        <li>
                            <a href="about"><i class="fa fa-info-circle fa-fw"></i> About</a>
                        </li>
                         <li>
                            <a href="../logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

                    </ul>
                </div>
              
            </div>
        
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
            <h4 class="page-header">Featured Ads</h4>
        </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <?php require 'constants/check-reply.php'; ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Featured Ads
                        </div>

                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Price <?php echo $currency; ?></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    try {
                                   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
                                  $stmt = $conn->prepare("SELECT * FROM tbl_ads LEFT JOIN tbl_sup ON tbl_sup.user_id = tbl_ads.author WHERE tbl_ads.featured = 'yes'");
                                  $stmt->execute();
                                  $result = $stmt->fetchAll();

                                  foreach($result as $row)
                                  {
                                    $ad_id = $row['ad_id'];
                                    $directory = "../uploads/ads/$ad_id/";
                                    $files = scandir ($directory);
                                    $firstFile = $directory . $files[2];
                                    $status = $row['status'];
                                    $featured = $row['featured'];

                                    ?>
                                    <tr class="odd gradeX">
                                        <td style="width:100px"><img style="width:100px" src="<?php echo $firstFile; ?>"></td>
                                        <td style="width:200px"><?php echo $row['title']; ?> <br><?php echo $row['ad_id']; ?></td>
                                        <td><?php echo $row['category']; ?></td>
                                        <td ><?php echo $row['username']; ?></td>
                                        <td ><?php echo number_format($row['price']); ?> </td>
                                        <td >
                                             <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    Select Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a target="_blank" href="../ad/<?php echo $row['ad_id'];?>">View Ad</a>
                                                        <?php
                                                        if ($status == "active") { 
                                               ?> <li><a href="app/make-inact.php?url=featured-ads&node=<?php echo $row['ad_id'];?>">Make Inactive</a><?php
                                                        }else{
                                               ?> <li><a href="app/make-act.php?url=featured-ads&node=<?php echo $row['ad_id'];?>">Make Active</a><?php
                                                        }

                                                        ?>

                                                         <?php
                                                        if ($featured == "yes") { 
                                               ?> <li><a href="app/remov-feat.php?url=featured-ads&node=<?php echo $row['ad_id'];?>">Remove Featured</a><?php
                                                        }else{
                                               ?> <li><a href="app/make-feat.php?url=featured-ads&node=<?php echo $row['ad_id'];?>">Make Featured</a><?php
                                                        }

                                                        ?>
                                                        <li><a onclick = "return confirm('Delete Ad ?');" href="app/drp-ad.php?url=featured-ads&node=<?php echo $row['ad_id'];?>">Delete</a>
                                                    </li>
         
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <?php
        

                                  }
                      
                                 }catch(PDOException $e)
                                   {
                                     echo "Connection failed: " . $e->getMessage();
                                  }

                                    ?>

                                  
                                </tbody>
                            </table>

                        </div>

                    </div>
    
                </div>
             
            </div>
         

        </div>


    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>


    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
