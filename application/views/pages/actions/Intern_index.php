<?php

$servername = "localhost";
$username = "root";
$password = "uzyqViLLlyS3";
$dbname = "nerdware";

$conn = new mysqli($servername, $username, $password, $dbname);

  $this->load->view('header/header.php');
  $this->load->view('header/Verticalnav.php');

  if(isset($_POST['input']))
  {
    $var = $_POST['report'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:Editintern');
}

if(isset($_POST['delete']))
  {
    $var = $_POST['report'];
    $this->session->set_tempdata('id', $var, 300);
    header('location:Deleteintern');
}
  ?>


<h3 align="center"> Intern Index </h3>
<br>
<div class="container">
<form class="form-group" action="" method="POST">
                         <?php
                                                       $inv = mysqli_query($conn, "Select * from internee ");
                                                      ?>
                                                      <select  name="report" id="owner_id"  tabindex="-1" aria-hidden="true" required/>
                                                                          <option value="" selected disabled>----Select Account to edit----</option>
                                                                                              <?php while($record2 = mysqli_fetch_array($inv)):?>
                                                                          <option value="<?php echo $record2['id'];?>">  <?php echo "ID: ".$record2['id']."  Name : ".$record2['f_name']." ".$record2['last_name'];?></option>
                                                                          <?php endwhile;?>
                                                                          <input type="submit" class="btn btn-primary" name="input" value="Edit" >
                                                                          <input type="submit" class="btn btn-Danger" name="delete" value="Delete" >
                                                                       </select>
                       </form>

                       </div>
<div class="container">
  <H4> Intern Search </H4>
 <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Enter First Name">
 <br>
<table align="center" id= "myTable" class="table-bordered table-striped table-condensed cf">
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
          $intern = mysqli_query($conn,"SELECT * from internee");
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
