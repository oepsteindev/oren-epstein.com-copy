<style>
	
	
#map {
    
    width: 100%;
    left: 0;
    height: 400px;
    margin-top: 90px;
}

#msg{
	margin:30px;
}
</style>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDL9VcHLOur0_GyOueE1Dkk-rgm3zBOkZ0&callback=initMap"
  type="text/javascript"></script>




    <div class="container">
     <div class="row">   
     <div id="map" ></div>  
        </div>
     
        
        
        
        <div class="row mt-20 mb-20">
			<div class="col-md-12 col-md-offset-1 col-centered mb-10" >	           
               		 <h1>Drop me a line, I would <span class="greenies">love</span> to hear from you!</h1>
               		 </div>
		</div>
<div class="row">
	<div id="msg"></div>
</div>		
		
<div class="row">
	<div class="col-md-11 col-md-offset-1 col-centered mb-10" >
  <form class="form-horizontal" name="commentform">
    <div class="form-group">
        <div class="col-md-4">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
        </div>
        <div class="col-md-4">
       
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your question or comment here"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <button id="submit" class="btn btn-warning pull-right">Send</button>
        </div>
    </div>
</form>
</div><!-- /col md  -->
</div><!-- /row -->

    </div>


