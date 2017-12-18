<!DOCTYPE html>
<html lang="en">
<head>
  <title>Todo tasks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style> 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .row.content {height: 550px}
    .sidenav {
      padding-top: 20px;
      background-color: #F1F1F1 ;
      height: 100%;
    }
    footer {
      background-color:#C70039;
      color: white;
      padding: 15px;
    }
    .navbar
    {  background: #C70039;
       color: white;
    }
     .btn
  {  background: #C70039  ;
     color:white;
  }  
 
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TODO tasks</a>
    </div>
    
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    
    </div>
    <div class="col-sm-8 text-left"> 
      <h1><p class="text-center"><b><font color ="#0d0d0d">LOGIN</font></b></p></h1>
      <hr>
<form action="index.php?page=accounts&action=login" method="POST">
  <div class="form-group">
    <label for="email"><font color ="#0d0d0d">Email address:</font></label>
    <input type="email" class="form-control" name="uname" required>
  </div>
  <div class="form-group">
    <label for="pwd"><font color ="#0d0d0d">Password:</font></label>
    <input type="password" class="form-control" name="psw" required>
  </div>
  <center>
  <button type="submit" class="btn btn-primary"><b>SUBMIT</b></button>
  </center>
</form>
       <hr>
       <h2><p class="text-center">  <font color ="#0d0d0d"> Not registered yet? </font><br><br>
       <a class="btn btn-primary" href="index.php?page=accounts&action=register">
       <b>REGISTER</b></a></p></h2>
    </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Web Systems Development Project</p>
</footer>

</body>
</html>