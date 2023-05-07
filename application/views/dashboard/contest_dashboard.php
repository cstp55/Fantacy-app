<div class="content-wrapper" style="min-height: 1147px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $match_record->title; ?> 
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard 2</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        
        <!-- /.col -->
        <div class="col-12 col-md-6 col-lg-6">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-thumbsup"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Total contest</span>
              <span class="info-box-text"><?php echo $contests; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-12 col-md-6 col-lg-6">
          <div class="info-box">
            <span class="info-box-icon bg-purple"><i class="ion ion-bag"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">Participant Count </span>
              <span class="info-box-text"><?php echo $user_count; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
       
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
        <div class="row">
          <div class="col-lg-12">
          <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                      <thead>
                          <tr>
                            <th>No</th>
                              <th>Contest Name</th>
                              <th>Winners</th>
                              <th>Prize Pool</th>
                              <th>Total Team</th>
                              <th>Join Team</th>
                              <th>Entry</th>
                              <th>View Leaderboard</th>
                          </tr>
                      <tbody>
                          <?php 
                          $i = 1;
                          foreach ($all_contest as $contest) {
                         // $user = $this->user_model->get_by_id($team->user_id);
                           ?>
                           <tr>
                            <td><?php echo $i++;?></td>

                            <td><?php echo $contest['contest_name'];?></td>
                            <td><?php echo $contest['winners'];?></td>
                            <td><?php echo $contest['prize_pool'];?></td>
                            <td><?php echo $contest['total_team'];?></td>
                            <td><?php echo $contest['join_team'];?></td>
                            <td><?php echo $contest['entry'];?></td>
                            <td><a href="<?php echo base_url('dashboard/match_leaderboard/'.$contest['match_id'].'/'.$contest['contest_id']);?>"><button style="border-radius: 6px;" type="button" class="btn btn-info">View</button></a></td>
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
    
      
       
       
  