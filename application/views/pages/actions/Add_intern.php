<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nerdware";

$conn = new mysqli($servername, $username, $password, $dbname);

  $this->load->view('header/header.php');
  $this->load->view('header/Verticalnav.php');
  $this->load->helper('url');
  $this->load->database();
  $date_today = date('Y/m/d');

  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $role = $_POST['role'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $s_date = $_POST['s_date'];
  $e_date = $_POST['e_date'];
  $sal = $_POST['salary'];

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['input']))
    {
  $sql = "INSERT INTO internee(f_name,l_name,role,email,phone,address,date_start,date_end,salary) VALUES('$f_name','$l_name','$role','$email','$phone','$address',STR_TO_DATE('$s_date', '%m/%d/%Y'),STR_TO_DATE('$e_date', '%m/%d/%Y'),'$sal')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>

<div class="container" style="left:80px;position:relative;">
  <h3 align="center"> Add Intern </h3>
<div class="col-xs-8" align="left">
  <div class="form-group">
<form class="form-group" action="" method="POST">
  Added Date:<br>
  <input class="form-control input-sm" type="text" name="added_date" value="<?php echo $date_today;?>" readonly>
  <br>
  First Name:<br>
  <input class="form-control input-sm" type="text" name="f_name" >
  <br>
  Last Name:<br>
  <input class="form-control input-sm" type="text" name="l_name" >
  <br>
  Role:<br>
  <input class="form-control input-sm" type="text" name="role" >
  <br>
  Email:<br>
  <input class="form-control input-sm" type="text" name="email" >
  <br>
  Phone:<br>
  <input class="form-control input-sm" type="text" name="phone" >
  <br>
  Address:<br>
  <input class="form-control input-sm" type="text" name="address" >
  <br>
  Start Date:<br>
  <input class="form-control input-sm" type="text" name="s_date" >
  <br>
  End Date:<br>
  <input class="form-control input-sm" type="text" name="e_date" >
  <br>
  Salary:<br>
  <input class="form-control input-sm" type="text" name="salary" >
  <br><br>
  <input type="submit" class="btn btn-primary" name="input" value="Submit" >
</div>
</div>
</div>
</form>
