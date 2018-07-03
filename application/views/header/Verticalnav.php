<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>NerdwareTech CMS</title>

	<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">  &times;</a>
  <a href="<?php echo base_url();?>index.php/Accountpanel"><font color="#d62a7a"><span class="glyphicon glyphicon-user">  </span></font> Manage Accounts</a>
  <a href="<?php echo base_url();?>index.php/Internattendance"><font color="#d62a7a"><span class="glyphicon glyphicon-signal">  </span></font> Intern Attendance</a>
	<a href="<?php echo base_url();?>index.php/Employeeattendance"><font color="#d62a7a"><span class="glyphicon glyphicon-inbox">  </span></font> Member Attendance</a>
  <a href="<?php echo base_url();?>index.php/Projectspanel"><font color="#d62a7a"><span class="glyphicon glyphicon-equalizer">  </span></font>  Projects</a>
  <a href="<?php echo base_url();?>index.php/Teampanel"><font color="#d62a7a"><span class="glyphicon glyphicon-star">  </span></font>  Teams</a>
	<a href="javascript:void(0)" onclick="closeNav()"> <span class="glyphicon glyphicon-remove"></span> </a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
