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

  if(isset($_POST['input']))
    {
  $sql = "DELETE FROM internee where id = '$var'";
  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>alert('$message');</script>";
      header('location:Internindex');
  } else {
      echo "ERROR: " . "This Intern Account is referenced in a report slot. DELETE REPORT SLOT BEFOR DELETING INTERNEE";
  }
mysqli_close($conn);

}

  ?>


<div class="container">
  <H4 align="center"> Delete Intern </H4>
  <p align="center"><font color="red"> You are about to delete the following Intern. </font> </p>
 <br>
 <div class="container" style="left:80px;position:relative;">
 <div class="form-group" align="left">
 <form class="form-group" action="" method="POST">
<table align="left" id= "myTable" class="table-bordered table-striped table-condensed cf">
<tr>
            <th>No.</th>
						<th>First Name</th>
<th>
						Last Name
					</th>
						<th>
							ID
						</th>
<th>
						Role
					</th>


						<th>
							Email
						</th>
						<th>
							Phone
						</th>
<th>
							Address
						</th>
						<th>
						Start Date
						</th>
						<th>
						End Date
						</th>
            <th>
						Salary
						</th>
					</tr>

          <?php
          $intern = mysqli_query($conn,"SELECT * from internee where id = '$var'");
					mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET CHARACTER SET utf8');
          					$value=0;
          					$numbers=1;
          					foreach($intern as $pro){


          					?>
          					<tr >
          	                <td><font color="orange"><?php echo $numbers;?></font></td>
                   			 <td><?php echo $pro['f_name'];?></td>
          <td><?php echo $pro['l_name'];?></td>
          					 <td><b><font color="green"><?php echo $pro['id'];?></font></b></td>
                      <td><font color="red"><?php echo $pro['role'];?></font></td>
                       <td><?php echo $pro['email'];?></td>
                        <td><?php echo $pro['phone'];?></td>
                         <td><?php echo $pro['address'];?></td>
                          <td><?php echo date('m/d/Y',strtotime($pro['date_start']));?></td>
                           <td><?php echo date('m/d/Y',strtotime($pro['date_end']));?></td>
                            <td><?php echo $pro['salary'];?></td>




          					</tr>

          		           <?php $numbers++; $value++;} ?>
											 </table>
                       <br>
                       <input type="submit" class="btn btn-Danger" name="input" value="Delete!" >
  </form>
</div>
</div>
</div>
