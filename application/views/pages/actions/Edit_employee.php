<?php

$servername = "localhost";
$username = "root";
$password = "i93evEC23xVm";
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
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $rank = $_POST['rank'];
  $status = $_POST['status'];

  $doc = mysqli_query($conn,"SELECT * FROM members WHERE id = '$var'");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['input']))
    {
  $sql = "UPDATE members set f_name = '$f_name',l_name = '$l_name',email = '$email',phone = '$phone',address = '$address',rank = '$rank', m_status = '$status' WHERE id = '$var'";
  if ($conn->query($sql) === TRUE) {
    header('location:Employeeindex');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>
<?php
while($record = mysqli_fetch_array($doc)):?>
<div class="container" style="left:80px;position:relative;">
  <h3 align="center"> Edit Employee </h3>
<div class="col-xs-8" align="left">
  <div class="form-group">
<form class="form-group" action="" method="POST">

  First Name:<br>
  <input class="form-control input-sm" type="text" name="f_name" value="<?php echo $record['f_name'];?>">
  <br>
  Last Name:<br>
  <input class="form-control input-sm" type="text" name="l_name" value = "<?php echo $record['l_name'];?>">
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
  Rank:<br>
  <input class="form-control input-sm" type="text" name="rank" value = "<?php echo $record['rank'];?>">
  <br>
  Status:<br>
  <input class="form-control input-sm" type="text" name="status" value = "<?php echo $record['m_status'];?>">
  <br>
  <?php endwhile;?>
  <br><br>
  <input type="submit" class="btn btn-primary" name="input" value="Submit" >
</div>
</div>
</div>
</form>
