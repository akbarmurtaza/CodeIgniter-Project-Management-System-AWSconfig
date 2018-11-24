<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');
?>


<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "i93evEC23xVm";
$dbname = "nerdware";

  $conn = new mysqli($servername, $username, $password, $dbname);

  $message = "Password Changed";
  $error = "Old Password Does not Match Current Password.";

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
	$query1 = mysqli_query($conn, "SET NAMES utf8");

  $old = $_POST['old'];
  $new = $_POST['new'];

    if(isset($_POST['input']))
    {
  $sql = "SELECT password from admin where password = '$old'";
  $pass = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($pass);
  if ($count > 0) {
      $upd = mysqli_query($conn,"UPDATE admin set password = '$new' where id =1");
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:Admin_Dashboard');
  } else {
      echo "<script type='text/javascript'>alert('$error');</script>";
  }
mysqli_close($conn);
}
?>


<H3 align="center"> Admin Settings </H3>
<br>


<div class="container" style="left:80px;position:relative;">
<div class="col-xs-8" align="left">
  <div class="form-group" align="left">
<form class="form-group" action="" method="POST">
  <label> Change Password </label>
  <br>
  Old Password:<br>
  <input class="form-control input-sm" type="text" name="old" placeholder="Enter Old Password" required />
  <br>
  New Password:<br>
  <input class="form-control input-sm" type="text" name="new" placeholder="Enter Old Password" required />
  <br>
  <input type="submit" class="btn btn-primary" name="input" value="Update Password" >
  </form>
</div>
</div>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
