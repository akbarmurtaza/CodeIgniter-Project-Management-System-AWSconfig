<?php

$servername = "localhost";
$username = "root";
$password = "i93evEC23xVm";
$dbname = "nerdware";

$conn = new mysqli($servername, $username, $password, $dbname);

  $this->load->view('header/header.php');
  $this->load->view('header/Verticalnav.php');

  if(isset($_POST['input']))
  {
    $var = $_POST['report'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:Editproject');
}

  ?>


<h3 align="center"> Project Index </h3>
<br>
<br>
<div class="container">
<form class="form-group" action="" method="POST">
                         <?php
                                                       $inv = mysqli_query($conn, "Select * from project ");
                                                      ?>
                                                      <select name="report" id="projectid" />
                     <option value="" selected disabled>----Select Project----</option>
                                          <?php while($record10 = mysqli_fetch_array($inv)):?>
                     <option value="<?php echo $record10['id'];?>"><?php echo $record10['title']." ("."ID : ".$record10['id'].")"." (Priority : ".$record10['priority'].") ".date('m/d/Y',strtotime($record10['start_date']))." TO ".date('m/d/Y',strtotime($record1['deadline']));?></option>
                     <?php endwhile;?>
                     <input type="submit" class="btn btn-primary" name="input" value="Edit" >
                   </select>
                       </form>

                       </div>
                       <br>
<div class="container">
  <table align="center" class="table table-bordered table-striped table-condensed cf">
     <thead class="thead-dark">
  <tr>
              <th>No.</th>
  						<th>Title</th>
  <th>
  						ID
  					</th>
  						<th>
  							Start Date
  						</th>

  						<th>
  							Deadline
  						</th>
  						<th>
  							Remarks
  						</th>
  <th>
  							Priority
  						</th>
  					</tr>
          </thead>

            <?php
            $project = mysqli_query($conn,"SELECT * from project where p_status='in progress'");
  					mysqli_query("SET NAMES 'utf8'");
  mysqli_query('SET CHARACTER SET utf8');
            					$value=0;
            					$numbers=1;
            					foreach($project as $pro){


            					?>
            					<tr >
            	                <td><font color="orange"><?php echo $numbers;?></font></td>
                     			 <td><font color="red"><?php echo $pro['title'];?></font></td>
            <td><?php echo $pro['id'];?></td>
            					 <td><b><font color="green"><?php echo date('m/d/Y',strtotime($pro['start_date']));?></font></b></td>
                         <td><b><font color="Orange"><?php echo date('m/d/Y',strtotime($pro['deadline']));?></font></b></td>
                          <td><?php echo $pro['remarks'];?></td>
                           <td><?php echo $pro['priority'];?></td>

            					</tr>

            		           <?php $numbers++; $value++;} ?>
  											 </table>
</div>
<br>
<br>
<br>
<br>
<h3 align="center"> Completed Project Index </h3>
<br>
<br>
<div class="container">
  <table align="center" class="table table-bordered">
     <thead class="thead-dark">
  <tr class="table-success">
              <th>No.</th>
  						<th>Title</th>
  <th>
  						ID
  					</th>
  						<th>
  							Start Date
  						</th>

  						<th>
  							Deadline
  						</th>
  						<th>
  							Remarks
  						</th>
  <th>
  							Priority
  						</th>
  					</tr>
          </thead>

            <?php
            $project = mysqli_query($conn,"SELECT * from project where p_status='completed'");
  					mysqli_query("SET NAMES 'utf8'");
  mysqli_query('SET CHARACTER SET utf8');
            					$value=0;
            					$numbers=1;
            					foreach($project as $pro){


            					?>
            					<tr >
            	                <td><font color="Green"><?php echo $numbers;?></font></td>
                     			 <td><font color="Green"><?php echo $pro['title'];?></font></td>
            <td><?php echo $pro['id'];?></td>
            					 <td><b><font color="green"><?php echo date('m/d/Y',strtotime($pro['start_date']));?></font></b></td>
                         <td><b><font color="Green"><?php echo date('m/d/Y',strtotime($pro['deadline']));?></font></b></td>
                          <td><?php echo $pro['remarks'];?></td>
                           <td><?php echo $pro['priority'];?></td>

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
