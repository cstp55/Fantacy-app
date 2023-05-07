<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Password
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Password</a></li>
        <li class="breadcrumb-item active">Create</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          
     <div class="box box-default">
   
        <!-- /.box-header -->
        <div class="box-body wizard-content">
        <h2 style="margin-top:0px">Password Update</h2>
        <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
        <form action="<?php echo base_url('password/update'); ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Old Password <?php echo form_error('old_password') ?></label>
            <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password" />
        </div>
        <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
        </div>
        <div class="form-group">
            <label for="varchar">Confirm Password <?php echo form_error('conf_password') ?></label>
            <input type="password" class="form-control" name="conf_password" id="conf_password" placeholder="Confirm Password" />
        </div>
	   
	    <button type="submit" class="btn btn-primary">Update</button> 
	    <a href="<?php echo site_url('password') ?>" class="btn btn-default">Cancel</a>
	</form>
     </div>
      <!-- /.box -->
      </section>
      </div>