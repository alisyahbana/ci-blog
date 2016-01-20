<html>
<head>
	<title>CI Blog</title>
	<!-- <link href='https://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
  <script src="<?php echo base_url("assets/js/jquery-1.11.3.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
   <link rel="stylesheet" href="<?php echo base_url("assets/css/signin.css"); ?>">
  
</head>
<body>
    <nav id="mainNav" class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php 
                        if (isset($data_user)) {
                        echo '
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Menu <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                <a class="page-scroll" href=" '.base_url('site/logout').'"><i class="fa fa-btn fa-sign-out"></i> Logout</a>
                                </li>
                                <li>
                                <a href="'.base_url('site/members_area').'"><i class="fa fa-btn fa-user"></i> My Profile</a>
                                </li>
                                <li>
                                <a href="'.base_url('posts/create').'"><i class="fa fa-btn fa-pencil"></i> New Post</a>
                                </li>
                            </ul>
                        </li>
                        ';
                        }else{
                            echo '
                                <li>
                                <a class="page-scroll" href=" '.base_url('auth/login').'">Login</a>
                                </li>
                                <li>
                                <a class="page-scroll" href="'.base_url('auth/register').'">Register</a>
                                </li>
                            ';
                        }?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

<!-- <div class="container">
  
<div class="panel panel-default">
<div class="panel-heading">
<?php 
// echo heading($header, 3);
?>




</div>
<div class="panel-body">
   -->
 
    
