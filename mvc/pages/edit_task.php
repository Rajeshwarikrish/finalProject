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
      <h1><p class="text-center">EDIT TASK</p></h1>
      <hr>
<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?> " method="post">
  <div class="form-group">
    <label for="owneremail">Owner Email:</label>
    <input type="email" class="form-control" name="owneremail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value=<?php echo $data->owneremail; ?> required>
  </div>
    <div class="form-group">
    <label for="createddate">DateUpdated:</label>
    <input type="text" class="form-control" name="createddate" value=<?php echo $data->createddate; ?> readonly>
  </div>
  <div class="alert alert-info alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>INFO! </strong> The Date should be of format YYYY-MM-DD only
  </div>
    <div class="form-group">
    <label for="duedate">Due Date:</label>
    <input type="text" class="form-control" name="duedate" value=<?php echo $data->duedate; ?> required>
  </div>
    <div class="form-group">
    <label for="message">Message:</label>
    <input type="text" class="form-control" name="message" value=<?php echo $data->message; ?> required>
  </div>
    <div class="form-group">
    <label for="isdone">isdone:</label>
    <input type="number" min="0" max="1" class="form-control" name="isdone" value=<?php echo $data->isdone; ?> required>
  </div>
  <center>
    <button class="btn btn-primary " type="submit" class="btn btn-default">Edit</button>
  </center><br>
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