<style type="text/css">
@media (max-width: 768px){
	.row {
	    margin-left: 0px!important;
	     margin-top: 120px!important; 
	     margin-bottom: 120px!important; 
	}
}

@media (max-width: 767px){
	.row {
	    margin-left: 0px!important;
	    margin-top: 120px!important;
	}
}

@media (max-width: 1024px){
	.row {
	    margin: 0px!important;
	    margin-left: 0px!important;
	    margin-top:120px!important;
	    margin-bottom:50px!important;
	}
}

.error {
    color: red;
    float: left;
    font-size: 14px;
    margin: 10px;
}
</style>

<div class="container-fluid" style="overflow-y: hidden;">

	<div class="col-sm-12">

		<div class="row" style="margin-bottom:100px;">

			<div class="col-sm-3 col-xs-12"></div>
			
			<div class="col-sm-6 col-xs-12" style="background:#f37e7e; border-radius:10px; box-shadow: 0px 3px 5px -2px rgba(112,94,112,1);">

				<p><h4 style="margin:8px; color:#fff;"><b>Contact Us<b></h4>
					<span id="success_msg" style="color: #fff;"></span>
				</p>
					<form action="">
					  <div class="form-group">
					    
					    <input type="text" required="required"  class="form-control" id="name" placeholder="Your Name">
					    <span class="error" id="name_err"></span>
					  </div>
					 
					 
					 
					  <div class="form-group">
					    
					    <input type="email" required="required" class="form-control" id="email" placeholder="Email@example.com">
					    <span class="error" id="email_err"></span>
					  </div>

					  <div class="form-group">
					    
					    <input type="number" required="required" class="form-control" id="mobile" placeholder="Phone Number">
					    <span class="error" id="mobile_err"></span>
					  </div>
					  
					  
					  <div class="form-group">
					    
					    <textarea id="message" required="required" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Your Massage"></textarea>
					    <span class="error" id="message_err"></span>
					  </div>
					 <button style="margin:15px;" type="button" class="btn btn-primary">Submit</button>
					 <!--  <button style="margin:15px;" onclick="contact_form();" type="button" class="btn btn-primary">Submit</button> -->
					</form>
			</div>
			
			<div class="col-sm-3 col-xs-12	" ></div>


		</div>

	</div>

</div>

<script type="text/javascript">
	var SITE_URL = "<?php echo base_url(''); ?>";
</script>