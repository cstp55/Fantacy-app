<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Match Contest List
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">match contest</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
          
	 <div class="box box-default">
        
        <!-- /.box-header -->
        <div class="box-body wizard-content">
                    
                    
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
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
                              <th>View Team</th>
                          </tr>
                      <tbody>
                          <?php 
                          $i = 1;
                          foreach ($all_contest as $contest) { ?>
                           <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $contest['contest_name'];?></td>
                            <td><?php echo $contest['winners'];?></td>
                            <td><?php echo $contest['prize_pool'];?></td>
                            <td><?php echo $contest['total_team'];?> </td>
                            <td><?php echo $contest['join_team'] ; ?></td>
                            <td><?php echo $contest['entry'] ; ?></td>
                            <td><a href="<?php echo base_url('old_match/match_leaderboard/'.$contest['match_id'].'/'.$contest['contest_id']);?>"><button  style="border-radius: 6px;" type="button" class="btn btn-success">View</button></a></td>
                          </tr>
                           <?php 
                          } ?>
                        </tbody>   
                    </table>
          </div>
        </div>
     
    </div>
  </div>
</div>
      
       
       