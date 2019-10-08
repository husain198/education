<?php $this->load->view('admin/common/header'); ?>
<div class="right_col" role="main">
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>User List</h2>                        
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                       
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>First name</th>
                              <th>Last name</th>
							  <th>E-mail</th>
                              <th>Position</th>
                              <th>Office</th>
                              <th>Age</th>
                              <th>Start date</th>
                              <th>Salary</th>
                              <th>Extn.</th>
                              
                            </tr>
                          </thead>
                          <tbody>
							<?php
								if(!empty($allusers))
								{
									
									foreach ($allusers as $row) 
									{
										
								?>
						  
                            <tr>
                              <td><?php echo $row->first_name; ?></td>
                              <td><?php echo $row->last_name; ?></td>
                              <td><?php echo $row->user_email ; ?></td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                              <td>5421</td>
                              <td>t.nixonnet</td>
                            </tr>
								<?php } }else{ ?>
								
									 <tr>
									  <td colspan="8"> <center>No Record Found !!! </center></td>
									</tr>
								<?php } ?>
							
                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>                 
                </div>
              </div>
              <!-- footer content -->
              <footer>
                <div class="copyright-info">
                  <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                  </p>
                </div>
                <div class="clearfix"></div>
              </footer>
              <!-- /footer content -->

            </div>
	 <?php $this->load->view('admin/common/footer'); ?>