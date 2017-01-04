<html>
<head>
   <title>
     Gps Bot
   </title>
   <style>
   .down{
     width:300px;
   }
   .bottom{
     margin-top: 50px;
     margin-left: 50px;
   }
   .shadow{
     box-shadow: 1px 1px 3px 4px #777;
   }
   .down{
     box-shadow: 1px 1px 3px 4px #ccc;
   }
   .green-border{
     border-color:blue;
     border-style: solid;
     border-radius:50%;
     border-width:5px;
     width:400px;
     height:400px;
   }
   </style>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://ma15cdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse shadow">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text" href="#">Welcome to Bluemix GPS</a>
    </div>
  </div>
</nav>
<center>
<img src="IIF.jpg"class="green-border"></img>
</center>
  <form action="chat1.blade.php"class="bottom">
  <center>
    <label class="color1">
    <input type="text"placeholder="Enter your name"class="down"></input>
  <button type="text"class="btn-primary">Next</button>
</label>
</center>
</form>
</body>
</html>
