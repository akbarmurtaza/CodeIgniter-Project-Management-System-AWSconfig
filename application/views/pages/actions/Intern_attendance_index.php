<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nerdware";

$conn = new mysqli($servername, $username, $password, $dbname);

  $this->load->view('header/header.php');
  $this->load->view('header/Verticalnav.php');

  if(isset($_POST['input']))
  {
    $var = $_POST['report'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:Editemployee');
}

if(isset($_POST['delete']))
  {
    $var = $_POST['report'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:Deleteemployee');
}
  ?>


<h3 align="center"> Internee Attendance Index </h3>
<br>
<div class="container">
 <br>
<table align="center" id= "myTable" class="table table-bordered table-striped table-condensed cf">
  <tr>
              <th>No.</th>
  						<th>Name</th>
  						<th>
  							ID
  						</th>
              <th>
  							Date
  						</th>
              <th>
  							Time
  						</th>
  					</tr>

            <?php
            $member = mysqli_query($conn,"SELECT internee.id,internee.id as id,internee.f_name as fname,internee.l_name as lname,interneeattendance.id,interneeattendance.day_date as datea,interneeattendance.time as timea from internee INNER JOIN interneeattendance ON internee.id = interneeattendance.id");
  					mysqli_query("SET NAMES 'utf8'");
  mysqli_query('SET CHARACTER SET utf8');
            					$value=0;
            					$numbers=1;
            					foreach($member as $pro){


            					?>
            					<tr >
            	                <td><font color="orange"><?php echo $numbers;?></font></td>
                     			 <td><?php echo $pro['fname']." ".$pro['lname'];?></td>
            <td><?php echo $pro['id'];?></td>
                         <td><?php echo $pro['datea'];?></td>
                          <td><?php echo $pro['timea'];?></td>
            					</tr>

            		           <?php $numbers++; $value++;} ?>
											 </table>
</div>


<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
