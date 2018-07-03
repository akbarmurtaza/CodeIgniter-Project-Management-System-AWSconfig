<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nerdware";

$conn = new mysqli($servername, $username, $password, $dbname);

$var = $this->session->tempdata('id');


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

  $doc = mysqli_query($conn,"SELECT * FROM internee WHERE id = '$var'");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['input']))
    {
  $sql = "UPDATE Internee set f_name = '$f_name',l_name = '$l_name',role = '$role',email = '$email',phone = '$phone',address = '$address',date_start = STR_TO_DATE('$s_date', '%m/%d/%Y'),date_end = STR_TO_DATE('$e_date', '%m/%d/%Y'),salary = '$sal' WHERE id = '$var'";
  if ($conn->query($sql) === TRUE) {
    header('location:Internindex');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>
<?php
while($record = mysqli_fetch_array($doc)):?>
<div class="container" style="left:80px;position:relative;">
  <h3 align="center"> Edit Intern </h3>
<div class="col-xs-8" align="left">
  <div class="form-group">
<form class="form-group" action="" method="POST">

  First Name:<br>
  <input class="form-control input-sm" type="text" name="f_name" value="<?php echo $record['f_name'];?>">
  <br>
  Last Name:<br>
  <input class="form-control input-sm" type="text" name="l_name" value = "<?php echo $record['l_name'];?>">
  <br>
  Role:<br>
  <input class="form-control input-sm" type="text" name="role" value = "<?php echo $record['role'];?>">
  <br>
  Email:<br>
  <input class="form-control input-sm" type="text" name="email" value = "<?php echo $record['email'];?>">
  <br>
  Phone:<br>
  <input class="form-control input-sm" type="text" name="phone" value = "<?php echo $record['phone'];?>">
  <br>
  Address:<br>
  <input class="form-control input-sm" type="text" name="address" value = "<?php echo $record['address'];?>">
  <br>
  Start Date:<br>
  <input class="form-control input-sm" type="text" name="s_date" value = "<?php echo date('m/d/Y',strtotime($record['date_start']));?>">
  <br>
  End Date:<br>
  <input class="form-control input-sm" type="text" name="e_date" value = "<?php echo date('m/d/Y',strtotime($record['date_end']));?>">
  <br>
  Salary:<br>
  <input class="form-control input-sm" type="text" name="salary" value = "<?php echo $record['salary'];?>">
  <?php endwhile;?>
  <br><br>
  <input type="submit" class="btn btn-primary" name="input" value="Submit" >
</div>
</div>
</div>
</form>
