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
     
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-3 sidenav">

    </div>
    <div class="col-sm-6 text-left"> 
      <h1><p class="text-center">CREATE TASK</p></h1>
      <hr>
<?php date_default_timezone_set('America/New_York'); ?>
<form action="index.php?page=tasks&action=save" method="post">
  <div class="form-group">
    <label for="owneremail">Owner Email:</label>
    <input type="email" class="form-control" name="owneremail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value=<?php session_start(); echo $_SESSION["email"] ?>>
  </div>
    <div class="form-group">
    <label for="createddate">Created Date:</label>
    <input type="text" class="form-control" name="createddate" value=<?php echo date('Y-m-d')?> readonly>
  </div>
  <div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>INFO! </strong> The Date should be of format YYYY-MM-DD only
  </div>
    <div class="form-group">
    <label for="duedate">Due Date:</label>
    <input type="text" class="form-control" name="duedate" required>
  </div>
    <div class="form-group">
    <label for="message">Message:</label>
    <input type="text" class="form-control" name="message" required>
  </div>
    <div class="form-group">
    <label for="isdone">isdone:</label>
    <input type="number" min="0" max="1" class="form-control" name="isdone" required>
  </div>
  <center>
    <button class="btn btn-primary" type="submit" >Create Task</button>
  </center>
</form>
       
    </div>
    <div class="col-sm-3 sidenav">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Web Systems Development Final Project</p>
</footer>

</body>
</html>