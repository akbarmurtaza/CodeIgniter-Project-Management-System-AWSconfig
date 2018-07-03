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
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $rank = $_POST['rank'];
  $status = $_POST['status'];

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['input']))
    {
  $sql = "INSERT INTO members(f_name,l_name,email,phone,address,rank,m_status) VALUES('$f_name','$l_name','$email','$phone','$address','$rank','$status')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>

<div class="container" style="left:80px;position:relative;">
  <h3 align="center"> Add Employee </h3>
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
  Email:<br>
  <input class="form-control input-sm" type="text" name="email" >
  <br>
  Phone:<br>
  <input class="form-control input-sm" type="text" name="phone" >
  <br>
  Address:<br>
  <input class="form-control input-sm" type="text" name="address" >
  <br>
  Rank:<br>
  <?php
                                $inv = mysqli_query($conn, "select * from meta");
                               ?>
  <select class="form-control input-sm" name="rank" id="lead_id"  required/>
                     <option value="" selected disabled>----Select Role/Rank----</option>
                                          <?php while($record1 = mysqli_fetch_array($inv)):?>
                     <option value="<?php echo $record1['role'];?>"><?php echo $record1['role'];?></option>
                     <?php endwhile;?>
                   </select>
  <br>
  Status:<br>
  <?php
                                $inv1 = mysqli_query($conn, "select * from meta_status");
                               ?>
  <select class="form-control input-sm" name="status" id="status_id"  required/>
                     <option value="" selected disabled>----Select Status----</option>
                                          <?php while($record2 = mysqli_fetch_array($inv1)):?>
                     <option value="<?php echo $record2['e_status'];?>"><?php echo $record2['e_status'];?></option>
                     <?php endwhile;?>
                   </select>
  <br><br>
  <input type="submit" class="btn btn-primary" name="input" value="Submit" >
</div>
</div>
</div>
</form>
