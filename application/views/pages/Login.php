<?php
if(isset($_POST['input']))
  {
    $_Username = $_POST['username'];
    $_password = $_POST['password'];

    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nerdware";


      $conn = new mysqli($servername, $username, $password, $dbname);

      $result = mysqli_query($conn,"SELECT * from admin where username = '$_Username' AND password = '$_password'");
      $count = mysqli_num_rows($result);

if ($count > 0)
{
  $newdata = array(
    'username' => $_Username,
'password' => $_password,
             'logged_in' => TRUE
         );

$this->session->set_userdata($newdata);

header("location: Dashboard");

}
else
{
        echo ' Invalid Login Details Provided';
}
}

 ?>


<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>

<style>
#main{
width:960px;
margin:50px auto;
font-family:raleway;
}

span{
color:red;
}

h2{
background-color: #f8f2ff;
text-align:center;
border-radius: 10px 10px 0 0;
margin: -10px -40px;
padding: 30px;
}

#login{

width:300px;
float: left;
border-radius: 10px;
font-family:raleway;
border: 2px solid #ccc;
padding: 10px 40px 25px;
margin-top: 70px;
}

input[type=text],input[type=password], input[type=email]{
width:99.5%;
padding: 10px;
margin-top: 8px;
border: 1px solid #ccc;
background-color:#c4aae2;
padding-left: 5px;
font-size: 16px;
font-family:raleway;
}

input[type=submit]{
width: 100%;
background-color:#9800ff;
color: white;
border: 2px solid #9800ff;
padding: 10px;
font-size:20px;
cursor:pointer;
border-radius: 5px;
margin-bottom: 15px;
}

#profile{
padding:50px;
border:1px dashed grey;
font-size:20px;
background-color:#DCE6F7;
}

#logout{
float:right;
padding:5px;
border:dashed 1px gray;
margin-top: -168px;
}

a{
text-decoration:none;
color: cornflowerblue;
}

i{
color: cornflowerblue;
}

.error_msg{
color:red;
font-size: 16px;
}

.message{
position: absolute;
font-weight: bold;
font-size: 28px;
color: #6495ED;
left: 262px;
width: 500px;
text-align: center;
}
</style>


</head>
<body>
<div id="main">
<div id="login">
<h2>Admin Login</h2>

<form class="form-group" action="" method="POST">
<label>UserName :</label>
<input type="text" name="username" placeholder="username"/><br /><br />
<label>Password :</label>
<input type="password" name="password" placeholder="**********"/><br/><br />
<input type="submit" value=" Login " name="input"/><br />
</form>
</div>
</div>
</body>
</html>
