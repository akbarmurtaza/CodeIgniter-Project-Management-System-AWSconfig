<?php
$this->load->view('header/header.php');
$this->load->view('header/Verticalnav.php');
$this->load->helper('url');
?>
<html>
<style>
a {
  color: #EBEDEF;
  background-color: transparent;
  font-weight: normal;
}
</style>
<body>
<div class="container" >

  <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-left">
                                    <div class="hugess"><font size="6" color="#d62a7a"><span class="glyphicon glyphicon-globe">  </span></font></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url();?>index.php/Teamindex">
                            <div class="panel-footer">
                                <span class="pull-left"><font size="3" color="#d62a7a">Team Index</font></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                                  <div class="panel panel-primary">
                                      <div class="panel-heading">
                                          <div class="row">
                                              <div class="col-xs-3">
                                                  <i class="fa fa-comments fa-5x"></i>
                                              </div>
                                              <div class="col-xs-9 text-left">
                                                  <div class="hugess"><font size="6" color="orange"><span class="glyphicon glyphicon-plus">  </span></font></div>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="<?php echo base_url();?>index.php/Addteam">
                                          <div class="panel-footer">
                                              <span class="pull-left"><font size="3" color="#d62a7a">+ Add Team</font></span>
                                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                              <div class="clearfix"></div>
                                          </div>
                                      </a>
                                  </div>
                              </div>


  <br>
</div>
</body>
</html>
