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
      <h1><p class="text-center">REGISTER</p></h1>
      <hr>
<form action="index.php?page=accounts&action=register" method="post">
  <div class="form-group">
    <label for="first name">First Name:</label>
    <input type="text" class="form-control" name="fname" pattern=".{1,}" required>
  </div>
    <div class="form-group">
    <label for="last name">Last Name:</label>
    <input type="text" class="form-control" name="lname" pattern=".{1,}" required>
  </div>
    <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" name="email" required>
  </div>
    <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" name="phone" required>
  </div>
    <div class="form-group">
    <label for="birthday">Birthday:</label>
    <input type="text" class="form-control" name="birthday" required>
  </div>
    <div class="form-group">
    <label for="gender">Gender:</label>
    <input type="text" class="form-control" name="gender" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" pattern=".{6,}" name="password" required>
  </div>
  <button class="btn btn-primary btn-block" type="submit" class="btn btn-default">Submit Form</button>
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