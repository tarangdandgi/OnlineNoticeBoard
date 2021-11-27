<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");

  if(isset($_POST['register'])){
    $query = "insert into users values(null,'$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[password]',$_POST[class])";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script>alert('Registration successful...You may now login.');
      window.location.href = 'index.php';
      </script>";
    }
    else{
      echo "<script>alert('Registration failed...try again');
      window.location.href = 'register.php';
      </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Notice Board</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

  <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>

    <!-- Login from code starts here -->
    <section id="login_form">
    <div class="col-md-4">
      </div>
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Registration form</h4></center>
          <form action="" method="post">
            <div class="form-group">
              <lable>First Name:</label>
                <input class="form-control" type="text" name="fname" placeholder="Enter your First Name">
            </div>
            <div class="form-group">
              <lable>Last Name:</label>
                <input class="form-control" type="text" name="lname" placeholder="Enter your Last Name">
            </div>
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter your Password">
            </div>
            <div class="form-group">
              <lable>Select Your Class:</label>
                <select class="form-control" name="class">
                  <option>-Select-</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <a href="index.php">Click here to login</a>
        </div>
      </div>
    </section>
  </body>
</html>
