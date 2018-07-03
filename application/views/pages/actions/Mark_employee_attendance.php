<?php
date_default_timezone_set("Pakistan/Karachi");
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

  $id = $_POST['id'];
  $added_date = $_POST['added_date'];
  $time = $_POST['time'];

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['input']))
    {
  $sql = "INSERT INTO member_attendance VALUES('$id','$date_today','Yes','Present','$time')";
  if ($conn->query($sql) === TRUE) {
      echo "Attendance marked successfully";
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>

<div class="container" style="left:80px;position:relative;">
  <h3 align="center"> Mark Employee Attendance </h3>
  <br>
  <br>
<div class="col-xs-8" align="left">
  <div class="form-group">
  <form class="form-group" action="" method="POST">
  Current Date:<br>
  <input class="form-control input-sm" type="text" name="added_date" value="<?php echo date('m/d/Y',strtotime($date_today));?>" readonly>
  <br>
  Current Time:<br>
  <input class="form-control input-sm" type="text" name="time" value="<?php echo date("H:i:s", strtotime('+3 hours'));?>" readonly>
  <br>
  Intern :<br>
  <?php
                                $inv = mysqli_query($conn, "select * from members");
                               ?>
  <select class="form-control input-sm" name="id" id="lead_id"  required/>
                     <option value="" selected disabled>----Select Employee----</option>
                                          <?php while($record1 = mysqli_fetch_array($inv)):?>
                     <option value="<?php echo $record1['id'];?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status'];?></option>
                     <?php endwhile;?>
                   </select>
  <br><br>
  <input type="submit" class="btn btn-primary" name="input" value="Submit" >
  </form>
</div>
</div>
</div>
