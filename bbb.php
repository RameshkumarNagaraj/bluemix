
<html>
<head>
	<title>Chat box</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body background="1.png">
<style>
.{
	margin: 0;
	padding: 0;
	font-family: tahoma,sans-serif;
	box-sizing: border-box;
}
body{
	background-color: pink;
}
.chatbox{
	width: 500px;
	min-width: 390;
	height: 600px;
	background:cornsilk;
	padding: 25px;
	margin: 20px auto;
	box-shadow: 0 3px #ccc;
}
.chatlogs{
	padding: 10px;
	width: 100%;
	height: 450px;
	overflow-x: hidden;
	overflow-y: scroll;
}
.chatlogs::-webkit-scrollbar{
	width: 10px;
}
.chatlogs::-webkit-scrollbar-thumb{
	boder-radius: 5px;
	background: rgba(0,0,0,.1);
}
.chat{
	display: flex;
	flex-flow: row wrap;
	align-items: flex-start;
	margin-bottom: 10px;
}
.chat .user-photo{
	width: 60px;
	height: 60px;
	background: #ccc;
	border-radius: 50%;
	overflow: hidden;
}
.chat .user-photo img{
	width: 100%;
}
.chat .chat-message{
	width: 70%;
	padding: 15px;
	margin: 5px 10px 0;
	border-radius: 10px;
	color: #fff;
	font-size: 18px;
}
.self .chat-message{
	background: #1ddced;
	order: -1;
}
.bot .chat-message{
	background: green;
}
.chat-form{
	margin-top: 20px;
	display: flex;
	align-items: flex-start;
}

.chat-form textarea{
	background: #fbfbfb;
	width: 75%;
	height: 50px;
	border: 2px solid #eee;
	border-radius: 3px;
	resize: none;
	padding: 10px;
	font-size: 18px;
	color: red;
}

.chat-form textarea:focus{
	background: #fff;
}
.chat-form textarea::-webkit-scrollbar{
	width: 10px;
}
.chat-form textarea::-webkit-scrollbar-thumb{
	boder-radius: 5px;
	background: rgba(0,0,0,.1);
}
.chat-form button{
	background:  #1ddced;
	paddind: 5px 15px;
	font-size: 30px;
	color: #fff;
	border: none;
	margin: 0 10px;
	boder-radius: 3px;
	box-shadow:0 3px 0 #0eb2c1;
	cursor: poiner;
-webkit-transition: background .2s ease;
-moz-transition: background .2s ease;
-o-transition: background .2s ease;	
}
.chat-form button:hover{
	background: #13c8d9;
}
</style>
<script>		
			$(document).ready(function(){
				
    $("#btn1").click(function(){
		//alert();
		 //console.log("dgf");
		 
        $("#same").append('<div id="m" class="chat self"><div class="user-photo"><img src="views/paul.jpg"></div><p id="demo" class="chat-message">'+document.getElementById("txt").value+'</p></div>');
    /*});
	return false;
});
$(document).ready(function(){
    $("#btn1").click(function(){ 
        $("#same").append('<div id="n" class="chat bot"><div class="user-photo"><img src="views/paul.jpg"></div><p id="demo" class="chat-message"> <?php session_start();include 'watson.php';$watson = new watson_api(); $watson->set_credentials("25fe7b4f-d073-4379-ad82-e9d1d7679b82", "HP11arxVVe5H");$textLID = ""; $textLIDErr = ""; $data_arr = ""; if ($_SERVER["REQUEST_METHOD"] == "POST") { if (empty($_POST["textLID"])) {$textLIDErr = "Text is required (at least 3 words)"; } else { $textLID = test_input($_POST["textLID"]);$data_arr = $watson->send_watson_conv_request($textLID, "11c178e1-cc97-4481-9945-03518ebe5b3c");$watson->set_context('{context}'); $dataSet = array(); $dataSet = json_decode($data_arr,true); print_r($dataSet['output']['text']['0']);echo "<br><br>";}}function test_input($data) { $data = trim($data);$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}?></p></div>');
   
	});*/
	
	return false;
});

function init() {
$.ajax({
    dataType: "json",
    url: "C:\xampp\htdocs\watson\watson\index.php",
    success: function (data) {
        console.log(data);
        $("#same).html($(data).append(data));
    }
});

		</script>
		                 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="chatbox">
		<div id="same" class="chatlogs">
			<!--<div id="m" class="chat self">
				<div class="user-photo"><img src="views/paul.jpg"></div>
				<p id="demo" class="chat-message">hii</p>
			</div>
			<div class="chat bot">
				<div class="user-photo"><img src="views/paul.jpg"></div>
				<p class="chat-message"><a href="https:google.com">Your at....</a></p>
			</div>!-->
		</div>
		
		<div class="chat-form">
					<textarea id="txt" name="textLID"><?php echo $textLID;?></textarea>


					<button onclick="init()" type="submit" id="btn1" name="submit" value="Submit">Send</button>
		
		</div>
	</div>
</form>
	</body>
	</html>