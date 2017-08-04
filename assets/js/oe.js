   $(function() {    

		    $('.my-slider').unslider({
		      speed: 500,  //  The speed to animate each slide (in milliseconds)
		      arrows:true,
		      delay: 10000,              //  The delay between slide animations (in milliseconds)
		      complete: function() {},  //  A function that gets called after every slide animation
		      keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		      dots: true,               //  Display dot navigation
		      fluid: true,              //  Support responsive design. May break non-responsive designs
		      //autoplay: true,
		      fade: 'fade'
		    });
		    
		    
		    $('.grid').masonry({
			  // options
			  itemSelector: '.grid-item',
			  columnWidth: 220,
			  
			});
			
			
			 $(".ul.nav.navbar-nav.navbar-right.li").hover(function(){ 
				 $(this).css("border-top", "red");
									    });
		
			
			//align bottom of content divs
			var spotify = $(".spotify").height();
			var left_content_height = Math.ceil($(".left_content").height());
			var right_content_height = Math.ceil($(".right_content").height());
			var diff = Math.ceil(eval(right_content_height - left_content_height - 10));
			$(".spotify").height(Math.ceil(eval(spotify + diff)));	

			
			
			//move bootstrap menu items						   
			$('li.active').removeClass('active');
			$('a[href="' + location.pathname + '"]').closest('li').addClass('active').css("border-top", "red");			
			
$("#submit").click(function(e){
		
		e.preventDefault();
		
		
		var first_name = $("#first_name").val();
		var last_name = $("#last_name").val();
		var email = $("#email").val();
		var comment = $("#comments").val();
				
		
	$("#submit").html('<img src="http://www.oren-epstein.com/assets/oe_img/spinner.gif" width="25" height="25">');
		
		$.ajax({
			
            timeout: 10000,
            url: "../mailit.php",
            type: "post",
            dataType: 'json',
            data: {first_name:first_name, last_name: last_name, email:email, comments:comment,}, 
            tryCount : 0,
            retryLimit : 3,
            success:function(resp)
            {
	            
	           if(resp.success==true){
		           $("#submit").html('Send');
		           $("#msg").html("<div class='row'><span style='color:green;font-size:24px;background-color:#ccc;padding:10px;margin:10px;'>Your message has been sent,<br><br> thanks!</span></div>");
	           }else{
		           $("#msg").html("<div class='row'><span style='color:red;ont-size:24px;background-color:#ccc;padding:10px;margin:10px;'>Your message failed to send. <br><br>Please correct the following:<br><br> " + resp.reason)+"</span></div>";
	           }
	           
				
										
            },
            error:function(xhr, textStatus, errorThrown)
            {
                if (textStatus == 'timeout')
                {
                    this.tryCount++;
                    if (this.tryCount <= this.retryLimit)
                    {
                        $.ajax(this);
                        return;
                    }
                }
               $("#response").html("There has been an error");

            }

            
            
          })
            
            
       })
       

	initMap();
			
    });
    
   

function initMap() {
	var lat = 27.952323;
	var longitude = -82.487196
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
        center: {
            lat: lat, 
            lng: longitude
        },
        zoom: 12
    });
    
    
    var marker = new google.maps.Marker({
          position: {lat: lat, lng: longitude},
          map: map,
          title: 'Oren\'s World!',
          optimized: false
        });
    
    }




