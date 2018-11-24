<?php

$servername = "localhost";
$username = "root";
$password = "uzyqViLLlyS3";
$dbname = "nerdware";

$conn = new mysqli($servername, $username, $password, $dbname);

  $this->load->view('header/header.php');
  $this->load->view('header/Verticalnav.php');
  $this->load->helper('url');
  $this->load->database();
  $date_today = date('Y/m/d');

  $leadid = $_POST['lead'];
  $teamid = $_POST['teamid'];
  $memdid1 = $_POST['mem1'];
  $memdid2 = $_POST['mem2'];
  $memdid3 = $_POST['mem3'];
  $memdid4 = $_POST['mem4'];
  $memdid5 = $_POST['mem5'];
  $memdid6 = $_POST['mem6'];
  $memdid7 = $_POST['mem7'];
  $memdid8 = $_POST['mem8'];
  $projectid = $_POST['project'];
  $remarks = $_POST['remarks'];
  $priority = $_POST['priority'];


  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(isset($_POST['input']))
    {
  $sql = "INSERT INTO team VALUES('$teamid','$leadid','$memdid1','$memdid2','$memdid3','$memdid4','$memdid5','$memdid6','$memdid7','$memdid8','$projectid','$remarks','$priority')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "ERROR: " . $sql . "<br>" . $conn->error;
  }
mysqli_close($conn);
}

?>

<div class="container">
  <div class="form-group">
<form class="form-group" action="" method="POST">
  Added Date:<br>
  <input class="form-control input-sm" type="text" name="added_date" value="<?php echo $date_today;?>" readonly>
  <br>
  Team Lead:<br>
  <?php
                                $inv = mysqli_query($conn, "select * from members");
                                $inv2 = mysqli_query($conn, "select * from internee");
                               ?>
  <select class="form-control input-sm" name="lead" id="lead_id"  required/>
                     <option value="" selected disabled>----Select Team Leader----</option>
                                          <?php while($record1 = mysqli_fetch_array($inv)):?>
                     <option value="<?php echo $record1['f_name']." ".$record1['l_name']." (Member)";?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status']. "  MEMBER";?></option>
                     <?php endwhile;?>
                     <?php while($record2 = mysqli_fetch_array($inv2)):?>
                     <option value="<?php echo $record2['f_name']." ".$record2['l_name']." (Intern)";?>"><?php echo $record2['f_name']." ".$record2['l_name']."("."ID : ".$record2['id'].")"." (".$record2['role'].") ". "  INTERN";?></option>
                     <?php endwhile;?>
                   </select>
  <br>
  Team ID:<br>
  <input class="form-control input-sm" type="text" name="teamid" required>
  <br>
  Team Member 1:<br>
  <?php
                                $inv = mysqli_query($conn, "select * from members");
                                $inv2 = mysqli_query($conn, "select * from internee");
                               ?>
  <select class="form-control input-sm" name="mem1" id="memid1" />
                     <option value="" selected disabled>----Select Team Member----</option>
                     <option value="0">EMPTY</option>
                                          <?php while($record1 = mysqli_fetch_array($inv)):?>
                     <option value="<?php echo $record1['f_name']." ".$record1['l_name']." (Member)";?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status']. "  MEMBER";?></option>
                     <?php endwhile;?>
                     <?php while($record2 = mysqli_fetch_array($inv2)):?>
                     <option value="<?php echo $record2['f_name']." ".$record2['l_name']." (Intern)";?>"><?php echo $record2['f_name']." ".$record2['l_name']."("."ID : ".$record2['id'].")"." (".$record2['role'].") ". "  INTERN";?></option>
                     <?php endwhile;?>
                   </select>
  <br>
  Team Member 2:<br>
  <?php
  $inv = mysqli_query($conn, "select * from members");
  $inv2 = mysqli_query($conn, "select * from internee");
                               ?>
  <select class="form-control input-sm" name="mem2" id="memid2" />
  <option value="" selected disabled>----Select Team Member----</option>
  <option value="0">EMPTY</option>
                       <?php while($record1 = mysqli_fetch_array($inv)):?>
  <option value="<?php echo $record1['f_name']." ".$record1['l_name']." (Member)";?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status']. "  MEMBER";?></option>
  <?php endwhile;?>
  <?php while($record2 = mysqli_fetch_array($inv2)):?>
  <option value="<?php echo $record2['f_name']." ".$record2['l_name']." (Intern)";?>"><?php echo $record2['f_name']." ".$record2['l_name']."("."ID : ".$record2['id'].")"." (".$record2['role'].") ". "  INTERN";?></option>
  <?php endwhile;?>
                   </select>
  <br>
  Team Member 3:<br>
  <?php
  $inv = mysqli_query($conn, "select * from members");
  $inv2 = mysqli_query($conn, "select * from internee");
                               ?>
  <select class="form-control input-sm" name="mem3" id="memid3" />
  <option value="" selected disabled>----Select Team Member----</option>
  <option value="0">EMPTY</option>
                       <?php while($record1 = mysqli_fetch_array($inv)):?>
  <option value="<?php echo $record1['f_name']." ".$record1['l_name']." (Member)";?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status']. "  MEMBER";?></option>
  <?php endwhile;?>
  <?php while($record2 = mysqli_fetch_array($inv2)):?>
  <option value="<?php echo $record2['f_name']." ".$record2['l_name']." (Intern)";?>"><?php echo $record2['f_name']." ".$record2['l_name']."("."ID : ".$record2['id'].")"." (".$record2['role'].") ". "  INTERN";?></option>
  <?php endwhile;?>
                   </select>
  <br>
  Team Member 4:<br>
  <?php
  $inv = mysqli_query($conn, "select * from members");
  $inv2 = mysqli_query($conn, "select * from internee");
                               ?>
  <select class="form-control input-sm" name="mem4" id="memid4" />
  <option value="" selected disabled>----Select Team Member----</option>
  <option value="0">EMPTY</option>
                       <?php while($record1 = mysqli_fetch_array($inv)):?>
  <option value="<?php echo $record1['f_name']." ".$record1['l_name']." (Member)";?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status']. "  MEMBER";?></option>
  <?php endwhile;?>
  <?php while($record2 = mysqli_fetch_array($inv2)):?>
  <option value="<?php echo $record2['f_name']." ".$record2['l_name']." (Intern)";?>"><?php echo $record2['f_name']." ".$record2['l_name']."("."ID : ".$record2['id'].")"." (".$record2['role'].") ". "  INTERN";?></option>
  <?php endwhile;?>
                   </select>
  <br>
  Team Member 5:<br>
  <?php
  $inv = mysqli_query($conn, "select * from members");
  $inv2 = mysqli_query($conn, "select * from internee");
                               ?>
  <select class="form-control input-sm" name="mem5" id="memid5" />
  <option value="" selected disabled>----Select Team Member----</option>
  <option value="0">EMPTY</option>
                       <?php while($record1 = mysqli_fetch_array($inv)):?>
  <option value="<?php echo $record1['f_name']." ".$record1['l_name']." (Member)";?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status']. "  MEMBER";?></option>
  <?php endwhile;?>
  <?php while($record2 = mysqli_fetch_array($inv2)):?>
  <option value="<?php echo $record2['f_name']." ".$record2['l_name']." (Intern)";?>"><?php echo $record2['f_name']." ".$record2['l_name']."("."ID : ".$record2['id'].")"." (".$record2['role'].") ". "  INTERN";?></option>
  <?php endwhile;?>
                   </select>
  <br>
  Team Member 6:<br>
  <?php
  $inv = mysqli_query($conn, "select * from members");
  $inv2 = mysqli_query($conn, "select * from internee");
                               ?>
  <select class="form-control input-sm" name="mem6" id="memid6" />
  <option value="" selected disabled>----Select Team Member----</option>
  <option value="0">EMPTY</option>
                       <?php while($record1 = mysqli_fetch_array($inv)):?>
  <option value="<?php echo $record1['f_name']." ".$record1['l_name']." (Member)";?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status']. "  MEMBER";?></option>
  <?php endwhile;?>
  <?php while($record2 = mysqli_fetch_array($inv2)):?>
  <option value="<?php echo $record2['f_name']." ".$record2['l_name']." (Intern)";?>"><?php echo $record2['f_name']." ".$record2['l_name']."("."ID : ".$record2['id'].")"." (".$record2['role'].") ". "  INTERN";?></option>
  <?php endwhile;?>
                   </select>
  <br>
  Team Member 7:<br>
  <?php
  $inv = mysqli_query($conn, "select * from members");
  $inv2 = mysqli_query($conn, "select * from internee");
                               ?>
  <select class="form-control input-sm" name="mem7" id="memid7" />
  <option value="" selected disabled>----Select Team Member----</option>
  <option value="0">EMPTY</option>
                       <?php while($record1 = mysqli_fetch_array($inv)):?>
  <option value="<?php echo $record1['f_name']." ".$record1['l_name']." (Member)";?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status']. "  MEMBER";?></option>
  <?php endwhile;?>
  <?php while($record2 = mysqli_fetch_array($inv2)):?>
  <option value="<?php echo $record2['f_name']." ".$record2['l_name']." (Intern)";?>"><?php echo $record2['f_name']." ".$record2['l_name']."("."ID : ".$record2['id'].")"." (".$record2['role'].") ". "  INTERN";?></option>
  <?php endwhile;?>
                   </select>
  <br>
  Team Member 8:<br>
  <?php
  $inv = mysqli_query($conn, "select * from members");
  $inv2 = mysqli_query($conn, "select * from internee");
                               ?>
  <select class="form-control input-sm" name="mem8" id="memid8" />
  <option value="" selected disabled>----Select Team Member----</option>
  <option value="0">EMPTY</option>
                       <?php while($record1 = mysqli_fetch_array($inv)):?>
  <option value="<?php echo $record1['f_name']." ".$record1['l_name']." (Member)";?>"><?php echo $record1['f_name']." ".$record1['l_name']."("."ID : ".$record1['id'].")"." (".$record1['rank'].") ".$record1['m_status']. "  MEMBER";?></option>
  <?php endwhile;?>
  <?php while($record2 = mysqli_fetch_array($inv2)):?>
  <option value="<?php echo $record2['f_name']." ".$record2['l_name']." (Intern)";?>"><?php echo $record2['f_name']." ".$record2['l_name']."("."ID : ".$record2['id'].")"." (".$record2['role'].") ". "  INTERN";?></option>
  <?php endwhile;?>
                   </select>
  <br>
  Project Assigned:<br>
  <?php
                                $inv = mysqli_query($conn, "select * from project where p_status = 'in progress'");
                               ?>
  <select class="form-control input-sm" name="project" id="projectid" />
                     <option value="" selected disabled>----Select Project----</option>
                                          <?php while($record10 = mysqli_fetch_array($inv)):?>
                     <option value="<?php echo $record10['id'];?>"><?php echo $record10['title']." ("."ID : ".$record10['id'].")"." (Priority : ".$record10['priority'].") ".$record10['start_date']." TO ".$record1['deadline'];?></option>
                     <?php endwhile;?>
                   </select>
  <br>
  Remarks:<br>
  <input type="text" name="remarks" >
  <br>
  Priority:<br>
  <input type="text" name="priority" >
  <br><br>
  <input type="submit" class="btn btn-primary" name="input" value="Submit" >
</div>
</div>
</form>
