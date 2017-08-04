<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>

    <style type="text/css">
.unslider-arrow.next {
    display: block;
    width: 32px;
    height: 32px;
    top: 50%;
    margin-right: 10px;
    left: auto;
    margin-top: -16px;
    overflow: hidden;
    background: rgba(0,0,0,.2) no-repeat 50% 50%;
    background-image: url("/oren-epstein/assets/oe_img/rightarrow.png");
    background-size: 50px 50px;
    border-radius: 32px;
    text-indent: -999em;
    opacity: .6;
    transition: opacity .2s;
    }
    .unslider-arrow.prev {
    display: block;
    width: 32px;
    height: 32px;
    top: 50%;
    right: 50px;
    margin-left: 10px;
    margin-top: -16px;
    overflow: hidden;
    background: rgba(0,0,0,.2) no-repeat 50% 50%;
    background-image: url("/oren-epstein/assets/oe_img/leftarrow.png");
    background-size: 50px 50px;
    border-radius: 32px;
    text-indent: -999em;
    opacity: .6;
    transition: opacity .2s;
    }
    </style>

    <title></title>
</head>

<body>
	
	<div class="row">
		<div class="title"><?php echo $title;?></div>
	</div>
	
	
    <div class="row">
        <div class="col-md-10 col-md-offset-1 mt-30" >
            <div class="my-slider">
                <ul>
	                <?php
		                foreach($slides as $slide){
			                if($slide!=''){
			                echo '<li>'.$slide.'</li>';
							}
		                }
                    
                         ?>               
                </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
	    <div class="col-md-9 col-md-offset-1 col-centered" style="border-bottom:  double #444; width: 1024px;"></div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-1 desc" >
	        <?php
		        if(strpos((string)$desc,'-',0)!=FALSE){
			        if($unit!='ddma' AND $unit!='act' AND $unit!='press' AND $unit!="cd"){
			        $desc = str_replace("-","<br><br>",(string)$desc);
			        }
			    }
		        
		        ?>
	       <p class="desc"> <?php echo $desc;?></p>
        </div>
        
         <div class="col-md-2" >
	         
	        <?php
	         if(strpos((string)$skills,',',0)!=FALSE){
			        $skills = str_replace(",","<br>",(string)$skills);
			    }
	         ?>
	         <div class="skills"> <p align="right"><strong>Skills Needed:</strong></p>
	         <p><?php echo $skills;?></p></div>
         </div>
        
    </div>
    
    
    
    
  
</body>
</html>
