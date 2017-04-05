<html>
<body>
<head>
<title>Admin</title>
</head>
<style>
html{
            /* This image will be displayed fullscreen */
            background:url('bg.jpg') no-repeat center center;

            /* Ensure the html element always takes up the full height of the browser window */
            min-height:100%;

            /* The Magic */
            background-size:cover;
        }

        body {
            /* Workaround for some mobile browsers */
            min-height:100%;    
            padding-top: 20px;
            padding-bottom: 20px;           
        }

        .navbar {
            margin-top: 0px;
            margin-bottom: 0px;
        }
		.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>
    <div class="container">
        <nav class="navbar navbar-default navbar-custom" role="navigation">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/adminview">GPS</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="admin.php">Home</a></li>
				  <li><a href="adminnreg.php">Register</a></li>
                  <li><a href="addbus.php">Add the bus</a></li>
				    <li><a href="admindel.php">Delete the bus</a></li>
					<li><a href="viewdetails.php">View the details</a></li>
					<li><a href="sample.php">Track the bus</a></li>
                  <li class="dropdown">
                    <div class="dropdown" id="e" style="float:right">
  <button class="dropbtn">Admin</button>
  <div class="dropdown-content">
    <a href="#">My Profile</a>
    <a href="home.php">Log out</a>
  </div>
</div>
                  </li>
                </ul>

                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <strong>You are logged in!</strong>
                </div>
            </div>
        </div>
    </div>
	</body>
	</html>
