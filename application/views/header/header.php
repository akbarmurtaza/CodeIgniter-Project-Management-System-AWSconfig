<?PHP
$this->load->helper('url');
$this->load->helper('html');
$this->load->library('image_lib');


$servername = "localhost";
$username = "root";
$password = "i93evEC23xVm";
$dbname = "nerdware";

$conn = new mysqli($servername, $username, $password, $dbname);



 ?>

 <html>


 <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">


   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
 <style>
 .navbar-inverse { background-color: #222222}
.navbar-inverse .navbar-nav>.active>a:hover,.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { background-color: #FF1C14}
.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { background-color: #080808}
.dropdown-menu { background-color: #FF3019}
.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-color: #428BCA}
.navbar-inverse { background-image: none; }
.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { background-image: none; }
.navbar-inverse { border-color: #080808}
.navbar-inverse .navbar-brand { color: #999999}
.navbar-inverse .navbar-brand:hover { color: #FFFFFF}
.navbar-inverse .navbar-nav>li>a { color: #999999}
.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus { color: #FFFFFF}
.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus { color: #FFFFFF}
.navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus { color: #FFFFFF}
.dropdown-menu>li>a { color: #333333}
.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus { color: #FFFFFF}
.navbar-inverse .navbar-nav>.dropdown>a .caret { border-top-color: #999999}
.navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-top-color: #FFFFFF}
.navbar-inverse .navbar-nav>.dropdown>a .caret { border-bottom-color: #999999}
.navbar-inverse .navbar-nav>.dropdown>a:hover .caret { border-bottom-color: #FFFFFF}



 </style>
 </head>
 <header class="navbar navbar-inverse navbar-static-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo base_url();?>index.php/Dashboard" class="navbar-brand"><font color="#68a2ff"><span class="glyphicon glyphicon-globe"></span></font>  NerdwareTech CMS</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
				<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Accounts <b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo base_url();?>index.php/Accountpanel">Internees</a></li>
	          <li><a href="<?php echo base_url();?>index.php/Accountpanel">Employees</a></li>
	        </ul>
	      </li>
        <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Attendance <b class="caret"></b></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo base_url();?>index.php/Internattendance">Internee Attendance</a></li>
	          <li><a href="<?php echo base_url();?>index.php/Employeeattendance">Employee Attendance</a></li>
	        </ul>
          <li>
          <a href="<?php echo base_url();?>index.php/Projectspanel">Projects</a>
        </li>
        <li>
        <a href="<?php echo base_url();?>index.php/Teampanel">Teams</a>
      </li>
	      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>index.php/Actions/Logout">Logout</a></li>
          <li><a href="<?php echo base_url();?>index.php/Settings">Settings</a></li>
        </ul>
      </li>
    </ul>
    </nav>
  </div>
</header>
 </html>
