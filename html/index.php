
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<link href="../css/style.css" rel="stylesheet" type="text/css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid ">
    <div class="row top-bar" style="height: 34px!important;">
        <div class="col-md-6 offset-6">
            <p class="pull-right" style="color:white">Contect Us-<span class="glyphicon glyphicon-phone">
             <!--Todo Need to change mobile number in future-->
        </span>+91-9742844504 </p>

        </div>
    </div>
<div class="row">


</div>
    <div class="row">
        <div class="col-md-4">
            <img src="../images/mukesh.png" >
        </div>
        <div class="col-md-8 my-menu">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#muku">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!--<nav class="navbar navbar-inverse">-->
                    <div class="collapse navbar-collapse" id="muku">
                        <ul class="mynav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Acknowledgement</a></li>
                            <li><a href="#">Contect us</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div>
                    <!--</nav>-->
                </div>
            </nav>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <img src="../images/background.jpg" style="height: 500px; width: 100%; margin-bottom: 500px;">
        </div>

    </div>
    <div class="row">
        <div class="col-md-12 heading">
            <h2 style="margin-top: 510px">Welcome to Mukesh Coder</h2>

</div>
    </div>
      <div class="row">
        <div class="col-md-6">
        <form action="connection.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Mobile no</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="form-group">
            <button class="btn" type="submit" name="submit" >Save</button>
        </div>
        </form>
        </div>
          <div class="col-md-6">
              <table class="table table-striped">
                  <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile No.</th>
                      <th>Password</th>
                  </tr>
              <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                  }
                  else{

      echo "connection created";

                  }
$sql = 'SELECT * FROM base';
$query = mysqli_query($conn, $sql);
                   while ($row = mysqli_fetch_array($query)) {
                           $id = $row['id'];
                           echo '<tr>
                   					<td>' . $no . '</td>
                   					<td>' . $row['name'] . '</td>

                   					<td>' . $row['email'] . '</td>


                   					<td><a href="delete.php?id='.$row['id'].'"><button type="button" class="btn btn-primary" >Delete</button></a></td>
                   					<td><a href="update.php?id='.$row['id'].'"><button type="button" class="btn btn-primary" >Update</button></a></td>


                   				</tr>';

                  $conn->close();
              ?>
              </table>
          </div>
      </div>

</div>
</body>
</html>