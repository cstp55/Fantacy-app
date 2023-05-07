<div class="content-wrapper" style="min-height: 1147px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $match_record->title; ?> 
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
     
      <!-- /.row -->
      <!--// remove row-->
        <div class="row">
          <div class="col-lg-12">
          <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                      <thead>
                          <tr>
                            <th>No</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile No</th>
                              <th>View Team</th>
                          </tr>
                      <tbody>
                          <?php 
                          $i = 1;
                          foreach ($total_teams as $team) {
                          $user = $this->user_model->get_by_id($team->user_id);
                           ?>
                           <tr>
                            <td><?php echo $i++;?></td>

                            <td><?php echo $user->name;?></td>
                            <td><?php echo $user->email;?></td>
                            <td><?php echo $user->mobile;?></td>
                            <td><a href="<?php echo base_url('user_team/team/'.$team->id);?>"><button style="border-radius: 6px;" type="button" class="btn btn-info">View</button></a></td>
                          </tr>
                           <?php 
                          } ?>
                        </tbody>   
                    </table>
                </div>
            </div>  
          </div>
        </div>
        <!-- /.col -->
        </div>

        <!-- /.col -->
      </div>

      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>

    <!-- Content Header (Page header) -->
    
      
       
       
  