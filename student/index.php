<?php 
	
	session_start();
	if (!isset($_SESSION['username']))
	{
		header('Location: ../signin.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gnooble: Student</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/main.css">

</head>
<body>

	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Gnooble</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				 <img class="user-img img-rounded" src="https://pbs.twimg.com/profile_images/437217294507180033/0_a2QewN_400x400.jpeg" alt="Sougata Nair"/>
	          	<?php echo $_SESSION['username']; ?>
	          	<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Settings</a></li>
	            <li><a href="#">Scoreboard</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container-fluid">
	<div class="row">
		<section class="col-sm-3 col-md-2 sidebar"><ul class="nav nav-sidebar">
                <li class="active"><a href="/practice/">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="">Practice</a></li>
                <li><a href="">MySubmissions</a></li>
                <li><a href="">Tutorials</a></li>
                <li><a href="">Algorithms and Data Structures</a></li>
            </ul>
		  <ul class="nav nav-sidebar">
		    <li><a href="">Nav item</a></li>
		    <li><a href="">Nav item again</a></li>
		    <li><a href="">One more nav</a></li>
		    <li><a href="">Another nav item</a></li>
		    <li><a href="">More navigation</a></li>
		  </ul>
		  <ul class="nav nav-sidebar">
		    <li><a href="">Nav item again</a></li>
		    <li><a href="">One more nav</a></li>
		    <li><a href="">Another nav item</a></li>
		  </ul>
		</section>
		<section class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		  <h1 class="page-header">Home</h1>
		  <p class="lead">Welcome Aboard!</p>


		   <div class="row">
			  <div class="col-md-6 clearfix user-profile">
				 <img class="user-img pull-left img-rounded img-responsive col-md-4 col-sm-4 col-xs-4" src="https://pbs.twimg.com/profile_images/437217294507180033/0_a2QewN_400x400.jpeg" alt="Sougata Nair"/>

				 <div class="user-info pull-left col-md-7 col-md-7 col-xs-7">
					<h2><strong>Sougata Nair</strong></h2>

					<p class="dept meta">Computer Science Department</p>

					<p class="contact meta"><strong>Phone: </strong>+918981006579</p>

					<p class="meta addr"><strong>Address: </strong>Baishali Garden, Jothshibrampur, Maheshtala, Kolkata - 700141</p>

				 </div>
			  </div>
			  <div class="col-md-5 num-questions">
				 <h3>Recently solved questions</h3>
				 <!-- Try to put only a few questions here, no more than 5 -->
				 <ul class="recent-qlist list-unstyled">
					<li><a href="#">Sample Question</a></li>
					<li><a href="#">Sample Question</a></li>
					<li><a href="#">Sample Question</a></li>
					<li><a href="#">Sample Question</a></li>
					<li><a href="#">Sample Question</a></li>
				 </ul>
			  </div>
		   </div>


		</section>
	</div>	
	</div>
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>