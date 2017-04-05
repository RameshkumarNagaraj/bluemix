<html>
<head>
<title>
Admin
</title>
</head>
<body>
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

	{
    padding: 0;
    margin: 0;
    border: 0;
}
body, html {
    color: #373C40;
    font-family: Verdana,Arial, Helvetica, sans-serif;
    height: 100%;
    background-color: #f0f0f0;
    margin:10px;
}
body {
    font-size: 70%;
}
p {
    padding: 7px 0 7px 0;
    font-weight: 500;
    font-size: 10pt;
}
a {
    color: #656565;
    text-decoration:none;
}
a:hover{
    color: #abda0f;
    text-decoration: none;
}
h1 {
    font-weight:200;
    color: #888888;
    font-size:16pt;
    background: transparent url(../img/h1.png) no-repeat center left;
    padding-left:33px;
    margin:7px 5px 8px 8px;
}
h4 {
    padding:1px;
    color: #ACACAC;
    font-size:9pt;
    font-weight:100;
    text-transform:uppercase;
}
form.register{
    width:800px;
    margin: 20px auto 0px auto;
    height:530px;
    background-color:#fff;
    padding:5px;
    -moz-border-radius:20px;
    -webkit-border-radius:20px;
}
form p{
    font-size: 8pt;
    clear:both;
    margin: 0;
    color:gray;
    padding:4px;
}
form.register fieldset.row1
{
    width:770px;
    padding:5px;
    float:left;
    border-top:1px solid #F5F5F5;
    margin-bottom:15px;
}
form.register fieldset.row1 label{
    width:140px;
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
}
form.register fieldset.row2
{
    border-top:1px solid #F1F1F1;
    border-right:1px solid #F1F1F1;
    height:220px;
    padding:5px;
    float:left;
}
form.register fieldset.row3
{
    border-top:1px solid #F1F1F1;
    padding:5px;
    float:left;
    margin-bottom:15px;
    width:400px;
}
form.register fieldset.row4
{
    border-top:1px solid #F1F1F1;
    border-right:1px solid #F1F1F1;
    padding:5px;
    float:left;
    clear:both;
    width:500px;
}
form.register .infobox{
    float:right;
    margin-top:20px;
    border: 1px solid #F1F1F1;
    padding:5px;
    width:380px;
    height:98px;
    font-size:9px;
    background: #FDFEFA url(../img/bg_infobox.gif) repeat-x top left;
}
form.register legend
{
    color: #abda0f;
    padding:2px;
    margin-left: 14px;
    font-weight:bold;
    font-size: 14px;
    font-weight:100;
}
form.register label{
    color:#444;
    width:98px;
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
}
form.register label.optional{
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
    color: #A3A3A3;
}
form.register label.obinfo{
    float:right;
    padding:3px;
    font-style:italic;
}
form.register input{
    width: 140px;
    color: #505050;
    float: left;
    margin-right: 5px;
}
form.register input.long{
    width: 247px;
    color: #505050;
}
form.register input.short{
    width: 40px;
    color: #505050;
}
form.register input[type=radio]
{
    float:left;
    width:15px;
}
form.register label.gender{
    margin-top:-1px;
    margin-bottom:2px;
    width:34px;
    float:left;
    text-align:left;
    line-height:19px;
}
form.register input[type=text]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
form.register input[type=password]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
.button
{
    background: #abda0f url(../img/overlay.png) repeat-x;
    padding: 8px 10px 8px;
    color: #fff;
    text-decoration: none;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
    cursor: pointer;
    float:left;
    font-size:18px;
    margin:10px;
}
form.register input[type=text].year
{
    border: 1px solid #E1E1E1;
    height: 18px;
    width:30px;
}
form.register input[type=checkbox] {
    width:14px;
    margin-top:4px;
}
form.register select
{
    border: 1px solid #E1E1E1;
    width: 130px;
    float:left;
    margin-bottom:3px;
    color: #505050;
    margin-right:5px;
}
form.register select.date
{
    width: 40px;
}
input:focus, select:focus{
    background-color: #efffe0;
}
p.info{
    font-size:7pt;
    color: gray;
}
p.agreement{
    margin-left:15px;
}
p.agreement label{
    width:390px;
    text-align:left;
    margin-top:3px;
}

	
</style>
<script>
$(document).ready(function(){
    $("#btn1").click(function(){
        $("#same").append('<p id="demo"></p>');
    });
});
</script>
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
                  <li> <a href="admin.php">Home</a></li>
				  <li class="active"><a href="addbus.php">Register</a></li>
                  <li><a href="addbus.php">Add the bus</a></li>
				    <li><a href="admindel.php">Delete the bus</a></li>
					<li><a href="viewdetails.php">View the details</a></li>
					<li><a href="sample.php">Track the bus</a></li>
                  <li class="dropdown">
                    <div class="dropdown" style="float:right;">
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
        <form action="insert.php" class="register" method="post">
            <h1>Registration</h1>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>Email *
                    </label>
                    <input type="text" name="email" required />
                </p>
                <p>
                    <label>Password*
                    </label>
                    <input type="password" name="pwd" required />
                    <label>Repeat Password*
                    </label>
                    <input type="password"/>
                    <label class="obinfo">* obligatory fields
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label>Name *
                    </label>
                    <input type="text" name="name" class="long" required/>
                </p>
                <p>
                    <label>Phone *
                    </label>
                    <input name="phno" type="text" maxlength="10" required/>
                </p>
				 <p>
                    <label>class *
                    </label>
                    <select name="class" required>
					    <option value="0">--select--
                        </option>
                        <option value="I">I Year
                        </option>
                        <option value="II">II Year
                        </option>
                        <option value="III">III Year
                        </option>
                        <option value="IV">IV Year
                        </option>
					</select>	
                </p>
                <p>
                    <label>Department *
                    </label>
                    <select name="dept" required>
					    <option value="0">--select--
                        </option>
                        <option value="CSE">CSE
                        </option>
                        <option value="IT">IT
                        </option>
                        <option value="ECE">ECE
                        </option>
                        <option value="MECH">MECH
                        </option>
						<option value="CIVIL">CIVIL
                        </option>
					</select>	

                </p>
				<p>
                    <label>Gender *</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Male</label>
                    <input type="radio" value="radio"/>
                    <label class="gender">Female</label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Bus Information
                </legend>
                <p>
                    <label>Bus number *
                    </label>
                    <select name="busno" required>
					<option value="0">--select--
                        </option>
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                    </select>
                </p>
                <p>
                    <label>Bus root *
                    </label>
                    <select name="root" required>
								<option value="0">--Select--</option>
								<option value="Saravanampatti-vadavalli">Saravanampatti-vadavalli</option>
								<option value="Saravanampatti-Gandhipuram">Saravanampatti-Gandhipuram</option>
								<option value="Saravanampatti-Singanallur">Saravanampatti-Singanallur</option>
								<option value="Saravanampatti-Gandhipark">Saravanampatti-Gandhipark</option>
								<option value="Saravanampatti-Annur">Saravanampatti-Annur</option>
								<option value="Saravanampatti-Mettupalayam">Saravanampatti-Mettupalayam</option>
								<option value="Saravanampatti-Kovundampalayam">Saravanampatti-Kovundampalayam</option>
								<option value="Saravanampatti-Ukkadam">Saravanampatti-Ukkadam</option>
								<option value="Saravanampatti-Perur">Saravanampatti-Perur</option>
					</select>
                </p>
            </fieldset>
            <div><button name="btn1" class="button">Register &raquo;</button></div>
        </form>
    </div>
	</body>
	</html>
