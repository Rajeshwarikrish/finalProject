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
      background: #C70039;
      color: white;
    
    }
    .row.content {height: 700px}
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    footer {
      background-color: #C70039;
      color: white;
      padding: 15px;
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
    <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?page=accounts&action=edit&id=<?php echo $_SESSION['userID']; ?>"><span class="glyphicon glyphicon-user"></span> Update Profile</a></li>
      <li><a href="index.php?page=accounts&action=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left">
    <br>
    <a href="index.php?page=tasks&action=create" class="btn btn-info btn-sm">
    <span class="glyphicon glyphicon-plus"></span> Create task 
    </a>
     <hr>
     <?php
      if($data==NULL) {
        echo '<center>No tasks available</center><br>';
      }else {
      print utility\htmlTable::genarateTableFromMultiArray($data);
      }
     ?>
     <hr>
    </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
  <p>Web Systems Development Final Project</p>
</footer>
</body>
</html>