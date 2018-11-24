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

  $title = $_POST['title'];
  $sdate = $_POST['sdate'];
  $deadline = $_POST['edate'];
  $remarks = $_POST['remarks'];
  $priority = $_POST['priority'];
  $status = $_POST['status'];

  $doc = mysqli_query($conn,"SELECT * FROM project WHERE id = '$var'");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['input']))
    {
  $sql = "UPDATE project set title = '$title',start_date = STR_TO_DATE('$sdate', '%m/%d/%Y'),deadline = STR_TO_DATE('$deadline', '%m/%d/%Y'),remarks = '$remarks',priority = '$priority',p_status = '$status' WHERE id = '$var'";
  if ($conn->query($sql) === TRUE) {
    header('location:Projectindex');
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>
<?php
while($record = mysqli_fetch_array($doc)):?>
<div class="container" style="left:80px;position:relative;">
  <h3 align="center"> Edit Project </h3>
<div class="col-xs-8" align="left">
  <div class="form-group">
<form class="form-group" action="" method="POST">

  Title:<br>
  <input class="form-control input-sm" type="text" name="title" value="<?php echo $record['title'];?>">
  <br>
  Start Date:<br>
  <input class="form-control input-sm" type="text" name="sdate" value="<?php echo date('m/d/Y',strtotime($record['start_date']));?>">
  <br>
  Deadline:<br>
  <input class="form-control input-sm" type="text" name="edate" value="<?php echo date('m/d/Y',strtotime($record['deadline']));?>">
  <br>
  Remarks:<br>
  <input  class="form-control input-sm" type="text" name="remarks" value="<?php echo $record['remarks'];?>">
  <br>
  Priority:<br>
  <input class="form-control input-sm" type="text" name="priority" value="<?php echo $record['priority'];?>">
  <br>
  Status:<br>
  <select class="form-control input-sm" name="status" id="lead_id"  required/>
                     <option value="" selected disabled>----Select Status----</option>
                     <option value="In Progress">In Progress</option>
                     <option value="Completed">Completed</option>
                   </select>
  <br><br>
  <?php endwhile;?>
  <input type="submit" class="btn btn-primary" name="input" value="Submit" >
</div>
</div>
</div>
</form>
