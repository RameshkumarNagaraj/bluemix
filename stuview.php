<html>
<head>
<title>Profile</title>
</head>
<body background="1.png">
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   
   
   <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Laravel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->                     
					<ul>
					<div class="dropdown" style="float:right;">
  <button class="dropbtn">Rameshkumar</button>
  <div class="dropdown-content">
    <a href="#">My Profile</a>
    <a href="home.php">Log out</a>
  </div>
</div>
					</ul>
                </div>
            </div>
        </nav>

        
    </div>
   
   

<div class="container">
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
	<div class="row">
	<div class="col-md-2 col-md-offset-2">
            <div class="panel panel-default">
			
                <div class="panel-heading"><strong>Acadamic</strong></div>
                <div class="panel-body">
                     <a href="/addbus"><span class="glyphicon glyphicon-user" ></span> My Profile</a><br><br>
					 <a href="#"><span class="glyphicon glyphicon-list-alt"></span> Mark</a><br><br>
					 <a href="#"><span class="glyphicon glyphicon-book"></span> Attendence</a><br><br>
					 <a href="#"><span class="glyphicon glyphicon-eye-open"></span> Library</a><br><br>
                </div>
            </div>
        </div>
		
		<div class="col-xs-6 col-sm-4">
            <div class="panel panel-default">
			
                <div class="panel-heading"><strong>Activity</strong></div>

                <div class="panel-body">
					<a href="#"><span class="glyphicon glyphicon-home" ></span> Assignment</a><br><br>
                     <a href="#"><span class="glyphicon glyphicon-pencil" ></span> Project</a><br><br>
					 <a href="#"><span class="glyphicon glyphicon-book"></span> Class Notes</a><br>
                </div>
            </div>
        </div>
		
		
		<div class="col-md-2 ">
            <div class="panel panel-default">
			
                <div class="panel-heading"><strong>Transport</strong></div>

                <div class="panel-body">
                     <a href="/mybusdetails"><span class="glyphicon glyphicon-user" ></span> My Bus details</a><br><br>
					 <a href="sample.php"><span class="glyphicon glyphicon-search"></span> Track the bus</a><br>
                </div>
            </div>
        </div>
	</div>
</div>
</html>
