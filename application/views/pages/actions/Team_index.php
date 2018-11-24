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
    header('location:Editproject');
}

  ?>


<h3 align="center"> Team Index </h3>
                       <br>
<div class="container">
  <table align="center" class="table table-bordered table-striped table-condensed cf">
    <tr>
           <th>No.</th>
           <th>
                         Team leader
                       </th>
             <th>
                           Team Member 1
                       </th>
                       <th>
                                     Team Member 2
                                 </th>
                                 <th>
                                               Team Member 3
                                           </th>
                                           <th>
                                                         Team Member 4
                                                     </th>
                                                     <th>
                                                                   Team Member 5
                                                               </th>
                                                               <th>
                                                                             Team Member 6
                                                                         </th>
                                                                         <th>
                                                                                       Team Member 7
                                                                                   </th>
                                                                                   <th>
                                                                                                 Team Member 8
                                                                                             </th>
                                                                                             <th>Project </th>
                                                                                             <th>
                                                                                               Start Date
                                                                                             </th>

                                                                                             <th>
                                                                                               Deadline
                                                                                             </th>
                                                                                 <th>
                                                                                               Priority
                                                                                             </th>
         </tr>

         <?php
         $member = mysqli_query($conn,"select team.team_id, team.lead_id as name1,team.mem_id1 as name2,team.mem_id2 as name3,team.mem_id3 as name4,team.mem_id4 as name5,team.mem_id5 as name6,team.mem_id6 as name7,team.mem_id7 as name8,team.mem_id8 as name9,project.title as title,project.start_date as sdate,project.deadline as edate,project.priority as priority,team.project_id,project.id from team INNER JOIN project ON team.project_id = project.id");
         mysqli_query("SET NAMES 'utf8'");
 mysqli_query('SET CHARACTER SET utf8');
                   $value=0;
                   $numbers=1;
                   foreach($member as $pro){


                   ?>
                   <tr >
                           <td><font color="orange"><?php echo $numbers;?></font></td>
                        <td><?php echo $pro['name1']." ".$pro['lname'];?></td>
         <td><?php echo $pro['name2'];?></td>
                      <td><?php echo $pro['name3'];?></td>
                       <td><?php echo $pro['name4'];?></td>
                       <td><?php echo $pro['name5'];?></td>
                       <td><?php echo $pro['name6'];?></td>
                       <td><?php echo $pro['name7'];?></td>
                       <td><?php echo $pro['name8'];?></td>
                       <td><?php echo $pro['name9'];?></td>
                       <td><?php echo $pro['title'];?></td>
                       <td><?php echo date('m/d/Y',strtotime($pro['sdate']));?></td>
                       <td><?php echo date('m/d/Y',strtotime($pro['edate']));?></td>
                       <td><?php echo $pro['priority'];?></td>
                   </tr>

                        <?php $numbers++; $value++;} ?>
                    </table>
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
