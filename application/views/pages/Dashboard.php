<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');
?>

<div class="container-fluid" >
<div class="col-xs-12" align="center">
      <H1> WELCOME ADMIN </H1>
				<br>
			<H3> USE THE NAVIGATION FOR ACTIONS OR CONSULT THE MANUAL </H3>
</div>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

</body>
