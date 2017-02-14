<html>
<head>
	<title>Chat box</title>
</head>
<body>
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
	background: #fff;
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
	<div class="chatbox">
		<div class="chatlogs">
			<div id="m" class="chat self">
				<div class="user-photo"><img src="views/paul.jpg"></div>
				<p class="chat-message">where am i?</p>
			</div>
			<div class="chat bot">
				<div class="user-photo"><img src="views/paul.jpg"></div>
				<p class="chat-message">Your at....</p>
			</div>
		</div>
				<div class="chat-form">
					<textarea id="txt"></textarea>
					<button onclick="getmsg()">Send</button>
		<script type="text/script">
			function getmsg()
			{
				var msg=document.getElementById("txt").value;
				document.getElementById("m").innerHTML =msg;
			}
		</script>
				</div>
	</div>
	</body>
	</html>