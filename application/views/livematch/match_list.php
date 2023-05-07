<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Live Match
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">match</a></li>
        <li class="breadcrumb-item active">live</li>
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
                              <th>Contest</th>
                              <th>Tean First</th>
                              <th>Tean Second</th>
                              <th>Match Status</th>
                              <th>Match Type</th>
                              <th>Match Players</th>
                            </tr>
                          </thead>
                          <tbody>
                         <?php
            foreach ($match_data as $match)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td width="80px"> <a href="<?php echo base_url('dashboard/match_dashboard/'.$match->match_id) ?>"> <button style="border-radius: 6px;" type="button" class="btn btn-info">Contest</button> </a></td>
            <td><?php
               $teamone =  $this->Match_model->team_name($match->teamid1);
             echo $teamone->team_name; ?></td>
            <td><?php 
              $teamtwo = $this->Match_model->team_name($match->teamid2);
            echo $teamtwo->team_name; ?></td>
            <td><?php echo $match->match_status; ?></td>
            <td><?php echo $match->type; ?></td>
            <td><?php echo anchor(site_url('match_players/index/'.$match->match_id),'<button style="border-radius: 6px;" type="button" class="btn btn-info"><i class="fa fa-book" aria-hidden="true"></i></button>'); ?></td>
        </tr>
                <?php
            }
            ?>
                          </tbody>
                         
                        </table>
                      </div>
                    </div>
                 
                </div>
              </div>
            </div>
      
       
       