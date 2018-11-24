<?php

$servername = "localhost";
$username = "root";
$password = "i93evEC23xVm";
$dbname = "nerdware";

$conn = new mysqli($servername, $username, $password, $dbname);

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

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['input']))
    {
  $sql = "INSERT INTO project(title,start_date,deadline,remarks,priority,p_status)VALUES('$title',STR_TO_DATE('$sdate', '%m/%d/%Y'),STR_TO_DATE('$deadline', '%m/%d/%Y'),'$remarks','$priority','$status')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>

<div class="container" style="left:80px;position:relative;">
  <h3 align="center"> Add Project </h3>
<div class="col-xs-8" align="left">
  <div class="form-group">
<form class="form-group" action="" method="POST">
  Added Date:<br>
  <input class="form-control input-sm" type="text" name="added_date" value="<?php echo $date_today;?>" readonly>
  <br>
  Title:<br>
  <input class="form-control input-sm" type="text" name="title" >
  <br>
  Start Date:<br>
  <input class="form-control input-sm" type="text" name="sdate" >
  <br>
  Deadline:<br>
  <input class="form-control input-sm" type="text" name="edate" >
  <br>
  Remarks:<br>
  <input  class="form-control input-sm" type="text" name="remarks" >
  <br>
  Priority:<br>
  <input class="form-control input-sm" type="text" name="priority" >
  <br>
  Status:<br>
  <select class="form-control input-sm" name="status" id="lead_id"  required/>
                     <option value="" selected disabled>----Select Status----</option>
                     <option value="In Progress">In Progress</option>
                     <option value="Completed">Completed</option>
                   </select>
  <br><br>
  <input type="submit" class="btn btn-primary" name="input" value="Submit" >
</div>
</div>
</div>
</form>
